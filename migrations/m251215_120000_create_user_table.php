<?php

use yii\db\Migration;

class m251215_120000_create_user_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'role' => $this->string()->notNull()->defaultValue('user'),
            'auth_key' => $this->string(32),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // Создаём admin1 и user1
        $this->insert('{{%user}}', [
            'username' => 'admin1',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
            'email' => 'admin1@example.com',
            'role' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%user}}', [
            'username' => 'user1',
            'password_hash' => Yii::$app->security->generatePasswordHash('user'),
            'email' => 'user1@example.com',
            'role' => 'user',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
