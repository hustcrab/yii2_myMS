<?php
use common\widgets\SideNavWidget;
use frontend\assets\AppAsset;
AppAsset::register($this);
AppAsset::addCSS($this,'/css/index.css');
/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/6/20
 * Time: 22:25
 */?>
<div id="sideNav" style="float: left"><!--左侧导航菜单-->
    <?=SideNavWidget::widget([
            'items'=>[
                ['label'=>'训练','items'=>[['label'=>'一级训练计划','url'=>['/boston/train1']]
                    ,['label'=>'二级训练计划','url'=>['/boston/train2']]
                    ,['label'=>'三级训练计划','url'=>['/boston/train3']],
                    ['label'=>'四级训练计划','url'=>['/boston/train4']]
                ]
                ],

            ]
        ]

    )
    ?>
</div>
<div id="baa_maincenter_0_baa_maincenter_content_2_divMainContent" class="page_content">

    <table cellspacing="0" cellpadding="5" width="640">
        <tbody>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 1 (27-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at half marathon pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />3 x 1 mile at marathon pace, 60-90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 8-10 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 2 (27-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at half marathon pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 miles at marathon pace, 3 min jog<br />1 mile at marathon pace, 90 sec jog<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 8-10 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 3 (29-33 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at half marathon pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />4 x 1 mile at marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 9-11 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 4 (31-34 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1/2 mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up,<br />2 miles at marathon pace, 2:30 jog in between<br />2 x 1 mile at marathon pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 11-12 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 5 (30-34 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1/2 mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />4 x 1 mile at marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 6 (31-34 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1/2 mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 miles at marathon pace, 2 min jog in between<br />2 x 1mile at marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 11-12 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 7 (33-38 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 1/2 mile at half marathon pace, 2 min jog in between<br />4 x 1/4 mile at 10K pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 x 2 miles at marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 8 (33-38 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2 mile at half marathon pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />5 miles at marathon pace<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 11-12 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 9 (36-41 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 1/2 mile at half marathon pace, 90 sec jog in between<br />4 x 1/4 mile at 10K pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />3 x 2 miles at marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-15 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 10 (35-40 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2 mile at half marathon pace, 60-90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />6 miles at marathon pace<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 11 (37-42 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at 10K pace, 60 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />3 x 2 miles at marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 15-16 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 12 (35-40 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2 mile at half marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />6 miles at marathon pace<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 13 (38-44 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at 10K pace, 60 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 x 3 miles at marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 16-18 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 14 (36-41 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />6 x 1/2 mile at half marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />6 miles at marathon pace<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 15 (39-45 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />10 x 1/4 mile at 10K pace, 60 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 x 3 miles at marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 16-18 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 16 (36-41 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />6 x 1/2 mile at half marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1 mile warm up<br />8 miles at marathon pace<br />1 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 17 (41-47 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />10 x 1/4 mile at 10K pace, 60 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 x 3 miles at marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 18-20 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 18 (36-41 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />6 x 1/2 mile at half marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1 mile warm up<br />8 miles at marathon pace<br />1 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 19 (41-47 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />10 x 1/4 mile at 10K pace, 60 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 x 3 miles at marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 18-20 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 20 (36-41 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2 mile at half marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />6 miles at marathon pace<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 21 (28-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at 10K pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />5 miles at marathon pace<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 22 (15-18 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />6 x 1/4 mile at 10K pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>3-4 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Off Day</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666"><strong><span style="COLOR: #ffffff">Mon    </span></strong></td>
            <td bgcolor="#666666"><strong><span style="COLOR: #ffffff">Boston Marathon</span></strong></td></tr></tbody></table>

</div>

