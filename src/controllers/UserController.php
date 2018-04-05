<?php
/**
 * Created by PhpStorm.
 * User: Praneeth Nidarshan
 * Date: 3/18/2018
 * Time: 4:03 AM
 */

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

}