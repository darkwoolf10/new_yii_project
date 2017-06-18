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

    <h1>Знижки</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
    <?php foreach($posts as $arr) { ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="?r=blog/default/view&id=<?=$arr->id ?>"><img src="<?= "/basic/web" . $arr->img ?>" alt="<?= $arr->title ?>"></a>
                    <div class="caption">
                        <h3><?= $arr->title ?></h3>
                        <p><a href="?r=blog/default/view&id=<?=$arr->id ?>" class="btn btn-primary" role="button"><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>
</a> <a href="<?=$arr->text_preview?>" class="btn btn-default" role="button"><i class="fa fa-android fa-2x" aria-hidden="true"></i>
</a></p>
                    <code><?= $arr->category?></code>   
                    </div>
                    
                </div>
            </div>
    <?php } ?>
    </div>
</div>

<?= yii\widgets\LinkPager::widget([
    'pagination' => $pages,
]);      
?>
