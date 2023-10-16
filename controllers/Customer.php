<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\MailForm;

class Customer extends Controller
{
    // ...существующий код...

    public function actionEntry()
    {
        $model = new MailForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...

            return $this->render('MailForm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    }
}