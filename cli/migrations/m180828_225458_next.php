<?php

use backend\components\Migration;

/**
 * Class m180828_225458_next
 */
class m180828_225458_next extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // $this->createTable('{{%cache}}', [
        //     'id' => 'char(128) NOT NULL PRIMARY KEY',
        //     'expire' => 'int(11)',
        //     'data' => 'BLOB',
        // ], $tableOptions);
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%profile}}', [
            'user_id' => $this->primaryKey(),
            'name' => $this->string(),
            'ic_no' => $this->integer(),
            'contact' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%company}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string(),
            'address' => $this->string(),
            'city' => $this->string(),
            'poscode' => $this->integer(),
            'state' => $this->string(),
            'country' => $this->string(),
            'contact' => $this->string(),
            'fax' => $this->string(),
            'email' => $this->string()->notNull(),
            'email_secondary' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%branch}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'address' => $this->string(),
            'city' => $this->string(),
            'poscode' => $this->integer(),
            'state' => $this->string(),
            'country' => $this->string(),
            'contact' => $this->string(),
            'fax' => $this->string(),
            'email' => $this->string()->notNull(),
            'email_secondary' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%company_pic}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'user_id' => $this->integer(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%location}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'name' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%level}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'location_id' => $this->integer(),
            'name' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%site}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'location_id' => $this->integer(),
            'level_id' => $this->integer(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%attachment}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->string(),
            'name' => $this->string(),
            'description' => $this->string(),
            'file_path' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%attachment_access}}', [
            'id' => $this->primaryKey(),
            'attachment_id' => $this->integer(),
            'viewable_by' => $this->integer(),
            'downloadable_by' => $this->integer(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%attachment_metatag_keylist}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string(),
            'label' => $this->string(),
            'description' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%attachment_metatag}}', [
            'id' => $this->primaryKey(),
            'attachment_id' => $this->integer(),
            'key_id' => $this->integer(),
            'value' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'order_no' => $this->string()->notNull(),
            'order_date' => $this->date(),
            'contractor_id' => $this->integer(),
            'company_id' => $this->integer(),

            'remark' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%order_item_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string(),
            'metakey' => $this->string(500),
            'remark' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'item_type_id' => $this->integer(),
            'quantity' => $this->integer(),
            'metavalue' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%efies}}', [
            'id' => $this->primaryKey(),
            'efies_no' => $this->string()->notNull(),
            'company_id' => $this->integer(),
            'branch_id' => $this->integer(),
            'location_id' => $this->integer(),
            'site_id' => $this->integer(),
            'level_id' => $this->integer(),
            'total' => $this->integer(),
            'total_by_level' => $this->integer(),
            'fe_type' => $this->integer(),
            'fe_status' => $this->integer(),
            'efies_expired_date' => $this->date(),
            'cylinder_expired_date' => $this->date(),

            'remark' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%fe_service}}', [
            'id' => $this->primaryKey(),
            'order_item_id' => $this->integer(),
            'efies_id' => $this->integer(),
            'type' => $this->integer(),
            'schedule_date' => $this->date(),
            'date_service' => $this->date(),
            'return_date' => $this->date(),
            'prev_weight' => $this->float(),
            'prev_pressure' => $this->float(),
            'weight' => $this->float(),
            'pressure' => $this->float(),
            'next_date_service' => $this->date(),
            'cost' => $this->double(),
            'service_status_id' => $this->integer(),
            'reason_id' => $this->integer(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),

            // 'remark' => $this->string(),
            // 'status' => $this->smallInteger()->defaultValue(1),
            // 'created_at' => $this->timestamp(),
            // 'updated_at' => $this->timestamp(),
            // 'deleted_at' => $this->timestamp(),
            // 'created_by' => $this->integer(),
            // 'updated_by' => $this->integer(),
            // 'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%fe_type}}', [
            'id' => $this->primaryKey(),
            'class' => $this->string(),
            'description' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%fe_service_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%setting}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string(),
            'label' => $this->string(),
            'value' => $this->string(),
            'description' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);


        $this->createTable('{{%fe_service_status}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%efies_status}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%service_reason}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('notified', [
            'id' => $this->primaryKey(),
            'company_name' => $this->string(),
            'user_email' => $this->string(),
            'type' => $this->string(),
            'date' => $this->date(),
            'quantity' => $this->integer(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%company_role_assignment}}', [
            // 'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'role_id' => $this->integer()->notNull(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%company_role}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string(),

            'remark' => $this->string(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'deleted_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0),
        ], $tableOptions);


        $this->insertFk();
        // $this->addView();
        // $this->defaultData();
        // $this->insertScenario();
        // $this->insertIndex();
    }

    public function down()
    {
        $this->customDrop();
    }

    public function defaultData() {
        $this->batchInsert('{{fe_service_type}}',['name'],[
            ['Registeration'],
            ['Maintenance'],
            ['Replacement'],
        ]);
        $this->batchInsert('{{fe_type}}',['class','description'],[
            ['CO2','Carbon Dioxide base'],
            ['AB','Other base'],
        ]);
        $this->batchInsert('{{setting}}',['label','key','value','description'],[
            ['Efies Prefix','efiesPrefix','EF','Prefix value for Efies No'],
        ]);
    }
    public function insertScenario() {
        // $this->batchInsert('{{user}}',['username','email','password_hash'],[
        //     ['admin1','admin1@mail.com',Yii::$app->security->generatePasswordHash('admin1')],
        //     ['staf1','staf1@mail.com',Yii::$app->security->generatePasswordHash('staf1')],
        //     ['staf2','staf2@mail.com',Yii::$app->security->generatePasswordHash('staf2')],
        //     ['pic1','pic1@mail.com',Yii::$app->security->generatePasswordHash('pic1')],
        //     ['pic2','pic2@mail.com',Yii::$app->security->generatePasswordHash('pic2')],
        //     ['pic3','pic3@mail.com',Yii::$app->security->generatePasswordHash('pic3')],
        // ]);
        $this->batchInsert('{{user}}',['username','email','password_hash','auth_key','updated_at'],[
            ['admin1','admin1@mail.com',Yii::$app->security->generatePasswordHash('admin1'),Yii::$app->security->generateRandomString(),new \yii\db\Expression('CURRENT_TIMESTAMP')],
            ['staf1','staf1@mail.com',Yii::$app->security->generatePasswordHash('staf1'),Yii::$app->security->generateRandomString(),new \yii\db\Expression('CURRENT_TIMESTAMP')],
            ['staf2','staf2@mail.com',Yii::$app->security->generatePasswordHash('staf2'),Yii::$app->security->generateRandomString(),new \yii\db\Expression('CURRENT_TIMESTAMP')],
            ['pic1','pic1@mail.com',Yii::$app->security->generatePasswordHash('pic1'),Yii::$app->security->generateRandomString(),new \yii\db\Expression('CURRENT_TIMESTAMP')],
            ['pic2','pic2@mail.com',Yii::$app->security->generatePasswordHash('pic2'),Yii::$app->security->generateRandomString(),new \yii\db\Expression('CURRENT_TIMESTAMP')],
            ['pic3','pic3@mail.com',Yii::$app->security->generatePasswordHash('pic3'),Yii::$app->security->generateRandomString(),new \yii\db\Expression('CURRENT_TIMESTAMP')],
        ]);
        $this->batchInsert('{{profile}}',['name'],[
            ['admin1'],
            ['staf1'],
            ['staf2'],
            ['pic1'],
            ['pic2'],
            ['pic3'],
        ]);
        $this->batchInsert('{{company}}',['name','email'],[
            ['company A','a@mail.com'],
            ['company B','b@mail.com'],
            ['company C','c@mail.com'],
        ]);
        $this->batchInsert('{{company_pic}}',['company_id','user_id'],[
            [1,4],
            [2,5],
            [3,6],
        ]);
        $this->batchInsert('{{location}}',['company_id','name'],[
            [1,'Loc A-1'],
            [2,'Loc B-1'],
            [3,'Loc C-1'],
        ]);
    }

    public function insertFk() {
        $i = 1;
        $j = 1;
        // $this->addForeignKey('fk'.$i++,'{{user}}','id','{{profile}}','id');
        $this->addForeignKey('fk'.$i++,'{{profile}}','user_id','{{user}}','id');

        $this->addForeignKey('fk'.$i++,'{{efies}}','company_id','{{company}}','id');
        $this->addForeignKey('fk'.$i++,'{{efies}}','location_id','{{location}}','id');
        $this->addForeignKey('fk'.$i++,'{{efies}}','fe_type','{{fe_type}}','id');
        $this->addForeignKey('fk'.$i++,'{{fe_service}}','order_item_id','{{order_item}}','id');
        $this->addForeignKey('fk'.$i++,'{{fe_service}}','efies_id','{{efies}}','id');
        $this->addForeignKey('fk'.$i++,'{{fe_service}}','type','{{fe_service_type}}','id');
        $this->addForeignKey('fk'.$i++,'{{company_pic}}','company_id','{{company}}','id');
        $this->addForeignKey('fk'.$i++,'{{company_pic}}','branch_id','{{branch}}','id');
        $this->addForeignKey('fk'.$i++,'{{company_pic}}','user_id','{{user}}','id');
        $this->addForeignKey('fk'.$i++,'{{branch}}','company_id','{{company}}','id');
        $this->addForeignKey('fk'.$i++,'{{location}}','company_id','{{company}}','id');
        $this->addForeignKey('fk'.$i++,'{{location}}','branch_id','{{branch}}','id');
        $this->addForeignKey('fk'.$i++,'{{attachment_access}}','attachment_id','{{attachment}}','id');
        $this->addForeignKey('fk'.$i++,'{{attachment_access}}','viewable_by','{{user}}','id');
        $this->addForeignKey('fk'.$i++,'{{attachment_access}}','downloadable_by','{{user}}','id');
        $this->addForeignKey('fk'.$i++,'{{attachment_metatag}}','attachment_id','{{attachment}}','id');
        $this->addForeignKey('fk'.$i++,'{{attachment_metatag}}','key_id','{{attachment_metatag_keylist}}','id');
        $this->addForeignKey('fk'.$i++,'{{efies}}','fe_status','{{efies_status}}','id');
        // $this->addForeignKey('fk'.$i++,'{{efies}}','level_id','{{level}}','id');
        $this->addForeignKey('fk'.$i++,'{{efies}}','site_id','{{site}}','id');
        $this->addForeignKey('fk'.$i++,'{{efies}}','branch_id','{{branch}}','id');
        $this->addForeignKey('fk'.$i++,'{{fe_service}}','reason_id','{{service_reason}}','id');
        $this->addForeignKey('fk'.$i++,'{{fe_service}}','service_status_id','{{fe_service_status}}','id');

        $this->addPrimaryKey('pk'.$j++,'{{%company_role_assignment}}',['company_id','role_id']);
        $this->addForeignKey('fk'.$i++,'{{%company_role_assignment}}','company_id','{{%company}}','id');
        $this->addForeignKey('fk'.$i++,'{{%company_role_assignment}}','role_id','{{%company_role}}','id');

        $this->addForeignKey('fk'.$i++,'{{%order_item}}','order_id','{{%order}}','id');
        $this->addForeignKey('fk'.$i++,'{{%order_item}}','item_type_id','{{%order_item_type}}','id');

    }

    public function addView() {

/*        $backup = array_slice(scandir(__DIR__.'/../../backup/data'),2);
        $backup = array_filter($backup,function($var) {
            return stristr($var, 'backup_') && stristr($var, '.sql');
        });
        rsort($backup);*/
        try {
            if (is_file(__DIR__.'/../../views.sql')) {
                $filename = __DIR__.'/../../views.sql';
                $file = fopen($filename, "r") or die("Unable to open file!");
                $file = fread($file, filesize($filename));
                $this->execute('SET FOREIGN_KEY_CHECKS = 0');
                foreach( array_filter(array_map('trim',explode(';', $file))) as $i => $query ) {
                    // var_dump($query);die;
                    $this->execute($query);
                }
                $this->execute('SET FOREIGN_KEY_CHECKS = 1');
                // return true;
            }

        } catch (Exception $e) {
            throw new Exception($e->errorInfo[2]);
        }

    }
}
