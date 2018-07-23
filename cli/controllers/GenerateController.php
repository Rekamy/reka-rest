<?php
namespace cli\controllers;

use Yii;
use yii\helpers\Console;
use yii\console\Controller;

class GenerateController extends Controller
{

    public $overwrite = false;

    public function options($actionID)
    {
        return ['overwrite'];
    }

    public function optionAliases()
    {
        return ['o' => 'overwrite'];
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
            $filePath = dirname(__DIR__ ) . "/example/models/ExampleModel.php";
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
