<?php

use yii\db\Migration;

/**
 * Добавляет колонку image (путь к файлу) в таблицу course
 */
class m251215_100000_add_image_file_to_course extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%course}}', 'image', $this->string()->after('description')->null());
    }

    public function safeDown()
    {
        $this->dropColumn('{{%course}}', 'image');
    }
}
