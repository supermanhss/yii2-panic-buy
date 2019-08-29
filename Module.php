<?php

namespace SuperManHss\RushBuy;

use Yii;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'SuperManHss\\RushBuy\\Controllers';

    public $defaultRoute = 'rushbuy';

    public function getViewPath()
    {
        return Yii::getAlias('@vendor/supermanhss/yii2-rush-buy/views');
    }

    /* @var array The rules to be used in URL management. */
    public $urlRules = [
        'rb/<action:[a-zA-Z]+>'     => 'rushbuy/<action>'
    ];
}