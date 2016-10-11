<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class SearchController extends Controller
{
    public function actionIndex()
    {
        ini_set('memory_limit', '-1');
        /** @var \himiklab\yii2\search\Search $search */
        $search = Yii::$app->search;
        $search->index();
    }
}