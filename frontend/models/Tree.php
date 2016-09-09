<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tree".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $name
 */
class Tree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tree';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'name'], 'required'],
            [['pid'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['pid'], 'unique'],
            [['name'], 'unique'],
            [['name'], 'unique'],
        ];
    }
    /*获得全部数据*/
    public function getTree(){
        $data=Tree::find()->all();
        return self::_generateTree($data,0,0,'--');
    }
    public static function getData($data){//把数组转换出来
        foreach($data as $v){
            echo $v['html'].$v['name'].'<BR>';
            if(isset($v['children'])){
                self::getData($v['children']);
            }
        }
    }
    private static function _generateTree(&$data,$pid=0,$level=0,$html='--'){//使用引用传值是为了节省内存，提高性能
        $tree=[];
        if($data && is_array($data)){
            foreach($data as $v){
                if($v['pid']==$pid){
                    $tree[]=[
                        'id'=>$v['id'],
                        'name'=>$v['name'],
                        'pid'=>$v['pid'],
                        'level'=>$level,
                        'html'=>str_repeat($html,$level),//只能这样赋值
                        'children'=>self::_generateTree($data,$v['id'],$level+1,$html),//self必须有return
                    ];
                }
            }
        }
        return $tree;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'name' => 'Name',
        ];
    }
}
