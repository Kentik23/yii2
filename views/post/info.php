<?php

/** @var yii\web\View $this */
/** @var $post */

use yii\helpers\Html;

$this->title = Yii::$app->name;
?>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="blog-post-area-style">
                <div class="col-md-12">
                    <div class="single-post-big">
                        <div class="big-image">
                            <?= Html::img("@web/{$post->img}") ?>
                        </div>
                        <div class="big-text">
                            <h3><?= $post -> title?></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <h4><span class="date">25 February 2017</span><span class="author">Posted By: <span class="author-name">Kabbo Liate</span></span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
