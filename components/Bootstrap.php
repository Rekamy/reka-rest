<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2014 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\components;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 * @package mootensai\yii2-enhanced-gii
 * @author Tobias Munk <tobias@diemeisterei.de>
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii') && YII_ENV == 'dev') {
            if (!isset($app->getModule('gii')->generators['enhanced-gii'])) {
                // $app->getModule('gii')->generators['enhanced-gii-model'] = 'common\gii\model\Generator';
                $app->getModule('gii')->generators['enhanced-gii-model'] = 'mootensai\enhancedgii\model\Generator';
                $app->getModule('gii')->generators['enhanced-gii-migration'] = 'mootensai\enhancedgii\migration\Generator';
                $app->getModule('gii')->generators['enhanced-gii-crud']['class'] = 'mootensai\enhancedgii\crud\Generator';
                // $app->getModule('gii')->generators['custom-enhanced-gii-crud']['templates']['custom'] = '@common/gii/crud/default';
            }
            if (!isset($app->getModule('gii')->generators['custom-enhanced-gii'])) {
                $app->getModule('gii')->generators['custom-enhanced-gii-model'] = 'common\gii\model\Generator';
                $app->getModule('gii')->generators['custom-enhanced-gii-crud']['class'] = 'common\gii\crud\Generator';
                $app->getModule('gii')->generators['custom-enhanced-gii-crud']['templates']['custom'] = '@common/gii/crud/default';
            }
        }

        // Get settings from database
        $sql = $app->db->createCommand('SELECT [[key]],[[value]] FROM [[setting]]');
        $settings = $sql->queryAll();

        // Now let's load the settings into the global params array
        foreach ($settings as $key => $val) {
            $app->params['settings'][$val['key']] = $val['value'];
        }
    }
}
