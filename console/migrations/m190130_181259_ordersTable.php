<?php

use yii\db\Migration;

/**
 * Class m190130_181259_ordersTable
 */
class m190130_181259_ordersTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Orders', [
            'Id' => $this->primaryKey(),
            'UserId' =>  $this->integer()->notNull(),
            'Date' =>  $this->date()->notNull(),
            'status'=>  $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'UserId',
            'Orders',
            'UserId',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190130_181259_ordersTable cannot be reverted.\n";
        $this->droptable('Orders');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190130_181259_ordersTable cannot be reverted.\n";

        return false;
    }
    */
}
