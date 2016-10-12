<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use himiklab\yii2\search\Search;

class SearchController extends Controller
{
    /** @var Search $search */
    private $search;

    public function init()
    {
        parent::init();
        $this->search = Yii::$app->search;
    }

    public function actionIndex()
    {
        $this->search->index();
    }
    public function actionOptimize()
    {
        $this->search->optimize();
    }
}