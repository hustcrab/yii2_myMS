<?php
use yii\bootstrap\Collapse;
use yii\helpers\Url;
use common\widgets\SideNavWidget;

use frontend\assets\AppAsset;
AppAsset::register($this);
AppAsset::addCSS($this,'/css/index.css');


/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/6/11
 * Time: 18:46
 */?>
<div id="sideNav"><!--左侧导航菜单-->
    <?=SideNavWidget::widget([
            'items'=>[
                ['label'=>'训练','items'=>[['label'=>'一级训练计划','url'=>['/boston/train1']]
                ,['label'=>'二级训练计划','url'=>['/boston/train1']]
                ,['label'=>'三级训练计划','url'=>['/boston/train1']],
                ['label'=>'四级训练计划','url'=>['/boston/train1']]
                ]
                ],

            ]
        ]

    )
    ?>
</div>
