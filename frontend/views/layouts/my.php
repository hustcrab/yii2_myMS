<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <?php
    NavBar::begin([
        'id'=>'header',
        'brandLabel' => '<img src="/uploads/guest/header.png" class="pull-left" style="margin-top: -10px;">波士顿马拉松',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '主页', 'url' => ['/boston/index']],
        ['label' => '相关', 'url' => ['/boston/about'] ,
            'items' => [
        ['label' => '训练计划', 'url' => ['/boston/train1'],
        ],
        ['label' => '城市简介', 'url' => 'http://baike.baidu.com/link?url=CgADhrIv4quJloUaT8OsPzTxPitSDCJrIRMRKrfq4XrsrhuGSpxkwGM-A4BTvPOaT89f8dLed42QjmFtV-XVWthxmZ4z0QqRH6IHuzcYPCe'],
                ['label' => '更多相关', 'url' => ['/boston/more']],
    ],/*二级菜单*/],
        ['label' => '联系我们', 'url' => ['/boston/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/boston/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/boston/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/boston/logout'], 'post')
            . Html::submitButton(
                '退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'id'=>"menuItems",
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>-->
<footer id="foot">
    <div id="aboutHref">
        相关链接：
        <a href="http://iranshao.com/races/543">爱燃烧</a><br/>
        <a href="http://www.baa.org/races/boston-marathon.aspx">波士顿马拉松官网</a><br/>
        <a href="http://www.bostonusa.com/chinese/">波士顿</a><br/>
        <a href="https://zhuanlan.zhihu.com/p/20697700">知乎专栏</a>
    </div>
    <div id="me" style="margin-right: 30%;float: right;margin-top: -120px">我的邮箱:1336498731@qq.com</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
