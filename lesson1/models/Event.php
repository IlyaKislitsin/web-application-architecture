<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $text
 * @property string $dt
 * @property int $creator_id
 * @property int $created_at
 *
 * @property Access[] $accesses
 * @property User $creator
 */
class Event extends \yii\db\ActiveRecord
{
    const RELATION_ACCESSES = 'accesses';
    const RELATION_ACCESSED_USERS= 'accessedUsers';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'dt', 'creator_id'], 'required'],
            [['text'], 'string'],
            [['dt'], 'safe'],
            [['creator_id', 'created_at'], 'integer'],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Описание события',
            'dt' => 'Время события',
            'creator_id' => 'Creator ID',
            'created_at' => 'Дата создания',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false
            ]
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccesses()
    {
        return $this->hasMany(Access::className(), ['event_id' => 'id']);
    }

    public function getAccessedUsers()
    {
        return $this->hasMany(User::class, ['id' => 'user_id'])
            ->via(self::RELATION_ACCESSES);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreator()
    {
        return $this->hasOne(User::className(), ['id' => 'creator_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\EventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\EventQuery(get_called_class());
    }
}
