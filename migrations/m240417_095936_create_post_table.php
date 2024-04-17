<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m240417_095936_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(10)->unsigned(),
            'category_id' => $this->integer(10)->unsigned()->notNull(),
            'title' => $this->string()->notNull(),
            'except' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'img' => $this->string(),
            'created_at' => $this->dateTime()->notNull(),
            'keywords' => $this->string(),
            'description' => $this->string(),
        ]);

        $this->createIndex(
            'idx-post-category_id',
            'post',
            'category_id'
        );

        $this->addForeignKey(
            'fk-post-category_id',
            'post',
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
        $this->dropForeignKey(
            'fk-post-category_id',
            'post'
        );

        $this->dropIndex(
            'idx-post-category_id',
            'post'
        );

        $this->dropTable('post');
    }
}
