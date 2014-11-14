<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php foreach($posts as $v):?>
            <div class="col-lg-4">
                <h2><?=$v['title']?></h2>
                <p><?=$v['content']?></p>
                <p><a class="btn btn-default" href="<?=Url::to(['post/view', 'id'=>$v['id']])?>">Yii Documentation &raquo;</a></p>
            </div>
            <?php endforeach?>
        </div>

    </div>
</div>
