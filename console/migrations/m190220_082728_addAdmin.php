<?php

use yii\db\Migration;


/**
 * Class m190220_082728_addAdmin
 */
class m190220_082728_addAdmin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
        
        $admin = $auth->createRole('admin');
        $adManager = $auth->createRole('adManager');
        $merchandiser = $auth->createRole('merchandiser');
        $contentManager = $auth->createRole('contentManager');

        $auth->add($admin);

        $user = new User();
        $user->username = 'Shum666';
        $user->email = 'anna@gmail.com';
        $user->setPassword("00000000");
        $user->generateAuthKey();
        $user->save(false);

        $authorRole = $auth->getRole('admin');
        $auth->assign($authorRole, $user->getId());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190220_082728_addAdmin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190220_082728_addAdmin cannot be reverted.\n";

        return false;
    }
    */
}
