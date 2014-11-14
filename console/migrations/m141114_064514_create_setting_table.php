<?php

use yii\db\Schema;
use yii\db\Migration;

class m141114_064514_create_setting_table extends Migration
{
    public function up()
    {
    	$this->createTable('setting', [
            'name' 	=> Schema::TYPE_STRING . ' NOT NULL',
            'value'	=> Schema::TYPE_STRING . ' NOT NULL',
      	]);
    }

    public function down()
    {
        $this->dropTable('setting');
    }
}
