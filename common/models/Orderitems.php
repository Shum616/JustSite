<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orderitems".
 *
 * @property int $Id
 * @property int $TovarId
 * @property int $Count
 * @property double $Price
 * @property int $OrderId
 *
 * @property Orders $order
 * @property Product $tovar
 */
class Orderitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TovarId', 'Count', 'Price', 'OrderId'], 'required'],
            [['TovarId', 'Count', 'OrderId'], 'integer'],
            [['Price'], 'number'],
            [['OrderId'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['OrderId' => 'Id']],
            [['TovarId'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['TovarId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'TovarId' => 'Tovar ID',
            'Count' => 'Count',
            'Price' => 'Price',
            'OrderId' => 'Order ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['Id' => 'OrderId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovar()
    {
        return $this->hasOne(Product::className(), ['Id' => 'TovarId']);
    }
}
