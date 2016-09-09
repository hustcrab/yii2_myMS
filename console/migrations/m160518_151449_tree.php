<?php

use yii\db\Migration;

class m160518_151449_tree extends Migration
{
    const TABLE_NAME='{{%tree}}';
    public function safeUp()
    {
        $tableOptions=null;
        if($this->db->driverName==='mysql'){
            $tableOptions='CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable(self::TABLE_NAME,[
            'id'=>$this->primaryKey(),
            'pid'=>$this->integer()->notNull(),
            'name'=>$this->string()->notNull()->unique()
        ],$tableOptions);
        $this->createIndex('tree',self::TABLE_NAME,['name'],true);//创建索引，要研究一下
    }

    public function safeDown()
    {
        /*echo "m160518_151449_tree cannot be reverted.\n";//这是什么

        return false;*/
        $this->dropTable(self::TABLE_NAME);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
