<?php
use yii\helpers\Html;
use yii\web;
?>
<?php echo \yii2mod\comments\widgets\Comment::widget([
    'model' => $post,
    'relatedTo' => 'User ' . \Yii::$app->user->identity->username . ' commented on the page ' . \yii\helpers\Url::current() // for example
]); ?>
