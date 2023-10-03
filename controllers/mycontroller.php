<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{

    public function actionIndex($fio = 'Укажите ФИО')
    {
        return $fio;
    }

    public function actionAbout()
    {
        return $this->render('about', [
            'firstname' => 'Viktor'
        ]);
    }

    public function actionCringe()
    {
        $hello = 'clownfish';

        return $this->render('cringe', [
            'geniy' => $hello,
        ]);
    }

    public function action3()
    {
        $yes = 'ggez game';

        return $this->render('3', [
            'user' => 'tvskmrk',
            'weight' => $yes
        ]);
    }

}