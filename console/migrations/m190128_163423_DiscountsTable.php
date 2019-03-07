<?php

use yii\db\Migration;

/**
 * Class m190128_163423_DiscountsTable
 */
class m190128_163423_DiscountsTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Discounts', [
            'Id' => $this->primaryKey(),
            'ProductId' =>  $this->integer()->notNull(),
            'ImageUrl' =>  $this->string()->notNull(),
        ]);
        $this->createIndex(
            'idx-post-ProductId',
            'Discounts',
            'ProductId'
        );
        $this->addForeignKey(
            'ProductId',
            'Discounts',
            'ProductId',
            'Product',
            'Id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190128_163423_DiscountsTable cannot be reverted.\n";
        $this->droptable('Discounts');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190128_163423_DiscountsTable cannot be reverted.\n";

        return false;
    }
    */
}
