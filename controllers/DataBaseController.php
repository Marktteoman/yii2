<?php

namespace app\controllers;
$customer = new Customer();

use yii\web\Controller;

class DataBaseController extends Controller
{
    public function actionIndex()
    {
        $models = Country::find()->asArray()->all();
        foreach ($models as $model){
            echo $model['code'] . "/./" . $model['name'] . '/' . $model['population'] . "</br>";
        }
        var_dump($models);
        die();
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}