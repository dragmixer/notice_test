<?php

class User extends Model
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID'
        );
    }

    public function tableName()
    {
        return '{{user}}';
    }

    public static function auth($login, $pass)
    {
        $identity = new UserIdentity($login, $pass);
        if ($identity->authenticate()) {
            Yii::app()->user->login($identity);
            return true;
        } else
            self::$lastError = $identity->errorMessage;
    }

    public static function hash($value)
    {
        return md5($value);
    }
}