<?php

namespace app\models;

use himiklab\yii2\search\behaviors\SearchBehavior;

class UserInfo extends base\UserInfo
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'search' => [
                'class' => SearchBehavior::className(),
                'searchScope' => function ($model) {
                    /** @var \yii\db\ActiveQuery $model */
                    $model->select('*');
                },
                'searchFields' => function ($model) {
                    /** @var self $model */
                    return [
                        ['name' => 'ID', 'value' => $model->id, 'type' => SearchBehavior::FIELD_UNINDEXED],
                        ['name' => 'USER_NAME', 'value' => $model->user_name, 'type' => SearchBehavior::FIELD_TEXT],
                        ['name' => 'FIRST_NAME', 'value' => $model->first_name, 'type' => SearchBehavior::FIELD_TEXT],
                        ['name' => 'LAST_NAME', 'value' => $model->last_name, 'type' => SearchBehavior::FIELD_TEXT],
                        ['name' => 'EMAIL', 'value' => $model->email, 'type' => SearchBehavior::FIELD_TEXT],
                        ['name' => 'GENDER', 'value' => $model->gender, 'type' => SearchBehavior::FIELD_TEXT],
                        ['name' => 'CREATE_DATE', 'value' => date_format(date_create($model->create_date), "Ymd"), 'type' => SearchBehavior::FIELD_KEYWORD],
                        ['name' => 'COMPANY', 'value' => $model->company, 'type' => SearchBehavior::FIELD_TEXT],
                        ['name' => 'USER_AGENT', 'value' => $model->user_agent, 'type' => SearchBehavior::FIELD_TEXT],
                    ];
                }
            ],
        ]);
    }
}