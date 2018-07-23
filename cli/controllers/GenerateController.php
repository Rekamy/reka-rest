<?php
namespace cli\controllers;

use Yii;
use yii\helpers\Console;
use yii\console\Controller;

class GenerateController extends Controller
{

	public function actionController($name)
	{
        try{
            $filePath = dirname(__DIR__ ) . "/example/ExampleController.php";
            $destPath = Yii::getAlias('@app') . "/controllers/" . ucfirst($name) . "Controller.php";
            if(!file_exists($destPath)){
                $handle = fopen($filePath, "r");
                

                $newCont = fopen($destPath, "w") or die("Unable to open file!");

                $content = "";
                while (($line = fgets($handle)) !== false) {
                        if(stristr($line,"ExampleController")){
                            $content = $content . str_replace("Example", ucfirst($name), $line);
                                
                        } else {
                            $content = $content . $line;
                        }
                }

                fwrite($newCont, $content);
                fclose($handle);
                fclose($newCont);
                echo ucfirst($name) . "Controller Created";
            } else {
                throw new \Exception(ucfirst($name) . "Controller Already Exist");
            }
        } catch(\Exception $e){
            echo $e;
        }
	}

}
