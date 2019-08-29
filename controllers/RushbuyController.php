<?php

namespace SuperManHss\RushBuy\Controllers;

use Yii;
use yii\base\Module;
use yii\web\Controller;

class RushbuyController extends Controller
{
    public function getViewPath()
    {
        return '@vendor/supermanhss/yii2-rush-buy/views';
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
