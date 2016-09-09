<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => '请输入验证码',
            'name'=>'用户名',
            'email'=>'邮箱',
            'subject'=>'主题',
            'body'=>'内容',
        ];
    }
    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)//这里修改了之后会让联系你的邮箱是你自己的邮箱发给你内容
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$email => $this->name])
            ->setSubject($this->name.'||'.$this->email)
            ->setTextBody($this->body.'||'.$this->subject)
            ->send();
    }
}
