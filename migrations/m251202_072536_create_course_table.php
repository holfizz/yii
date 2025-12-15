<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m251202_072536_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'price' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);
    
        $this->addForeignKey(
            'fk_course_category',
            'course',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_course_category', 'course');
        $this->dropTable('{{%course}}');
    }
}
