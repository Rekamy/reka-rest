<?php
namespace cli\controllers;

use Yii;
use yii\helpers\Console;
use yii\console\Controller;
use backend\components\MakeFile;
use cli\template\ModelGenerator;
use cli\template\CrudGenerator;
use yii\helpers\Inflector;
use yii\web\View;


class GenerateController extends Controller
{

    public $overwrite = false;
    public $defaultAction = 'all';
    public $db = 'db';

    public function options($actionID)
    {
        return ['overwrite'];
    }

    public function optionAliases()
    {
        return ['o' => 'overwrite'];
    }

    public function actionAll($type = 'rest', $template = 'default', $themes = 'vue')
    {
        $themes = 'vuetify';
        $this->overwrite = true;

        $db = Yii::$app->getDb();
        // $tableSchema = $db->getTableSchema('user')->getColumnNames();
        $getTableNames = $db->schema->getTableNames();
        $templatePath = Yii::getAlias('@app/cli/template/');
        $templates = [
            'models' => [
                'baseModel' => $templatePath . 'backend/'.$template.'/models/base/Example.php',
                'extendedModel' => $templatePath . 'backend/'.$template.'/models/Example.php',
                'queryModel' => $templatePath . 'backend/'.$template.'/models/query/ExampleQuery.php',
                'searchModel' => $templatePath . 'backend/'.$template.'/models/search/ExampleSearch.php',
            ],
            'controllers' => [
                'activeController' => $templatePath . 'backend/'.$template.'/controllers/active/ExampleController.php',
            ],
            'frontend' => [
                'index' => $templatePath . 'frontend/'.$template.'/'.$themes.'/src/views/index.php',
                'detail' => $templatePath . 'frontend/'.$template.'/'.$themes.'/src/views/detail.php',
                'form' => $templatePath . 'frontend/'.$template.'/'.$themes.'/src/views/form.php',
                // 'route' => $templatePath . 'frontend/vue/app/src/Example.js',
            ],
/*            'mobile' => [
                Yii::getAlias('@app/mobile/react/src/views/'.$fileName.'.php'),
            ],*/
        ];
        var_dump($templates);die;

        foreach ($getTableNames as $key => $tableName) {

            $fileName = Inflector::camel2words(Inflector::id2camel($tableName, '_'));
            $config[] = [
                'modelName' => $fileName,
                'tableName' => $tableName,
            ];
            $targets[] = [
                'models' => [
                    'baseModel' => Yii::getAlias('@app/backend/models/base/'.$fileName.'.php'),
                    'extendedModel' => Yii::getAlias('@app/backend/models/'.$fileName.'.php'),
                    'queryModel' => Yii::getAlias('@app/backend/models/query/'.$fileName.'Query.php'),
                    'searchModel' => Yii::getAlias('@app/backend/models/search/'.$fileName.'Search.php'),
                ],
                'controllers' => [
                    'activeController' => Yii::getAlias('@app/backend/controllers/active/'.$fileName.'Controller.php'),
                ],
                'frontend' => [
                    'index' => Yii::getAlias('@app/frontend/vue/app/src/views/'.$fileName.'/index.vue'),
                    'detail' => Yii::getAlias('@app/frontend/vue/app/src/views/'.$fileName.'/detail.vue'),
                    'form' => Yii::getAlias('@app/frontend/vue/app/src/views/'.$fileName.'/form.vue'),
                    // 'route' => Yii::getAlias('@app/frontend/app/vue/app/src/router.js'),
                ],
                /*'mobile' => [
                    Yii::getAlias('@app/mobile/react/src/views/'.$fileName.'.php'),
                ],*/
            ];

        }
        $routerJs = [];
        // generate view file
        $v = new View();
        foreach ($targets as $key => $target) {
            foreach ($target as $module => $classes) {
                foreach ($classes as $type => $class) {
                    $codeFile = new MakeFile(
                        $target[$module][$type],
                        $v->renderFile($templates[$module][$type], ['g' => $config[$key]])
                    );
                    $routerJs[] =  $target[$module][$type];
                    if($codeFile->save()) {
                        Console::output('create file '.$target[$module][$type]);
                    }
                }
            }
        }
        
        // regenerate router js file
    }


    public function actionCrud($name, $type = 'soap')
    {
        $this->actionModel($name);
        $this->actionController($name, $type);
    }

    public function actionModel($name, $timestamp = true, $blameable = true, $attributes = ['id', 'name'])
    {

        if($timestamp) {
            $attributes = array_merge($attributes, ['created\n_at','updated_at']);
        }
        if($blameable) {
            $attributes = array_merge($attributes, ['created\n_by','updated_by']);
        }

        try{
            $filePath = dirname(__DIR__ ) . "/template/default/models/ExampleModel.php";
            $destPath = Yii::getAlias('@backend') . "/models/" . ucfirst($name) . ".php";

            if(file_exists($destPath) && !$this->overwrite){
                throw new \Exception(ucfirst($name) . "Model Already Exist");
            } else {
                $handle = fopen($filePath, "r");


                $newCont = fopen($destPath, "w") or die("Unable to open file!");

                $content = "";
                    //$content = str_replace("Example", ucfirst($name), $handle);
                while (($line = fgets($handle)) !== false) {
                    if(stristr($line,"ExampleModel")){
                        $content .= str_replace("ExampleModel", ucfirst($name), $line);

                    } else {
                        $content .= $line;
                    }
                }

                    //var_dump($content);die;
                fwrite($newCont, $content);
                fclose($handle);
                fclose($newCont);
                echo ucfirst($name) . "Model Created\n";
            }
        } catch(\Exception $e){
            echo $e;

        }

    }

    public function actionController($name, $type = 'soap')
    {
        if($type == 'soap') {
            try{
                $filePath = dirname(__DIR__ ) . "/example/ExampleController.php";
                $destPath = Yii::getAlias('@backend') . "/controllers/" . ucfirst($name) . "Controller.php";
                if(!file_exists($destPath)){
                    $handle = fopen($filePath, "r");


                    $newCont = fopen($destPath, "w") or die("Unable to open file!");

                    $content = "";
                    //$content = str_replace("Example", ucfirst($name), $handle);
                    while (($line = fgets($handle)) !== false) {
                        if(stristr($line,"Example")){
                            $content .= str_replace("Example", ucfirst($name), $line);

                        } else {
                            $content .= $line;
                        }
                    }

                    //var_dump($content);die;
                    fwrite($newCont, $content);
                    fclose($handle);
                    fclose($newCont);
                    echo ucfirst($name) . "Controller Created\n";
                } else {
                    throw new \Exception(ucfirst($name) . "Controller Already Exist");
                }
            } catch(\Exception $e){
                echo $e;

            }
        } else if($type == 'rest') {
            try{
                $filePath = dirname(__DIR__ ) . "/example/ExampleRestController.php";
                $destPath = Yii::getAlias('@backend') . "/controllers/" . ucfirst($name) . "Controller.php";
                if(!file_exists($destPath)){
                    $handle = fopen($filePath, "r");


                    $newCont = fopen($destPath, "w") or die("Unable to open file!");

                    $content = "";
                    //$content = str_replace("ExampleRest", ucfirst($name), $handle);
                    while (($line = fgets($handle)) !== false) {
                        if(stristr($line,"ExampleRest")){
                            $content .= str_replace("ExampleRest", ucfirst($name), $line);

                        } else {
                            $content .= $line;
                        }
                    }

                    //var_dump($content);die;
                    fwrite($newCont, $content);
                    fclose($handle);
                    fclose($newCont);
                    echo ucfirst($name) . "Controller Created\n";
                } else {
                    throw new \Exception(ucfirst($name) . "Controller Already Exist");
                }
            } catch(\Exception $e){
                echo $e;
            }
        }

    }
}
