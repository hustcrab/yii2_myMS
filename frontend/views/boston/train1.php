<?php
use common\widgets\SideNavWidget;

use frontend\assets\AppAsset;
AppAsset::register($this);
AppAsset::addCSS($this,'/css/index.css');
/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/6/20
 * Time: 22:21
 */
?>
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
<div id="baa_maincenter_0_baa_maincenter_content_2_divMainContent" class="page_content" style="">

    <table cellspacing="0" cellpadding="5" width="640">
        <tbody>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 1 (20-24 miles)</span></strong></td></tr>
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
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 7-9 miles easy</td></tr>
        <tr>
            <td>  </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 2 (20-24 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up,<br />8 x 1/4 mile at half marathon pace, 60-90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 7-9 miles easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 3 (22-26 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2mile warm up<br />8 x 1/4mile at half marathon pace, 1 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 8-10 miles aerobic</td></tr>
        <tr>
            <td>  </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 4 (24-27 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1/2 mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-11 miles Easy</td></tr>
        <tr>
            <td>  </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 5 (22-26 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1/2mile at half marathon pace, 90 sec-2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 8-10 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 6 (24-27 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1/2mile at half marathon pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-11 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 7 (27-30 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at 10K pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles<br />(5 miles Aerobic, 4 miles at marathon pace, 3-4 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 8 (25-29 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up,<br />3 x 1 mile at half marathon pace, 2 min jog in between,<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 9-11 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 9 (27-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 2 miles at marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 10 (28-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4mile at 10K pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles<br />(6 miles Aerobic, 4 miles at marathon pace, 3-4 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 11 (26-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />3 x 1mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 12 (29-32 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />8 x 1/4 mile at 10K pace, 90 sec jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 13-14 miles<br />(6 miles Aerobic, 5 miles at marathon pace, 2-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 13 (32-36 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 2 miles at marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles Aerobic</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 14 (28-32 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 15 (31-35 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2mile at 10K pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 14-16 miles<br />(7 miles Aerobic, 6 miles at marathon pace, 1-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 16 (30-34 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 3miles @at marathon pace, 3-4 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 10-12 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 17 (34-38 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />4 x 1mile at half marathon pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 16-18 miles<br />(7 miles Aerobic, 8 miles at marathon pace, 1-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 18 (29-32 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2 mile at 10K pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 19 (35-39 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 2 miles at half marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>5-6 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 17-19 miles<br />(8 miles Aerobic, 8 miles at marathon pace, 1-3 miles Easy)</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 20 (28-31 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />5 x 1/2 mile at 10K pace, 2 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>4-5 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>5-6 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 12-13 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 21 (23-27 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up<br />2 x 2 miles at half marathon pace, 3 min jog in between<br />1-2 mile warm down</td></tr>
        <tr>
            <td>Wed</td>
            <td>3-4 mile Easy Run</td></tr>
        <tr>
            <td>Thu</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Fri</td>
            <td>4-5 mile Aerobic Run</td></tr>
        <tr>
            <td>Sat</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>Long Run: 8-10 miles Easy</td></tr>
        <tr>
            <td> </td>
            <td> </td></tr>
        <tr>
            <td bgcolor="#666666" colspan="2"><strong><span style="COLOR: #ffffff">Week 22 (14-16 miles)</span></strong></td></tr>
        <tr>
            <td>Mon</td>
            <td>Off Day</td></tr>
        <tr>
            <td>Tue</td>
            <td>1-2 mile warm up,<br />6 x 1/4 mile at 10K pace, 90 sec jog in between,<br />1-2 mile warm down</td></tr>
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
            <td>Off Day</td></tr>
        <tr>
            <td>Sun</td>
            <td>2 miles Easy</td></tr>
        <tr>
            <td bgcolor="#666666"><strong><span style="COLOR: #ffffff">Mon    </span></strong></td>
            <td bgcolor="#666666"><strong><span style="COLOR: #ffffff">Boston Marathon</span></strong></td></tr></tbody></table>

</div>

