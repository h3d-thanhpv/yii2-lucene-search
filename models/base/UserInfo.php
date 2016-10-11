<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "{{%user_info}}".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $avatar
 * @property string $gender
 * @property string $create_date
 * @property string $company
 * @property string $user_agent
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_date'], 'safe'],
            [['user_name', 'first_name', 'last_name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['avatar', 'company', 'user_agent'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_name' => Yii::t('app', 'User Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'avatar' => Yii::t('app', 'Avatar'),
            'gender' => Yii::t('app', 'Gender'),
            'create_date' => Yii::t('app', 'Create Date'),
            'company' => Yii::t('app', 'Company'),
            'user_agent' => Yii::t('app', 'User Agent'),
        ];
    }
}
