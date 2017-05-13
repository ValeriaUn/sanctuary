<?php
namespace app\controllers\rest;

use yii\rest\ActiveController;

class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    protected function verbs()
	{
	    return [
	        'index' => ['GET', 'HEAD', 'POST'],
	        'view' => ['GET', 'HEAD'],
	        'create' => ['POST'],
	        'update' => ['PUT', 'PATCH'],
	        'delete' => ['DELETE'],
	    ];
	}
}