<?php
/**
 * Created by PhpStorm.
 * User: AlexOkara
 * Date: 22/03/2019
 * Time: 19:58
 */

namespace app\controllers;

use app\components\FileServiceComponent;
use yii\web\Controller;
use app\models\TestForm;
use yii\web\UploadedFile;

class TestController extends Controller
{

    public function actionPage()
    {

        $form_model = \Yii::$app->activity->getModel();

        if($form_model->load(\Yii::$app->request->post()) && $form_model->validate()){
            $form_model->file=UploadedFile::getInstance($form_model, 'file');
            $comp = \Yii::createObject(['class'=>FileServiceComponent::class]);
            $saveFile = $comp->saveUploadedFile($form_model->file);
            $formres = \Yii::$app->request->post();
            return $this->render('formresult', compact('formres'));
        }


        return $this->render('page', compact('form_model'));


    }
}