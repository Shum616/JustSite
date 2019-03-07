<?php

use yii\db\Migration;

/**
 * Class m190123_184343_News
 */
class m190123_184343_News extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('News', [
            'Id' => $this->primaryKey(),
            'Name' =>  $this->string()->notNull(),
            'Content' =>  $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_184343_News cannot be reverted.\n";
        $this->droptable('News');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_184343_News cannot be reverted.\n";

        return false;
    }
    */
}
