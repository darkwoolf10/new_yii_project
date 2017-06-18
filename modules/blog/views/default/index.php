<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
    <?php foreach ($posts as $arr) { ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?= "/basic/web" . $arr->img ?>" alt="<?= $arr->title ?>">
                    <div class="caption">
                        <h3><?= $arr->title ?></h3>
                        <p><a href="?r=blog/default/view&id=<?=$arr->id ?>" class="btn btn-primary" role="button">Read</a> <a href="<?=$arr->text_preview?>" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
</div>
