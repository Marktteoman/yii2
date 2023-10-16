<?php

namespace app\controllers;

use app\models\Country;
use yii\data\Pagination;
use yii\rest\Controller;

class CountrynewController extends Controller
{
    public function actionIndex()
    {
        $models = Country::find()->asArray()->all();
        foreach ($models as $model) {
            echo $model['code'] . "<br>";
        }
        var_dump($models);
        die();
        $query = Country::find();

        $pafiantion =  new Pagination([
            'defaultPageSize'=> 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            >all();

        return$this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}