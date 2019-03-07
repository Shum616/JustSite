<?php
    namespace common\models;
    use yii\db\ActiveRecord;

    class Product extends ActiveRecord
    {
        // public $Name;
        // public $Price;
        // public $ImageUrl;
        // public $Description; 

        public static function tableName()
        {
            return "{{product}}";
        }
    }