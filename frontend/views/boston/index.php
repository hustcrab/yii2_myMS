<?php
use yii\helpers\Html;
use yii\web\View;






/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/5/27
 * Time: 14:37
 */?>
<?php echo \yii2mod\comments\widgets\Comment::widget([
    'model' => $model,
    'relatedTo' => 'User ' . \Yii::$app->user->identity->username . ' commented on the page ' . \yii\helpers\Url::current() // for example
]); ?>
