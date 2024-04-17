<?php

use yii\db\Migration;

/**
 * Class m240417_110208_insert_test_value
 */
class m240417_110208_insert_test_value extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $category = new \app\models\Category;
        $category -> title = 'LifeStyle';
        $category -> alias = 'lifestyle';
        $category->save();

        for ($i = 1; $i <= 9; $i++) {
            $post = new \app\models\Post;
            $post -> category_id = $category->id;
            $post -> title = 'TestPost'.$i;
            $post -> excerpt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            $post -> content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            $post -> img = 'img/post-image'.$i.'.jpg';

            $post->save();
        }

        $category = new \app\models\Category;
        $category -> title = 'Food';
        $category -> alias = 'food';
        $category->save();

        for ($i = 1; $i <= 9; $i++) {
            $post = new \app\models\Post;
            $post -> category_id = $category->id;
            $post -> title = 'TestPost'.$i;
            $post -> excerpt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            $post -> content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
            $post -> img = 'img/post-image'.$i.'.jpg';

            $post->save();
        }

        $category = new \app\models\Category;
        $category -> title = 'Nature';
        $category -> alias = 'nature';
        $category->save();
        $category = new \app\models\Category;
        $category -> title = 'Photography';
        $category -> alias = 'photography';
        $category->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->db->createCommand('SET FOREIGN_KEY_CHECKS = 0')
            ->execute();
        $this->truncateTable('post');
        $this->truncateTable('category');
        $this->db->createCommand('SET FOREIGN_KEY_CHECKS = 1')
            ->execute();
    }
}
