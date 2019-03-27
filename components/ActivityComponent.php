<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 26/03/2019
 * Time: 17:55
 */

namespace app\components;

use yii\base\Component;
use app\models\TestForm;

class ActivityComponent extends Component
{

    public $modelclass;

    public function getModel() {

        return new $this->modelclass;
    }

}