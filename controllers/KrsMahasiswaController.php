<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionDetailKrs($id)
    {
        return $this->render('detail-krs');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
