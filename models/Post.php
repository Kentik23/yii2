<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function getCategory() {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }
}