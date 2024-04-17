<?php

namespace app\controllers;

use app\models\Category;
use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionView($alias)
    {
        $category = Category::find()->where(['alias' => $alias])->one();

        $query = Post::find()->where(['category_id' => $category -> id]);
        $pages = new Pagination(['totalCount' => $query -> count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query -> offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('list', compact('posts', 'pages'));
    }
}