<?php

use yii\db\Migration;

/**
 * Class m190121_170944_productTableMigration
 */
class m190121_170944_productTableMigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Product', [
            'Id' => $this->primaryKey(),
            'Price' =>  $this->double()->notNull(),
            'ImageUrl' => $this->string()->notNull(),
            'Description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_170944_productTableMigration cannot be reverted.\n";
        $this->droptable('Product');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_170944_productTableMigration cannot be reverted.\n";

        return false;
    }
    */
}
