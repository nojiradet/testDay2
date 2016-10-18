<?php
namespace app\controllers;

class NewController extends \yii\web\Controller {
    
    public function actionFirst() {
       return $this->render('first');
    }
}
