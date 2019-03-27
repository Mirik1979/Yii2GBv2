<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 26/03/2019
 * Time: 21:31
 */

namespace app\models\rules;

use yii\validators\Validator;
use app\models\TestForm;

class NotAdminRule extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if ($model->$attribute=='admin')
        {
            $model->addError($attribute, 'Неправильное имя события.');
        }
    }

}