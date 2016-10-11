<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Infos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
            <?= Html::beginForm(\yii\helpers\Url::to(['site/index']), 'get', ['class' => 'form-inline']) ?>
            <div class="input-group pull-right col-lg-10 col-md-11 col-sm-12">
                <?= Html::textInput('q', $query, ['class' => 'form-control', 'id' => 'advanced-search', 'placeholder' => 'Tìm kiếm nâng cao']) ?>
                <span class="input-group-btn">
                <?= Html::submitButton('<i class="glyphicon glyphicon-search"></i>', ['class' => 'btn btn-primary']) ?>
            </span>
            </div><!-- /input-group -->
            <?= Html::endForm() ?>
        </div>
    </div>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            'user_name',
            'first_name',
            'last_name',
            'email:email',
            // 'avatar',
            'gender',
            'create_date',
            'company',
            'user_agent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
