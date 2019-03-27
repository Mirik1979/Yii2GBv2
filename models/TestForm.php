<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 22/03/2019
 * Time: 19:55
 */

namespace app\models;

use yii\base\Model;
use yii\swiftmailer\Message;

use yii\filters\auth\HttpBasicAuth;

class TestForm extends Model
{
    public $name;
    public $email;
    public $begin;
    public $end;
    public $notify;
    public $file;


    public function rules()
    {
        return [
            [['name','email', 'begin', 'notify'], 'required'],
            ['email', 'email'],
            ['file','file', 'extensions' => ['jpg']],
            ['name', 'isAdmin'],
        ];
    }

    public function isAdmin($attribute, $params, $validator) {
        if ($this->name=='admin')
        {
            $this->addError('name', 'Неправильное имя события.');
            return false;
        }

    }


}