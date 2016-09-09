

<?php echo \yii2mod\comments\widgets\Comment::widget([
    'model' => $model,
    'relatedTo' => 'User ' . \Yii::$app->user->identity->username . ' commented on the page ' . \yii\helpers\Url::current() // for example
]); ?>
