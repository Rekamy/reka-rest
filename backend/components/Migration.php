<?php

namespace backend\components;

use yii\db\Migration as BaseMigration;
use Yii;

class Migration extends BaseMigration
{
    //oracle primary key function
    public function primaryKey($length = null) {
        if ($this->db->driverName === 'oci') {
            return ' NUMBER(10,0) GENERATED BY DEFAULT ON NULL AS IDENTITY INCREMENT BY 1 START WITH 1 PRIMARY KEY';
        } else {
            return parent::primaryKey();
        }
    }

    // empty database function
    protected function emptyDatabase() {
        switch (Yii::$app->db->driverName) {
            case 'oci':
            $sqlObject = Yii::$app->db->createCommand("select 'truncate table \"' || table_name ||'\"' as sql FROM user_tables WHERE table_name != 'migration'")->queryAll();
            foreach ($sqlObject as $query) {
                $this->execute($query['SQL']);
            }
            break;
            case 'mysql':
            $fkCheckOff = "SET FOREIGN_KEY_CHECKS = 0";
            $sqlObject = Yii::$app->db->createCommand($fkCheckOff)->execute();
            $command = Yii::$app->db->createCommand('set sql_mode=PIPES_AS_CONCAT');
            $command->execute();
            $sqlObject = Yii::$app->db->createCommand("select 'truncate table  ".$this->dbName.".' || table_name || ';' as 'SQL' from information_schema.tables
                WHERE table_schema = '".$this->dbName."' and table_name != 'migration' and table_type = 'BASE_TABLE'")->queryAll();
            foreach ($sqlObject as $query) {
                $this->execute($query);
            }
            $fkCheckOn = "SET FOREIGN_KEY_CHECKS = 1";
            $this->execute($fkCheckOn);
            break;
            default:
            echo "Schema type were undefined. Please manually empty the database!";
            break;
        }
    }


    //drop function
    public function customDrop() {
        if ($this->db->driverName === 'oci') {
            //drop for confirm
            $tables = Yii::$app->db->createCommand("select 'drop table \"' || table_name || '\" cascade constraints' as sql from user_tables where table_name != 'migration'")->queryAll();
            foreach ($tables as $table) {
                $this->execute($table['SQL']);
            }

            $views = Yii::$app->db->createCommand("select 'drop view \"' || view_name || '\" cascade constraints' as sql from user_views")->queryAll();
            foreach ($views as $view) {
                $this->execute($view['SQL']);
            }
        }
        if ($this->db->driverName === 'mysql') {
            //drop for confirm
            try {
                //set fk check off
                $fkCheckOff = "SET FOREIGN_KEY_CHECKS = 0";
                $this->execute($fkCheckOff);
                //prepare script for dropping table and view
                $script = "SELECT concat('DROP TABLE IF EXISTS ".$this->dbName.".', table_name, ';') as 'query'
                FROM information_schema.tables
                WHERE table_schema = '".$this->dbName."' and table_name != 'migration'";

                $viewDropScript = "SELECT CONCAT('DROP VIEW IF EXISTS ".$this->dbName.".', table_name, ';') AS query
                FROM information_schema.tables
                WHERE table_schema = '".$this->dbName."' AND TABLE_TYPE LIKE 'VIEW'";

                //dropping view
                $viewDropObject = Yii::$app->db->createCommand($viewDropScript)->queryAll();
                foreach ($viewDropObject as $viewQuery) {
                    $this->execute($viewQuery['query']);
                }

                //dropping table
                $sqlObject = Yii::$app->db->createCommand($script)->queryAll();
                foreach ($sqlObject as $query) {
                    $this->execute($query['query']);
                }

                //set fk check back on
                $fkCheckOn = "SET FOREIGN_KEY_CHECKS = 1";
                $this->execute($fkCheckOn);

            } catch (\yii\db\Exception $e) {
                echo $e->message();
                return false;
            }
        }
    }

    //drop function
    public function reset() {
        if ($this->db->driverName === 'oci') {
            //drop for confirm
            $tables = Yii::$app->db->createCommand("select 'drop table \"' || table_name || '\" cascade constraints' as sql from user_tables")->queryAll();
            foreach ($tables as $table) {
                $this->execute($table['SQL']);
            }

            $views = Yii::$app->db->createCommand("select 'drop view \"' || view_name || '\" cascade constraints' as sql from user_views")->queryAll();
            foreach ($views as $view) {
                $this->execute($view['SQL']);
            }
        }
        if ($this->db->driverName === 'mysql') {
            //drop for confirm
            try {
                //set fk check off
                $fkCheckOff = "SET FOREIGN_KEY_CHECKS = 0";
                $this->execute($fkCheckOff);
                //prepare script for dropping table and view
                $script = "SELECT concat('DROP TABLE IF EXISTS ".$this->dbName.".', table_name, ';') as 'query'
                FROM information_schema.tables
                WHERE table_schema = '".$this->dbName."'";

                $viewDropScript = "SELECT CONCAT('DROP VIEW IF EXISTS ".$this->dbName.".', table_name, ';') AS query
                FROM information_schema.tables
                WHERE table_schema = '".$this->dbName."' AND TABLE_TYPE LIKE 'VIEW'";

                //dropping view
                $viewDropObject = Yii::$app->db->createCommand($viewDropScript)->queryAll();
                foreach ($viewDropObject as $viewQuery) {
                    $this->execute($viewQuery['query']);
                }

                //dropping table
                $sqlObject = Yii::$app->db->createCommand($script)->queryAll();
                foreach ($sqlObject as $query) {
                    $this->execute($query['query']);
                }

                //set fk check back on
                $fkCheckOn = "SET FOREIGN_KEY_CHECKS = 1";
                $this->execute($fkCheckOn);

            } catch (\yii\db\Exception $e) {
                echo $e->message();
                return false;
            }
        }
    }

    public function alterIdentitySequence()
    {
        if ($this->db->driverName === 'oci') {
            $alterIdentity = "
            select 'ALTER TABLE \"' || table_name || '\" MODIFY \"id\" GENERATED BY DEFAULT ON NULL AS IDENTITY (START WITH LIMIT VALUE)' as sql from user_tables where table_name != 'migration'
            ";
            //reinitialize identity sequence
            $alterIdentityScript = Yii::$app->db->createCommand($alterIdentity)->queryAll();
            foreach ($alterIdentityScript as $script) {
                $this->execute($script['SQL']);
            }
        }
        return true;
    }

    public function getDbDriver()
    {
        return Yii::$app->db->driverName;
    }
    public function getDbName($name='dbname')
    {
        switch (Yii::$app->db->driverName) {
            case 'mysql':
            if (preg_match('/' . $name . '=([^;]*)/', Yii::$app->db->dsn, $match)) {
                return $match[1];
            } else {
                return null;
            }
            break;

            case 'oci':
            return Yii::$app->db->username;
            break;

            default:
                # code...
            return null;
            break;
        }

    }

    public function purgeDeleted() {
        $dbTransac = Yii::$app->db->beginTransaction();
        try {
            $sql = "
            SELECT
            CONCAT('delete from ',CONCAT([[table_name]], ' where [[deleted_by]] != 0')) as [[command]]
            FROM information_schema.[[TABLES]]
            WHERE table_schema = 'fems_db'
            and table_name not like '%auth%'
            and table_name not like '%log%'
            and table_name not like '%cache%'
            and table_name not like '%migration%'
            and table_type = 'BASE TABLE'
            ";

            $query = Yii::$app->db->createCommand($sql)->query();
            // var_dump($query);
            $this->execute('SET FOREIGN_KEY_CHECKS = 0');
            foreach ($query as $key => $value) {
                $this->execute($value['command']);
            }
            $this->execute('SET FOREIGN_KEY_CHECKS = 1');
            $dbTransac->commit();

        } catch (Exception $e) {
            $dbTransac->rollback();
            die('fail');
        }
    }
    public function insertData() {
        $dir = $_SERVER["YII_PATH"].'backup/data/';
        $backup = array_slice(scandir($dir),2);
        $backup = array_filter($backup,function($var) {
            return stristr($var, 'backup_') && stristr($var, '.sql');
        });
        rsort($backup);
        $dataFile = $backup[0];
        $dbTransac = Yii::$app->db->beginTransaction();
        try {
            if (is_file($dir.$dataFile)) {
                $filename = $dir.$dataFile;
                $file = fopen($filename, "r") or die("Unable to open file!");
                $file = fread($file, filesize($filename));
                $this->execute('SET FOREIGN_KEY_CHECKS = 0');
                foreach( array_filter(array_map('trim',explode(';', $file))) as $i => $query ) {
                    $this->execute($query);
                }
                $this->execute('SET FOREIGN_KEY_CHECKS = 1');
            }
            $dbTransac->commit();
        } catch (Exception $e) {
            $dbTransac->rollback();
            throw new Exception($e->errorInfo[2]);
        }
        die;
    }
}
