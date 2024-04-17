<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m240417_101448_alter_post_created_at
 */
class m240417_101448_alter_post_created_at extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('post', 'created_at', Schema::TYPE_INTEGER);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('post', 'created_at', Schema::TYPE_DATETIME);
    }
}
