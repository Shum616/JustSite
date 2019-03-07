<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "News".
 *
 * @property int $Id
 * @property string $Name
 * @property string $Content
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Content'], 'required'],
            [['Name', 'Content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'Content' => 'Content',
        ];
    }
}
