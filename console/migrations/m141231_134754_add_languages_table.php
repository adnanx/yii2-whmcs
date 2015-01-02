<?php

use yii\db\Schema;
use yii\db\Migration;

class m141231_134754_add_languages_table extends Migration
{
    public function up()
    {
		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%languages}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(32) NOT NULL',
            'code' => Schema::TYPE_STRING . '(5) NOT NULL',
            'image' => Schema::TYPE_STRING . '(64) NOT NULL',
            'sort_order' => Schema::TYPE_SMALLINT. '(4) NOT NULL DEFAULT 0',
            'status' => Schema::TYPE_SMALLINT . '(1) NOT NULL',
            'default' => Schema::TYPE_SMALLINT . '(1) UNSIGNED NOT NULL DEFAULT 0',
            'updated_at' => Schema::TYPE_DATETIME . ' NOT NULL',
        ], $tableOptions);

		//'id' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST',
    }

    public function down()
    {
        //echo "m141231_134754_add_languages_table cannot be reverted.\n";
		$this->dropTable('{{%languages}}');

        return false;
    }
}
