<?php
namespace frontend\models;

use yii\base\Model;

class Time extends \yii\db\ActiveRecord{//资格查询选择器模型，虽然都可以用js实现，但是还是想用php实现以下，为了三级联动做准备
    public $month;
    public $year;
    public $dayList;
    public $sex;
    public $hour;
    public $minute;
    public static function tableName(){
        return 'Boston';
    }

    public function rules(){
        return [
           [['year','month','dayList','sex','hour','minute'],'required','message'=>'您输入的信息不完整']
        ];
    }
    public function getYearList(){//年
        $now=date('Y');
        for($i=$now;$i>=1900;$i--){
            $yearList[]=$i;
        }
        return $yearList;
    }
    public function getMonthList(){//月是一样的
        $monthList=array(1,2,3,4,5,6,7,8,9,10,11,12);
        return $monthList;
    }
    public function getDayList($day){//这个是要根据年和月来决定的
        for($i=1;$i<=$day;$i++){
            $dayListList[]=$i;
        }
        return $dayListList;
    }
    public function getHourList(){
        for($i=1;$i<=6;$i++){
            $hourList[]=$i;
        }
        return $hourList;
    }
    public function getMinuteList(){
        for($i=1;$i<=59;$i++){
            $minuteList[]=$i;
        }
        return $minuteList;
    }
    public function getSexList(){
       $sexList=array('男','女');
        return $sexList;
    }
    public function Age(){//通过年龄计算方法
        $year_diff = $this->year/*date("Y") - $this->year*/;
        $month_diff = date("m") - ($this->month+1);
        $day_diff  = date("d") - ($this->dayList+1);
        if ($day_diff < 0 || $month_diff < 0)
            $year_diff--;
        switch($year_diff){
            case 18<=$year_diff:
                $age=18;
                break;
            case 35<=$year_diff:
                $age=35;
                break;
            case 40<=$year_diff:
                $age=40;
                break;
            case 45<=$year_diff:
                $age=45;
                break;
            case 50<=$year_diff:
                $age=50;
                break;
            case 55<=$year_diff:
                $age=55;
                break;
            case 60<=$year_diff:
                $age=60;
                break;
            case 65<=$year_diff:
                $age=65;
                break;
            case 70<=$year_diff:
                $age=70;
                break;
            case 75<=$year_diff:
                $age=75;
                break;
            case 80<=$year_diff:
                $age=80;
                break;
            default:
                $age=$year_diff;
        }
        return $age;
}
    public function transformTime(){
        $hour=$this->hour+1;
        $minute=$this->minute+1;
        $time=$hour+$minute/(100);
        return $time;
    }
    public function transformSex(){
        $sexNum=$this->sex;
        if($sexNum==0){
            $sex='男';
        }
        if($sexNum==1){
            $sex='女';
        }
        return $sex;

    }
    public function IsQualified(){
        $age=$this->Age();//传值进来了，但是都是键值没有
        $sex=$this->transformSex();
        $time=$this->transformTime();
        $result=$this->findOne(['age'=>$age,'sex'=>$sex]);
        if($result['time']>=$time){
            return true;
        }
        return false;//先试一下
    }
    public function attributeLabels(){
        return[
            'year'=>'年',
            'month'=>'月',
            'dayList'=>'日',
            'sex'=>'性别',
            'hour'=>'小时',
            'minute'=>'分钟'
        ];
    }


}
/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/6/14
 * Time: 22:19
 */