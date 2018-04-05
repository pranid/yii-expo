<?php

namespace app\controllers;

use yii\rest\ActiveController;

class EmployeeController extends ActiveController
{
    public $modelClass = 'app\models\Employee';

    /**
     * @return array
     */
    protected function verbs()
    {

        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];

    }

}
