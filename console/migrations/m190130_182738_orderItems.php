<?php

use yii\db\Migration;

/**
 * Class m190130_182738_orderItems
 */
class m190130_182738_orderItems extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('OrderItems', [
            'Id' => $this->primaryKey(),
            'TovarId' =>  $this->integer()->notNull(),
            'Count' =>  $this->integer()->notNull(),
            'Price'=>  $this->double()->notNull(),
            'OrderId'=>  $this->integer()->notNull(),
            'Count'=>  $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-post-OrderId',
            'OrderItems',
            'OrderId'
        );
        $this->addForeignKey(
            'OrderId',
            'OrderItems',
            'OrderId',
            'Orders',
            'Id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-post-TovarId',
            'OrderItems',
            'TovarId'
        );
        $this->addForeignKey(
            'TovarId',
            'OrderItems',
            'TovarId',
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
        echo "m190130_182738_orderItems cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190130_182738_orderItems cannot be reverted.\n";

        return false;
    }
    */
}
