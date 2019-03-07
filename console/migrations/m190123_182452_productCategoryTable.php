<?php

use yii\db\Migration;

/**
 * Class m190123_182452_productCategoryTable
 */
class m190123_182452_productCategoryTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ProductCategory', [
            'Id' => $this->primaryKey(),
            'Name' =>  $this->string()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_182452_productCategoryTable cannot be reverted.\n";
        $this->droptable('ProductCategory');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_182452_productCategoryTable cannot be reverted.\n";

        return false;
    }
    */
}
