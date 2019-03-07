<?php

use yii\db\Migration;

/**
 * Class m190121_180726_productTableAddNameFieldMigration
 */
class m190121_180726_productTableAddNameFieldMigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("Product","Name",$this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_180726_productTableAddNameFieldMigration cannot be reverted.\n";
        $this->addColumn("Product","Name");
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_180726_productTableAddNameFieldMigration cannot be reverted.\n";

        return false;
    }
    */
}
