<?= "<?php \n" ?>
$rules  = [
<?php foreach ($configs as $config) : ?>
	['class' => 'yii\rest\UrlRule', 'controller' => '<?= $config['fileName'] ?>'],
<?php endforeach; ?>
];
