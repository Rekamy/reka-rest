<?php

use yii\db\Migration;

/**
 * Class m180723_185011_init
 */
class m180723_185011_init extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
/*
        $this->createTable('{{%user_test}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_at' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%profile_test}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'firstname' => $this->string(),
            'lastname' => $this->string(),
            'age' => $this->integer(),
            'gender' => $this->string(),
            'avatar' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_at' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%company}}', [
            'id' => $this->primaryKey(),
            'reg_no' => $this->string(),
            'name' => $this->string(),
            'email' => $this->string(),
            'contact' => $this->string(),
            'address' => $this->string(),
            'poscode' => $this->integer(),
            'state' => $this->string(),
            'country' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_at' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%setting}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'key' => $this->string(),
            'value' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'deleted_at' => $this->integer(),
            'deleted_by' => $this->integer()->defaultValue(0)->notNull(),
        ], $tableOptions);

        $this->addForeignkey('fk1','{{%profile_test}}','user_id', '{{%user_test}}','id');
*/        // $this->insertData();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->customDrop();

        return false;
    }
    /**
     * {@inheritdoc}
     */
    public function insertData()
    {
        $this->batchInsert('{{%setting}}', ['name'], [
            ['Use RBAC'],
            ['Database Driver'],
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180712_201402_init cannot be reverted.\n";

        return false;
    }
    */}
