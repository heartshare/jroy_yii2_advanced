<?php

use yii\db\Schema;
use yii\db\Migration;

class m141107_060745_create_post_table extends Migration
{
    public function up()
    {
    	$this->createTable('post', [
    		'id' 		=> Schema::TYPE_PK,
            'title' 	=> Schema::TYPE_STRING . ' NOT NULL',
            'content'	=> Schema::TYPE_TEXT,
            
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
      	]);
    }

    public function down()
    {
        $this->dropTable('post');
    }
}
