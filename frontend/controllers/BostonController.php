<?php
namespace frontend\controllers;

use common\models\User;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\controllers\SiteController;
use frontend\models\SignupForm;
use frontend\models\Time;
use yii\helpers\Html;

class BostonController extends SiteController{
    //和actionLogin直接继承父类的
    public $layout='/my';
    public function actionIndex(){//重写父类方法必须参数一致
        $model=new User();
        $model1=new Time();
        $year=$model1->getYearList();//这是前端显示的年
        $month=$model1->getMonthList();//这是前端显示的月
        $sex=$model1->getSexList();
        $hour=$model1->getHourList();
        $minute=$model1->getMinuteList();
        //$day的值需要提交的$month和$year的值一块来确定
        $dayList=array('--日--');
        if($model1->load(Yii::$app->request->post())&&$model1->validate()){
            if(($model1->Age())<18){
                Yii::$app->session->setFlash('error','您未满18岁');
                return $this->refresh();
            }
            if($model1->IsQualified()) {
                Yii::$app->session->setFlash('success', '您有资格参赛');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error','您没有参赛资格，请再接再厉');
                return $this->refresh();
            }
            //现在的问题就是如何解决掉怎么输出合格与不合格
        }
            return $this->render('no', ['model' => $model, 'model1' => $model1, 'year' => $year, 'month' => $month,
                'dayList' => $dayList,'sex'=>$sex,'hour'=>$hour,'minute'=>$minute
            ]);//没有登录的
        //现在要获取提交的表单内容
    }
    public function actionSignup(){//重写父类的方法，为了开启ajax验证
        $model=new SignupForm();
        $model->load($_POST);
        if(Yii::$app->request->isAjax){//注册的时候开启ajax验证
            Yii::$app->response->format=\yii\web\Response::FORMAT_JSON;
            return \yii\bootstrap\ActiveForm::validate($model);
        }
        if($model->load(Yii::$app->request->post())){
            if($user=$model->signup()){
                if(Yii::$app->getUser()->login($user)){
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup',[
            'model'=>$model,
        ]);
    }
    public function actionComment()
    {
        if (is_null(\Yii::$app->user->identity)) {//如果没有登录
            return $this->render('no');
        } else {
            $model=User::findOne(['status'=>'10']);
            return $this->render('index',['model'=>$model]);
    }
    }
    public function actionAbout(){
        $data=1;
        return $this->render('about',['data'=>$data]);

    }

    /*public function actionTrain(){//训练计划
        return $this->render('train');

    }*/
    public function actionTrain1(){
        return $this->render('train1');
    }
    public function actionTrain2(){
        return $this->render('train2');
    }
    public function actionTrain3(){
        return $this->render('train3');
    }
    public function actionTrain4(){
        return $this->render('train4');
    }
    public function actionCity(){

    }
    public function actionMore(){
        return $this->render('more');
    }
    public function actionDay(){//都重新写到这个里面来实现局部刷新，这个可以显示出来如何记住选择呢，还要收集个人信息，进行比较
        /*都选择完之后进行信息的采集与比较，再利用ajax进行输出信息*/
          $year_selected=Yii::$app->request->post('year_selected');//这个值在month传值的时候改变了
          $month_selected=Yii::$app->request->post('month_selected');
          $year_final=date('Y')-$year_selected;//这两个没错啊
          /*var_dump($year_selected);*/
          switch($month_selected){
              case 0:
              case 2:
              case 4:
              case 6:
              case 7:
              case 9:
              case 11:
                  $day=31;
                  break;
              case 3:
              case 5:
              case 8:
              case 10:
                  $day=30;
                  break;
              case 1:
                  $day=28;
                  if(($year_final %4 ==0)&&($year_final%100!=0)||($year_final%400==0)){
                      $day=29;
                  }
                  break;
              default:
                  break;
          }
          $model=new Time();
          $arr=$model->getDayList($day);
        echo Html::tag('option', '--日--', []);

          foreach($arr as $key=>$value) {
              echo Html::tag('option', $value, array('key'=>$key));
          }
    }

}
/**
 * Created by PhpStorm.
 * User: hustcrab
 * Date: 2016/5/27
 * Time: 15:02
 */