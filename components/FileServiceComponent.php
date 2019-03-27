<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 27/03/2019
 * Time: 19:06
 */

namespace app\components;


use yii\base\Component;
use yii\web\UploadedFile;

class FileServiceComponent extends Component
{
    public function saveUploadedFile(UploadedFile $file):bool {
        $path=$this->getPathForFIle($file);
        $file->saveAs($path);
        return true;

    }

    private function getPathForFIle(UploadedFile $file):string {
        return \Yii::getAlias('@webroot/images/').$file->name;
    }

}