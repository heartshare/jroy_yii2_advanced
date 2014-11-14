<?php

use yii\db\Schema;
use yii\db\Migration;

class m141114_064535_create_category_table extends Migration
{
    public function up()
    {
    	$this->createTable('category', [
    		'id'          => 'pk',
            'title'       => 'string NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
      	]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
