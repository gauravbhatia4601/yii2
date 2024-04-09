<?php

use yii\db\Migration;

/**
 * Class m240409_185500_insert_default_admin_user
 */
class m240409_185500_insert_default_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Insert default admin user data
        $this->insert('users', [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Yii::$app->security->generatePasswordHash('admin@123'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->delete('users', [
            'username' => 'admin'
       ]);
    }
}
