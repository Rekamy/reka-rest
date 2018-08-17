<?php
namespace common\gii\crud;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ColumnSchema;
use yii\db\Schema;
use yii\db\TableSchema;
use yii\gii\CodeFile;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\helpers\VarDumper;
use yii\web\Controller;
use \yii\gii\Generator as BaseGenerator;

/**
 * Generates Relational CRUD
 *
 *
 * @author Yohanes Candrajaya <moo.tensai@gmail.com>
 * @since 2.0
 */
class Generator extends BaseGenerator
{

    public $tableName = '*';
    public $nameAttribute = 'name, title, username';
    public $hiddenColumns = 'id, lock';
    public $skippedColumns = 'created_at, updated_at, created_by, updated_by, deleted_at, deleted_by, created, modified, deleted';
    public $nsModel = 'common\models';
    public $nsSearchModel = 'common\models\search';
    public $booleanColumn = ['status'];
    public $generateSearchModel = true;
    public $searchModelClass;
    public $generateQuery = true;
    public $queryNs = 'common\models\query';
    public $queryClass;
    public $queryBaseClass = 'yii\db\ActiveQuery';
    public $generateLabelsFromComments = false;
    public $useTablePrefix = false;
    public $generateRelations = true;
    public $generateMigrations = true;
    public $optimisticLock = 'lock';
    public $createdAt = 'created_at';
    public $updatedAt = 'updated_at';
    public $timestampValue = "new \\yii\\db\\Expression('CURRENT_TIMESTAMP')";
    public $createdBy = 'created_by';
    public $updatedBy = 'updated_by';
    public $blameableValue = 'Yii::\$app->user->id';
    public $UUIDColumn = 'id';
    public $deletedBy = 'deleted_by';
    public $deletedAt = 'deleted_at';
    public $nsController = 'frontend\controllers';
    public $controllerClass;
    public $pluralize;
    public $loggedUserOnly = true;
    public $expandable = true;
    public $cancelable = true;
    public $enableI18N = true;
    public $saveAsNew;
    public $pdf;
    public $viewPath = '@frontend/vue/app/src/views';
    public $baseControllerClass = 'yii\rest\ActiveController';
    public $indexWidgetType = 'grid';
    public $relations;

    /**
     * @inheritdoc
     */
    public function requiredTemplates()
    {
        return ['controller.php'];
    }

    /**
     * @inheritdoc
     */
    public function generate()
    {
        $files = [];
        $relations = $this->generateRelations();
        $this->relations = $relations;
        $db = $this->getDbConnection();
        $this->nameAttribute = ($this->nameAttribute) ? explode(',', str_replace(' ', '', $this->nameAttribute)) : [$this->nameAttribute];
        $this->hiddenColumns = ($this->hiddenColumns) ? explode(',', str_replace(' ', '', $this->hiddenColumns)) : [$this->hiddenColumns];
        $this->skippedColumns = ($this->skippedColumns) ? explode(',', str_replace(' ', '', $this->skippedColumns)) : [$this->skippedColumns];
        $this->skippedRelations = ($this->skippedRelations) ? explode(',', str_replace(' ', '', $this->skippedRelations)) : [$this->skippedRelations];
        $this->skippedColumns = array_filter($this->skippedColumns);
        $this->skippedRelations = array_filter($this->skippedRelations);
        foreach ($this->getTableNames() as $tableName) {
            // model :
            if (strpos($this->tableName, '*') !== false) {
                $modelClassName = $this->generateClassName($tableName);
                $controllerClassName = $modelClassName . 'Controller';
            } else {
                $modelClassName = (!empty($this->modelClass)) ? $this->modelClass : Inflector::id2camel($tableName, '_');
                $controllerClassName = (!empty($this->controllerClass)) ? $this->controllerClass : $modelClassName . 'Controller';
            }
//            $queryClassName = ($this->generateQuery) ? $this->generateQueryClassName($modelClassName) : false;
            $tableSchema = $db->getTableSchema($tableName);
            $this->modelClass = "{$this->nsModel}\\{$modelClassName}";
            $this->tableSchema = $tableSchema;
//            $this->relations = isset($relations[$tableName]) ? $relations[$tableName] : [];
            $this->controllerClass = $this->nsController . '\\' . $controllerClassName;
            $isTree = !array_diff(self::getTreeColumns(), $tableSchema->columnNames);

            // search model :
            if ($this->generateSearchModel && !$isTree) {
                if (empty($this->searchModelClass) || strpos($this->tableName, '*') !== false) {
                    $searchModelClassName = $modelClassName . 'Search';
                } else {
                    if ($this->nsSearchModel === $this->nsModel && $this->searchModelClass === $modelClassName) {
                        $searchModelClassName = $this->searchModelClass . 'Search';
                    } else {
                        $searchModelClassName = $this->searchModelClass;
                    }
                }
                $this->searchModelClass = $this->nsSearchModel . '\\' . $searchModelClassName;
                $searchModel = Yii::getAlias('@' . str_replace('\\', '/', ltrim($this->searchModelClass, '\\') . '.php'));
                $files[] = new CodeFile($searchModel, $this->render('search.php',
                    ['relations' => isset($relations[$tableName]) ? $relations[$tableName] : []]));
            }

            //controller
            $files[] = new CodeFile(
                Yii::getAlias('@' . str_replace('\\', '/', $this->nsController)) . '/' . $controllerClassName . '.php',
                ($isTree) ?
                    $this->render('controllerNested.php', [
                        'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                    ])
                    :
                    $this->render('controller.php', [
                        'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                    ])
            );

            // views :
            $viewPath = $this->getViewPath();
            $templatePath = $this->getTemplatePath() . '/views';
            foreach (scandir($templatePath) as $file) {
//                if($file === '_formNested.php')
//                    echo  $file;
                if (empty($this->searchModelClass) && $file === '_search.php') {
                    continue;
                }
                if ($file === '_formrefone.php' || $file === '_formrefmany.php' || $file === '_datarefone.php'
                    || $file === '_datarefmany.php' || $file === '_expand.php' || $file === '_detail.php'
                    || $file === '_data.php' || $file === 'saveAsNew.php' || $file === '_pdf.php') {
                    continue;
                }
                if($this->indexWidgetType != 'list' && $file === '_index.php') {
                    continue;
                }
                if($isTree && ($file === 'index.php' || $file === 'view.php' || $file === '_form.php'
                    || $file === 'create.php' || $file === 'update.php'
                    )){
                    continue;
                }
                if(!$isTree && ($file === 'indexNested.php' || $file === '_formNested.php')){
                    continue;
                }
                if (is_file($templatePath . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                    $fileName = ($isTree) ? str_replace('Nested','',$file) : $file;
                    $files[] = new CodeFile("$viewPath/$fileName", $this->render("views/$file", [
                        'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                        'isTree' => $isTree
                    ]));
                }
            }
            if ($this->expandable) {
                $files[] = new CodeFile("$viewPath/_expand.php", $this->render("views/_expand.php", [
                    'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                ]));
            }

            if ($this->pdf) {
                $files[] = new CodeFile("$viewPath/_pdf.php", $this->render("views/_pdf.php", [
                    'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                ]));
            }

            if($this->saveAsNew){
                $files[] = new CodeFile("$viewPath/saveAsNew.php", $this->render("views/saveAsNew.php", [
                    'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                ]));
            }

            if (isset($relations[$tableName]) && !$isTree) {
                if ($this->expandable) {
                    $files[] = new CodeFile("$viewPath/_detail.php", $this->render("views/_detail.php", [
                        'relations' => isset($relations[$tableName]) ? $relations[$tableName] : [],
                    ]));
                }
                foreach ($relations[$tableName] as $name => $rel) {
                    if ($rel[self::REL_IS_MULTIPLE] && isset($rel[self::REL_TABLE]) && !in_array($name, $this->skippedRelations)) {
                        $files[] = new CodeFile("$viewPath/_form{$rel[self::REL_CLASS]}.php", $this->render("views/_formrefmany.php", [
                            'relations' => isset($relations[$tableName]) ? $relations[$tableName][$name] : [],
                        ]));
                        if ($this->expandable) {
                            $files[] = new CodeFile("$viewPath/_data{$rel[self::REL_CLASS]}.php", $this->render("views/_datarefmany.php", [
                                'relName' => $name,
                                'relations' => isset($relations[$tableName]) ? $relations[$tableName][$name] : [],
                            ]));
                        }
                    }else if(isset($rel[self::REL_IS_MASTER]) && !$rel[self::REL_IS_MASTER] && !in_array($name, $this->skippedRelations)){
                        $files[] = new CodeFile("$viewPath/_form{$rel[self::REL_CLASS]}.php", $this->render("views/_formrefone.php", [
                            'relName' => $name,
                            'relations' => isset($relations[$tableName]) ? $relations[$tableName][$name] : [],
                        ]));
                        if ($this->expandable) {
                            $files[] = new CodeFile("$viewPath/_data{$rel[self::REL_CLASS]}.php", $this->render("views/_datarefone.php", [
                                'relName' => $name,
                                'relations' => isset($relations[$tableName]) ? $relations[$tableName][$name] : [],
                            ]));
                        }
                    }
                }
            }

            if (strpos($this->tableName, '*') !== false || $isTree) {
                $this->modelClass = '';
                $this->controllerClass = '';
                $this->searchModelClass = '';
            } else {
                $this->modelClass = $modelClassName;
                $this->controllerClass = $controllerClassName;
                if ($this->generateSearchModel) {
                    $this->searchModelClass = $searchModelClassName;
                }
            }
        }
        $this->nameAttribute = (is_array($this->nameAttribute)) ? implode(', ', $this->nameAttribute) : '';
        $this->hiddenColumns = (is_array($this->hiddenColumns)) ? implode(', ', $this->hiddenColumns) : '';
        $this->skippedColumns = (is_array($this->skippedColumns)) ? implode(', ', $this->skippedColumns) : '';
        $this->skippedRelations = (is_array($this->skippedRelations)) ? implode(', ', $this->skippedRelations) : '';

        return $files;
    }

    /**
     * @return string the controller ID (without the module ID prefix)
     */
    public function getControllerID()
    {
        $pos = strrpos($this->controllerClass, '\\');
        $class = substr(substr($this->controllerClass, $pos + 1), 0, -10);

        return Inflector::camel2id($class);
    }

    /**
     * @return string the controller view path
     */
    public function getViewPath()
    {
        if (empty($this->viewPath)) {
            return Yii::getAlias('@app/views/' . $this->getControllerID());
        } else {
            return Yii::getAlias($this->viewPath . '/' . $this->getControllerID());
        }
    }

    public function getNameAttribute()
    {
        foreach ($this->tableSchema->getColumnNames() as $name) {
            foreach ($this->nameAttribute as $nameAttr) {
                if (!strcasecmp($name, $nameAttr) || !strcasecmp($name, $this->tableSchema->fullName)) {
                    return $name;
                }
            }
        }
        /* @var $class ActiveRecord */
//        $class = $this->modelClass;
        $pk = empty($this->tableSchema->primaryKey) ? $this->tableSchema->getColumnNames()[0] : $this->tableSchema->primaryKey[0];

        return $pk;
    }

    public function getNameAttributeFK($tableName)
    {
        $tableSchema = $this->getDbConnection()->getTableSchema($tableName);
        foreach ($tableSchema->getColumnNames() as $name) {
            if (in_array($name, $this->nameAttribute) || $name === $tableName) {
                return $name;
            }
        }
        $pk = empty($tableSchema->primaryKey) ? $tableSchema->getColumnNames()[0] : $tableSchema->primaryKey[0];

        return $pk;
    }

    public function generateFK($tableSchema = null)
    {
        if (is_null($tableSchema)) {
            $tableSchema = $this->getTableSchema();
        }
        $fk = [];
        if (isset($this->relations[$tableSchema->fullName])) {
            foreach ($this->relations[$tableSchema->fullName] as $name => $relations) {
                foreach ($tableSchema->foreignKeys as $value) {
                    if (isset($relations[self::REL_FOREIGN_KEY]) && $relations[self::REL_TABLE] == $value[self::FK_TABLE_NAME]) {
                        if ($tableSchema->fullName == $value[self::FK_TABLE_NAME] && $relations[self::REL_IS_MULTIPLE]) { // In case of self-referenced tables (credit to : github.com/iurijacob)

                        } else {
                            $fk[$relations[5]] = $relations;
                            $fk[$relations[5]][] = $name;
                        }

                    }
                }
            }
        }
        return $fk;
    }

    /**
     * Generates code for Grid View field
     * @param string $attribute
     * @param TableSchema $tableSchema
     * @return string
     */
    public function generateDetailViewField($attribute, $fk, $tableSchema = null)
    {
        if (is_null($tableSchema)) {
            $tableSchema = $this->getTableSchema();
        }
        if (in_array($attribute, $this->hiddenColumns)) {
            return "['attribute' => '$attribute', 'visible' => false],\n";
        }
        if (in_array($attribute, $this->booleanColumn) && !in_array($attribute, $this->hiddenColumns)) {
            return "[
                'attribute' => '$attribute',
                'format' => 'raw',
                'value' => function(\$model) {
                    switch(\$model['$attribute']) {
                        case 1:
                        return \kartik\helpers\Html::bsLabel('Active','success');
                        break;
                        default:
                        return \kartik\helpers\Html::bsLabel('Inactive','danger');
                        break;
                    }
                },
                'visible' => true,
            ],\n";
        }
        $humanize = Inflector::humanize($attribute, true);
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "";
            } else {
                return "'$attribute',\n";
            }
        }
        $column = $tableSchema->columns[$attribute];
        $format = $this->generateColumnFormat($column);
//        if($column->autoIncrement){
//            return "";
//        } else
        if (array_key_exists($attribute, $fk)) {
            $rel = $fk[$attribute];
            $labelCol = $this->getNameAttributeFK($rel[3]);
//            $humanize = Inflector::humanize($rel[3]);
//            $id = 'grid-' . Inflector::camel2id(StringHelper::basename($this->searchModelClass)) . '-' . $attribute;
//            $modelRel = $rel[2] ? lcfirst(Inflector::pluralize($rel[1])) : lcfirst($rel[1]);
            $output = "[
            'attribute' => '$rel[7].$labelCol',
            'label' => " . $this->generateString(ucwords(Inflector::humanize($rel[5]))) . ",
        ],\n";
            return $output;
        } else {
            return "'$attribute" . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }

    /**
     * Generates code for Grid View field
     * @param string $attribute
     * @param array $fk
     * @param TableSchema $tableSchema
     * @return string
     */
    public function generateGridViewField($attribute, $fk, $tableSchema = null)
    {
        if (is_null($tableSchema)) {
            $tableSchema = $this->getTableSchema();
        }

        if (in_array($attribute, $this->hiddenColumns)) {
            return "['attribute' => '$attribute', 'visible' => false],\n";
        }
        if (in_array($attribute, $this->booleanColumn) && !in_array($attribute, $this->hiddenColumns)) {
            return "[
                'attribute' => '$attribute',
                'format' => 'raw',
                'value' => function(\$model) {
                    switch(\$model['$attribute']) {
                        case 1:
                        return \kartik\helpers\Html::bsLabel('Active','success');
                        break;
                        default:
                        return \kartik\helpers\Html::bsLabel('Inactive','danger');
                        break;
                    }
                },
                'visible' => true,
            ],\n";
        }
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "";
            } else {
                return "'$attribute',\n";
            }
        }
        $column = $tableSchema->columns[$attribute];
        $format = $this->generateColumnFormat($column);
        $baseClass = StringHelper::basename($this->modelClass);

        if (array_key_exists($attribute, $fk)) {
            $rel = $fk[$attribute];
            if ($rel[self::REL_CLASS] == $baseClass) {
                return "";
            }
            $labelCol = $this->getNameAttributeFK($rel[3]);
//            $modelRel = $rel[2] ? lcfirst(Inflector::pluralize($rel[1])) : lcfirst($rel[1]);
            $output = "[
                'attribute' => '$rel[7].$labelCol',
                'label' => " . $this->generateString(ucwords(Inflector::humanize($rel[5]))) . "
            ],\n";
            return $output;
        } else {
            return "'$attribute" . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }

    /**
     * Generates code for Grid View field
     * @param string $attribute
     * @param array $fk
     * @param TableSchema $tableSchema
     * @return string
     */
    public function generateGridViewFieldIndex($attribute, $fk, $tableSchema = null)
    {
        if (is_null($tableSchema)) {
            $tableSchema = $this->getTableSchema();
        }
        if (in_array($attribute, $this->booleanColumn) && !in_array($attribute, $this->hiddenColumns)) {
            return "[
            'attribute' => '$attribute',
            'format' => 'raw',
            'value' => function(\$model) {
                switch (\$model['$attribute']) {
                    case 1:
                    return \kartik\helpers\Html::bsLabel('Active','success');
                    break;

                    default:
                    return \kartik\helpers\Html::bsLabel('Inactive','danger');
                    break;
                }
            }
        ],\n";
        }
        if (in_array($attribute, $this->hiddenColumns)) {
            return "['attribute' => '$attribute', 'visible' => false],\n";
        }
//        $humanize = Inflector::humanize($attribute, true);
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "";
            } else {
                return "'$attribute',\n";
            }
        }
        $column = $tableSchema->columns[$attribute];
        $format = $this->generateColumnFormat($column);
//        if($column->autoIncrement){
//            return "";
//        } else
        if (array_key_exists($attribute, $fk) && $attribute) {
            $rel = $fk[$attribute];
            $labelCol = $this->getNameAttributeFK($rel[3]);
            $humanize = Inflector::humanize($rel[3]);
            $id = 'grid-' . Inflector::camel2id(StringHelper::basename($this->searchModelClass)) . '-' . $attribute;
//            $modelRel = $rel[2] ? lcfirst(Inflector::pluralize($rel[1])) : lcfirst($rel[1]);
           if ($column->allowNull)
           { $output = "[
                'attribute' => '$attribute',
                'label' => " . $this->generateString(ucwords(Inflector::humanize($rel[5]))) . ",
                'value' => function(\$model){
                    if (\$model->$rel[7])
                    {return \$model->$rel[7]->$labelCol;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \\yii\\helpers\\ArrayHelper::map(\\$this->nsModel\\$rel[1]::find()->asArray()->all(), '{$rel[self::REL_PRIMARY_KEY]}', '$labelCol'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => '$humanize', 'id' => '$id']
            ],\n";
           return $output;
           }
           else
           { $output = "[
                'attribute' => '$attribute',
                'label' => " . $this->generateString(ucwords(Inflector::humanize($rel[5]))) . ",
                'value' => function(\$model){
                    return \$model->$rel[7]->$labelCol;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \\yii\\helpers\\ArrayHelper::map(\\$this->nsModel\\$rel[1]::find()->asArray()->all(), '{$rel[self::REL_PRIMARY_KEY]}', '$labelCol'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => '$humanize', 'id' => '$id']
            ],\n";
           return $output;
           }
        } else {
            return "'$attribute" . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }

    /**
     * Generates code for Kartik Tabular Form field
     * @param string $attribute
     * @return string
     */
    public function generateTabularFormField($attribute, $fk, $tableSchema = null)
    {
        if (is_null($tableSchema)) {
            $tableSchema = $this->getTableSchema();
        }
        if (in_array($attribute, $this->hiddenColumns)) {
            return "\"$attribute\" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]]"; //fixes #91 https://github.com/mootensai/yii2-enhanced-gii/issues/91
        }
        $humanize = Inflector::humanize($attribute, true);
        if (in_array($attribute, $this->booleanColumn) && !in_array($attribute, $this->hiddenColumns)) {
            return "'$attribute' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \\kartik\\widgets\\Select2::className(),
            'options' => [
                'data' => [1 => 'Active', 0 => 'Inactive'],
                'options' => ['placeholder' => " . $this->generateString('Choose ' . $humanize) . ",],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ],
            'columnOptions' => ['width' => '200px'],
        ]";
        }
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "\"$attribute\" => ['type' => TabularForm::INPUT_PASSWORD]";
            } else {
                return "\"$attribute\" => ['type' => TabularForm::INPUT_TEXT]";
            }
        }
        $column = $tableSchema->columns[$attribute];
        if ($column->autoIncrement) {
            return "'$attribute' => ['type' => TabularForm::INPUT_HIDDEN]";
        } elseif ($column->phpType === 'boolean' || $column->dbType === 'tinyint(1)') {
            return "'$attribute' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ]";
        } elseif ($column->type === 'text' || $column->dbType === 'tinytext') {
            return "'$attribute' => ['type' => TabularForm::INPUT_TEXTAREA]";
        } elseif ($column->dbType === 'date') {
            return "'$attribute' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \\kartik\\datecontrol\\DateControl::classname(),
            'options' => [
                'type' => \\kartik\\datecontrol\\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => " . $this->generateString('Choose ' . $humanize) . ",
                        'autoclose' => true
                    ]
                ],
            ]
        ]";
        } elseif ($column->dbType === 'time') {
            return "'$attribute' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \\kartik\\datecontrol\\DateControl::classname(),
            'options' => [
                'type' => \\kartik\\datecontrol\\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => " . $this->generateString('Choose ' . $humanize) . ",
                        'autoclose' => true
                    ]
                ]
            ]
        ]";
        } elseif ($column->dbType === 'datetime') {
            return "'$attribute' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \\kartik\\datecontrol\\DateControl::classname(),
            'options' => [
                'type' => \\kartik\\datecontrol\\DateControl::FORMAT_DATETIME,
                'saveFormat' => 'php:Y-m-d H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => " . $this->generateString('Choose ' . $humanize) . ",
                        'autoclose' => true,
                    ]
                ],
            ]
        ]";
        } elseif (array_key_exists($column->name, $fk)) {
            $rel = $fk[$column->name];
            $labelCol = $this->getNameAttributeFK($rel[self::REL_TABLE]);
            $humanize = Inflector::humanize($rel[self::REL_TABLE]);
//            $pk = empty($this->tableSchema->primaryKey) ? $this->tableSchema->getColumnNames()[0] : $this->tableSchema->primaryKey[0];
            $fkClassFQ = "\\" . $this->nsModel . "\\" . $rel[self::REL_CLASS];
            $output = "'$attribute' => [
            'label' => '$humanize',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \\kartik\\widgets\\Select2::className(),
            'options' => [
                'data' => \\yii\\helpers\\ArrayHelper::map($fkClassFQ::find()->orderBy('$labelCol')->asArray()->all(), '{$rel[self::REL_PRIMARY_KEY]}', '$labelCol'),
                'options' => ['placeholder' => " . $this->generateString('Choose ' . $humanize) . "],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ],
            'columnOptions' => ['width' => '200px']
        ]";
            return $output;
        } else {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name)) {
                $input = 'INPUT_PASSWORD';
            } else {
                $input = 'INPUT_TEXT';
            }
            if (is_array($column->enumValues) && count($column->enumValues) > 0) {
                $dropDownOptions = [];
                foreach ($column->enumValues as $enumValue) {
                    $dropDownOptions[$enumValue] = Inflector::humanize($enumValue);
                }
                return "'$attribute' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => " . preg_replace("/\n\s*/", ' ', VarDumper::export($dropDownOptions)) . ",
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => " . $this->generateString('Choose ' . $humanize) . "],
                    ]
        ]";
            } elseif ($column->phpType !== 'string' || $column->size === null) {
                return "'$attribute' => ['type' => TabularForm::$input]";
            } else {
                return "'$attribute' => ['type' => TabularForm::$input]"; //max length??
            }
        }
    }

    /**
     * Generates code for active field
     * @param string $attribute
     * @return string
     */
    public function generateActiveField($attribute, $fk, $tableSchema = null, $relations = null, $isTree = false)
    {
        if ($isTree){
            $model = "\$node";
        } else if (is_null($relations)){
            $model = "\$model";
        }else{
            $model = '$'.$relations[self::REL_CLASS];
        }

        if (is_null($tableSchema)) {
            $tableSchema = $this->getTableSchema();
        }
        if (in_array($attribute, $this->hiddenColumns)) {
            return "\$form->field($model, '$attribute', ['template' => '{input}'])->textInput(['style' => 'display:none']);";
        }
        if (in_array($attribute, ['status','approved']) && !in_array($attribute, $this->hiddenColumns)) {
            return "\$form->field($model, '$attribute')->widget(\kartik\widgets\Select2::classname(), [
            'data' => [1 => 'Active', 0 => 'Inactive'],
            'options' => ['placeholder' => 'Select $attribute ...'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]);";
        }
        $placeholder = Inflector::humanize($attribute, true);
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "\$form->field($model, '$attribute')->passwordInput()";
            } else if (in_array($attribute, $this->hiddenColumns)) {
                return "\$form->field($model, '$attribute')->hiddenInput()";
            } else {
                return "\$form->field($model, '$attribute')";
            }
        }
        $column = $tableSchema->columns[$attribute];
        if ($column->phpType === 'boolean' || $column->dbType === 'tinyint(1)') {
            return "\$form->field($model, '$attribute')->checkbox()";
        } elseif ($column->type === 'text' || $column->dbType === 'tinytext') {
            return "\$form->field($model, '$attribute')->textarea(['rows' => 6])";
        } elseif ($column->dbType === 'date') {
            return "\$form->field($model, '$attribute')->widget(\\kartik\\datecontrol\\DateControl::classname(), [
        'type' => \\kartik\\datecontrol\\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => " . $this->generateString('Choose ' . $placeholder) . ",
                'autoclose' => true
            ]
        ],
    ]);";
        } elseif ($column->dbType === 'time') {
            return "\$form->field($model, '$attribute')->widget(\\kartik\\datecontrol\\DateControl::className(), [
        'type' => \\kartik\\datecontrol\\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => " . $this->generateString('Choose ' . $placeholder) . ",
                'autoclose' => true
            ]
        ]
    ]);";
        } elseif ($column->dbType === 'datetime') {
            return "\$form->field($model, '$attribute')->widget(\\kartik\\datecontrol\\DateControl::classname(), [
        'type' => \\kartik\\datecontrol\\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => " . $this->generateString('Choose ' . $placeholder) . ",
                'autoclose' => true,
            ]
        ],
    ]);";
        } elseif (array_key_exists($column->name, $fk)) {
            $rel = $fk[$column->name];
            $labelCol = $this->getNameAttributeFK($rel[3]);
            $humanize = Inflector::humanize($rel[3]);
//            $pk = empty($this->tableSchema->primaryKey) ? $this->tableSchema->getColumnNames()[0] : $this->tableSchema->primaryKey[0];
            $fkClassFQ = "\\" . $this->nsModel . "\\" . $rel[1];
            $output = "\$form->field($model, '$attribute')->widget(\\kartik\\widgets\\Select2::classname(), [
        //'data' => \\yii\\helpers\\ArrayHelper::map($fkClassFQ::find()->orderBy('$rel[4]')->asArray()->all(), '$rel[4]', '$labelCol'),
        'data' => $fkClassFQ::arrayList(),
        'options' => ['placeholder' => " . $this->generateString('Choose ' . $humanize) . "],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);";
            return $output;
        } else {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name)) {
                $input = 'passwordInput';
            } else {
                $input = 'textInput';
            }
            if (is_array($column->enumValues) && count($column->enumValues) > 0) {
                $dropDownOptions = [];
                foreach ($column->enumValues as $enumValue) {
                    $dropDownOptions[$enumValue] = Inflector::humanize($enumValue);
                }
                return "\$form->field($model, '$attribute')->dropDownList("
                . preg_replace("/\n\s*/", ' ', VarDumper::export($dropDownOptions)) . ", ['prompt' => ''])";
            } elseif ($column->phpType !== 'string' || $column->size === null) {
                return "\$form->field($model, '$attribute')->$input(['placeholder' => '$placeholder'])";
            } else {
                return "\$form->field($model, '$attribute')->$input(['maxlength' => true, 'placeholder' => '$placeholder'])";
            }
        }
    }

    /**
     * Generates column format
     * @param ColumnSchema $column
     * @return string
     */
    public function generateColumnFormat($column)
    {
        if ($column->phpType === 'boolean') {
            return 'boolean';
        } elseif ($column->type === 'text') {
            return 'ntext';
        } elseif (stripos($column->name, 'time') !== false && $column->phpType === 'integer') {
            return 'datetime';
        } elseif (stripos($column->name, 'email') !== false) {
            return 'email';
        } elseif (stripos($column->name, 'url') !== false) {
            return 'url';
        } else {
            return 'text';
        }
    }

    /**
     * Generates URL parameters
     * @return string
     */
    public function generateUrlParams()
    {
        $pks = $this->tableSchema->primaryKey;
        if (count($pks) === 1) {
            if (is_subclass_of($this->modelClass, 'yii\mongodb\ActiveRecord')) {
                return "'id' => (string)\$model->{$pks[0]}";
            } else {
                return "'id' => \$model->{$pks[0]}";
            }
        } else {
            $params = [];
            foreach ($pks as $pk) {
                if (is_subclass_of($this->modelClass, 'yii\mongodb\ActiveRecord')) {
                    $params[] = "'$pk' => (string)\$model->$pk";
                } else {
                    $params[] = "'$pk' => \$model->$pk";
                }
            }

            return implode(', ', $params);
        }
    }

    /**
     * Generates action parameters
     * @return string
     */
    public function generateActionParams()
    {
        $pks = $this->tableSchema->primaryKey;
        if (count($pks) === 1) {
            return '$id';
        } else {
            return '$' . implode(', $', $pks);
        }
    }

    /**
     * Generates parameter tags for phpdoc
     * @return array parameter tags for phpdoc
     */
    public function generateActionParamComments()
    {
        /* @var $class ActiveRecord */
        $pks = $this->tableSchema->primaryKey;
        if (($table = $this->getTableSchema()) === false) {
            $params = [];
            foreach ($pks as $pk) {
                $params[] = '@param ' . (substr(strtolower($pk), -2) == 'id' ? 'integer' : 'string') . ' $' . $pk;
            }

            return $params;
        }
        if (count($pks) === 1) {
            return ['@param ' . $table->columns[$pks[0]]->phpType . ' $id'];
        } else {
            $params = [];
            foreach ($pks as $pk) {
                $params[] = '@param ' . $table->columns[$pk]->phpType . ' $' . $pk;
            }

            return $params;
        }
    }

    /**
     * Generates validation rules for the search model.
     * @return array the generated validation rules
     */
    public function generateSearchRules() {
        if (($table = $this->getTableSchema()) === false) {
            return ["[['" . implode("', '", $this->getColumnNames()) . "'], 'safe']"];
        }
        $types = [];
        foreach ($table->columns as $column) {
            switch ($column->type) {
                case Schema::TYPE_SMALLINT:
                case Schema::TYPE_INTEGER:
                case Schema::TYPE_BIGINT:
                    $types['integer'][] = $column->name;
                    break;
                case Schema::TYPE_BOOLEAN:
                    $types['boolean'][] = $column->name;
                    break;
                case Schema::TYPE_FLOAT:
                case Schema::TYPE_DOUBLE:
                case Schema::TYPE_DECIMAL:
                case Schema::TYPE_MONEY:
                    $types['number'][] = $column->name;
                    break;
                case Schema::TYPE_DATE:
                case Schema::TYPE_TIME:
                case Schema::TYPE_DATETIME:
                case Schema::TYPE_TIMESTAMP:
                default:
                    $types['safe'][] = $column->name;
                    break;
            }
        }

        $rules = [];
        foreach ($types as $type => $columns) {
            $rules[] = "[['" . implode("', '", $columns) . "'], '$type']";
        }

        return $rules;
    }

    /**
     * Generates the attribute labels for the search model.
     * @return array the generated attribute labels (name => label)
     */
    public function generateSearchLabels() {
        /* @var $model Model */
        $model = new $this->modelClass();
        $attributeLabels = $model->attributeLabels();
        $labels = [];
        foreach ($this->getColumnNames() as $name) {
            if (isset($attributeLabels[$name])) {
                $labels[$name] = $attributeLabels[$name];
            } else {
                if (!strcasecmp($name, 'id')) {
                    $labels[$name] = 'ID';
                } else {
                    $label = Inflector::camel2words($name);
                    if (!empty($label) && substr_compare($label, ' id', -3, 3, true) === 0) {
                        $label = substr($label, 0, -3) . ' ID';
                    }
                    $labels[$name] = $label;
                }
            }
        }

        return $labels;
    }

    /**
     * @return array searchable attributes
     */
    public function getSearchAttributes() {
        return $this->getColumnNames();
    }

    /**
     * Generates search conditions
     * @return array
     */
    public function generateSearchConditions() {
        $columns = [];
        if (($table = $this->getTableSchema()) === false) {
            $class = $this->modelClass;
            /* @var $model Model */
            $model = new $class();
            foreach ($model->attributes() as $attribute) {
                $columns[$attribute] = 'unknown';
            }
        } else {
            foreach ($table->columns as $column) {
                $columns[$column->name] = $column->type;
            }
        }

        $likeConditions = [];
        $hashConditions = [];
        foreach ($columns as $column => $type) {
            switch ($type) {
                case Schema::TYPE_SMALLINT:
                case Schema::TYPE_INTEGER:
                case Schema::TYPE_BIGINT:
                case Schema::TYPE_BOOLEAN:
                case Schema::TYPE_FLOAT:
                case Schema::TYPE_DOUBLE:
                case Schema::TYPE_DECIMAL:
                case Schema::TYPE_MONEY:
                case Schema::TYPE_DATE:
                case Schema::TYPE_TIME:
                case Schema::TYPE_DATETIME:
                case Schema::TYPE_TIMESTAMP:
                    $hashConditions[] = "'{$column}' => \$this->{$column},";
                    break;
                default:
                    $likeConditions[] = "->andFilterWhere(['like', '{$column}', \$this->{$column}])";
                    break;
            }
        }

        $conditions = [];
        if (!empty($hashConditions)) {
            $conditions[] = "\$query->andFilterWhere([\n"
                . str_repeat(' ', 12) . implode("\n" . str_repeat(' ', 12), $hashConditions)
                . "\n" . str_repeat(' ', 8) . "]);\n";
        }
        if (!empty($likeConditions)) {
            $conditions[] = "\$query" . implode("\n" . str_repeat(' ', 12), $likeConditions) . ";\n";
        }

        return $conditions;
    }

}
