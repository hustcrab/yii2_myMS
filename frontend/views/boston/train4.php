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
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 1 (32-42 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />8 x 1/4 mile at 10K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 x 1 mile at half marathon pace, 60-90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 8-10 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 2 (35-43 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/4 mile at 10K pace, 60 sec jog in between<br /> 4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 x 1mile at half marathon pace, 60-90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 9-11 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 3 (36-44 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />8 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 x 2 miles at half marathon pace, 3 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 4 (38-45 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />2 x 1/2 mile at 10K pace, 2 min jog in between<br />4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 x 1 mile at half marathon pace, 60-90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 5 (37-45 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />3 x 1/2 mile at 10K pace, 2 min jog in between<br />4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 x 2 miles at half marathon pace, 3 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 6 (39-46 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/2 mile at 10K pace, 2 min jog in between<br />4 x 1/4 mile at 5k pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 x 1 mile at half marathon pace, 60-90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 7 (46-55 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />6 x 1/4 mile at 10K pace, 1 min jog in between<br />6 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 x 2 miles at half marathon pace, 3 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 8 (43-50 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 3/4 mile at 10K pace, 1/4 mile jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-7 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>5-7 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />5 x 1 mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles<br />(5 miles Aerobic, 4 miles at marathon pace, 3-4 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 9 (46-56 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/2 mile at 10K pace, 90 sec jog in between<br />4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 miles at half marathon pace, 3 min jog<br />3 x mile at half marathon pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 10 (44-51 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />5 x 3/4 mile at 10K pace, 1/4 mile jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-7 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>5-7 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 x 2 miles at half marathon pace, 3 min jog in between<br />1 x mile at half marathon pace<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles<br />(5 miles Aerobic, 5 miles at marathon pace, 2-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 11 (48-58 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/2 mile at 10K pace, 90 sec jog in between<br />4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />3 miles at half marathon pace 4 min jog in between<br />2 x mile at half marathon pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 16-18 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 12 (48-57 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />5 x 3/4 mile at 10K pace, 1/4 mile jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />3 x 2 miles at half marathon pace, 3 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles<br />(5 miles Aerobic, 6 miles at marathon pace, 2-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 13 (46-54 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />3 x 1/2 mile at 10K pace, 90 sec jog in between<br />3 x 1/2 mile at 5K pace, 2 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />3 miles at half marathon pace, 3 min jog<br />2 miles at half marathon pace, 3 min jog<br />1 mile at half marathon pace<br />2 mile warm down</td></tr>
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
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 14 (48-58 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1mile at 10K pace, 3 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 x 3 miles at half marathon pace, 3-4 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles<br />(6 miles Aerobic, 6 miles at marathon pace, 2-4 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 15 (54-62 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />6 x 1/2 mile at 10K pace, 90 sec jog in between<br />2 x 1/2 mile at 5K pace, 2 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 miles at half marathon pace, 4 min jog<br />2 x 1 mile at half marathon pace, 2 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 20 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 16 (44-52 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1 mile at 10K pace, 3 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 miles at half marathon pace 4 min jog<br />2 miles at half marathon pace<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles<br />(5 miles Aerobic, 8 miles at marathon pace, 1-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 17 (54-64 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />6 x 1/2 mile at 10K pace, 90 sec jog in between<br />2 x 1/2 mile at 5K pace, 2 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />2 x 3miles at half marathon pace, 3-4 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 20-22 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 18 (48-58 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1 mile at 10K pace, 3 min jog in between <br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />6 miles at half marathon pace, 4 min jog<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles<br />(5 miles Aerobic, 8 miles at marathon pace, 1-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 19 (50-58 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/2 mile at 10K pace, 90 sec jog in between <br />4 x 1/2 mile at 5K pace, 2 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>1-2 mile warm up<br />2 x 3 miles at half marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 20-22 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 20 (43-53 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/2 mile at 10K pace, 90 sec jog in between<br />4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />5 miles at half marathon pace, 4 min jog<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles<br />(6 miles Aerobic, 6 miles at marathon pace, 2-4 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 21 (36-43 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />4 x 1/2 mile at 10K pace, 90 sec jog in between <br />4 x 1/4 mile at 5K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>3-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Fri</td>
            <td>2 mile warm up<br />4 x 1 mile at half marathon pace, 2 min jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 22 (19-26 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>2 mile warm up<br />8 x 1/4 mile at 10K pace, 90 sec jog in between<br />2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>3-5 mile Easy Run</td></tr>
        <tr>
            <td>Sun</td>
            <td>2-3 miles Easy or Off</td></tr>
        <tr>
            <td>  </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666"><strong><span style="COLOR: #ffffff">Mon    </span></strong></td>
            <td bgcolor="#666666"><strong><span style="COLOR: #ffffff">Boston Marathon</span></strong></td></tr></tbody></table>

</div>

