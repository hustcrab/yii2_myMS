<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;


/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/5/22
 * Time: 12:28
 */?>
<div class="t">
    <?=Html::encode($model->getData($data));?>

    <?php if(is_array($data)){

    }?>
</div>
<div class="header">
    <p><img src="/uploads/guest/77a8a15e83-zi-dan.png" alt="" style="display: block; margin: auto;">
    </p>
    <?php $form=ActiveForm::begin();?>
    <?php ActiveForm::end(); ?>
    <?= $form->field($model, 'id')->widget(\yii\redactor\widgets\Redactor::className(),
        [
            'clientOptions' => [
               /* 'imageManagerJson' => ['/redactor/upload/image-json'],*/
                /*'imageUpload' => ['/redactor/upload/image'],
                'fileUpload' => ['/redactor/upload/file'],*/
                'plugins' => ['clips', 'fontcolor','imagemanager']
            ]
        ]
    ) ?>


<h1>说的什么<img style="font-size: 14px; line-height: 1.6em; color: rgb(51, 51, 51);"><a href="http://www.baidu.com">http://www.baidu.com</a><img style="font-size: 14px; line-height: 1.6em; color: rgb(51, 51, 51);"></h1>
</div>







