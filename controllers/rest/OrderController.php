<?php

namespace app\controllers\rest;

use yii\rest\ActiveController;
class DisciplineController extends ActiveController
{
 public $modelClass = 'app\models\Discipline';

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
