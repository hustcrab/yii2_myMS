<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
AppAsset::addCSS($this,'/css/index.css');
AppAsset::addScript($this,'/js/index.js');
/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/5/27
 * Time: 15:12
 */?>
<div id="info">
    <span id="title">赛事信息：</span><br/>
    <p id="content"> <img src="/uploads/guest/baa_logo.png" alt="" style="float:right">波士顿马拉松，通常在每年四月中旬（美国爱国者日，四月的第三个星期一）举行，比赛地点位于美国马萨诸塞州的波士顿。
        是全球首个城市马拉松比赛，也是世界六大马拉松之一（其他五个分别是伦敦马拉松、柏林马拉松、芝加哥马拉松、纽约马拉松和东京马拉松）。
        波士顿马拉松开始于1897年4月19日，至今从未间断,当时只有15位跑者参加。在1986年以前，波士顿马拉松一直沿用古希腊的方式，对优胜者的奖励只有头戴橄榄叶编成的花冠，颁发奖杯，但没有奖金。
        然而到2013年时，赛事奖金总额已经超过80.6万美元，冠军奖金最高可达15万美元。发展至今，波士顿马拉松始终沿袭古老传统。
        优美的原野、点对点的快速赛道、空前的现场观众，一切都体现着这个古老马拉松的魅力。但遗憾的是，很多选手都无缘体验波士顿马拉松
        ，因为它对参赛资格有着严格的限制。然而正是这种严格措施和排他性，反而更加增添了波士顿马拉松的魅力，
        令全世界顶尖马拉松选手都以在这个赛事中夺冠为荣。
       </p>
</div>

<div id="main">
        <img src="/uploads/guest/record.png" style="height:400px;width:50%;float: left"><div id="record">
        <p>最近记录</p><br/>
        <?= Html::a('(点击查看更多)', Url::to('/assets/2016.html', true))?>
    </div>
    <div id="map"><p>路线图</p><span>(点击查看大图)</span></div><img id="map_img" src="/uploads/guest/coursemap_2016.jpg" style="height: 400px;width: 50%;float: right">

    <?php $form=ActiveForm::begin(['enableClientValidation'=>false]);?>
    <div id="ask"style="float: left">
    <?= $form->field($model1,'year')->dropDownList($year,[
        'prompt'=>'--年--',
        'id'=>'year',
        'style'=>'width:100px',
        'onchange'=>'$.ajax({/*好吧就用ajax吧*/
        "type":"POST",
        "url":"'.Yii::$app->urlManager->createUrl('/boston/day').'",
        "data":{year_selected:$(this).val(),month_selected:$("#month").val()},/*怎么这个值是*/
        success:function(data){
        $("#day").html(data);
        }
        });',
    ]);?>
    <?= $form->field($model1,'month')->dropDownList($month,[
        'prompt'=>'--月--',
        'id'=>'month',
        'style'=>'width:100px',
        'onchange'=>'$.ajax({/*好吧就用ajax吧*/
        "type":"POST",
        "url":"'.Yii::$app->urlManager->createUrl('/boston/day').'",
        "data":{month_selected:$(this).val(),year_selected:$("#year").val()},
        success:function(data){
        $("#day").html(data);
        }
        });',
    ]);?>
   <!-- --><?= $form->field($model1,'dayList')->dropDownList($dayList,[
        'prompt'=>'--日--',
        'id'=>'day',
        'style'=>'width:100px'
    ])?><!--年月日选择器-->
<!--下面是成绩和性别选择器-->
        <?= $form->field($model1,'sex')->dropDownList($sex,[
            'prompt'=>'--性别--',
            'id'=>'day',
            'style'=>'width:100px'
        ])?>
        <?= $form->field($model1,'hour')->dropDownList($hour,[
            'prompt'=>'--小时--',
            'id'=>'day',
            'style'=>'width:100px'
        ])?>
        <?= $form->field($model1,'minute')->dropDownList($minute,[
            'prompt'=>'--分钟--',
            'id'=>'day',
            'style'=>'width:100px'
        ])?>
        <div class="form-group" style="margin-left: 120%;margin-top: -50px">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'login-button','']) ?><!--为什么获取到的值全部是数组的键值而获取不到数组真正的值呢-->
        </div>
    <?php $form=ActiveForm::end();?>
        <!--添加提交按钮，就可以获得全部数据了-->
    </div>
    <div id="qualification"><p>参赛资格查询</p></div>
</div>
<!--<p id="back"><img src="/uploads/guest/run.jpg" alt="" style="display: block; width: 100%;">
</p>-->




