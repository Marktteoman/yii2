<?php

namespace app\models;

use yii\base\Model;

/**
 * @method load(array|mixed|object $post)
 */
class CountryForm extends Model
{
    public $name;
    public $code;
    public $population;

    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
            ['population','number'],
            ['population', 'string', 'max' => 11],
            ['name','string','max'=>11],
            ['code','string','max'=>2]
        ];

    }





    public function save(){
        $model = new Country();
        $model->code = $this->code;
        $model->name = $this->name;
        $model->population = $this->population;
        $model -> save();
    }



}