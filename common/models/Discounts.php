<?php

namespace common\models;
use yii\db\ActiveRecord;

use Yii;

/**
 * This is the model class for table "discounts".
 *
 * @property int $Id
 * @property int $ProductId
 * @property string $ImageUrl
 *
 * @property Product $product
 */
class Discounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discounts';
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'ProductId' => 'Product ID',
            'ImageUrl' => 'Image Url',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['Id' => 'ProductId']);
    }
}
