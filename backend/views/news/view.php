<?php

use common\models\News;
use kartik\detail\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->title;
if($model->type == News::TYPE_COMMON || $model->type == News::TYPE_NEWS || $model->type == News::TYPE_PROJECT) {
    $this->params['breadcrumbs'][] = ['label' => 'Thông tin', 'url' => ['index', 'type' => $model->type]];
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase"><?= $this->title ?></span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                </div>
            </div>
            <div class="portlet-body">


                <p>
                    <?= Html::a('Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Publish', ['update-status', 'id' => $model->id, 'status' => News::STATUS_ACTIVE], ['class' => 'btn btn-success']) ?>
                    <?= Html::a('Unpublish', ['update-status', 'id' => $model->id, 'status' => News::STATUS_INACTIVE], ['class' => 'btn btn-danger']) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'title',
//                        [
//                            'attribute' => 'type',
//                            'style' => 'width: 20%',
//                            'value' => $model->getTypeName(),
//                        ],
                        [
                            'attribute' => 'status',
                            'value' => $model->getStatusName(),
                        ],
                        [
                            'attribute' => 'thumbnail',
                            'value' => $model->thumbnail ? Html::img($model->getThumbnailLink()) : '',
                            'format' => 'html'
                        ],
//                        [
//                            'attribute' => 'video',
//                            'value' =>$model->video?
//                                "<video width='400' controls>
//                                            <source src='".Yii::getAlias('@web') . '/' . Yii::getAlias('@uploads') . "/" . $model->video."' type='video/mp4'>
//                                            <source src='".Yii::getAlias('@web') . '/' . Yii::getAlias('@uploads') . "/" . $model->video."' type='video/avi'>
//                                </video>":'',
//                        ],
//                        [
//                            'attribute' => 'video_url',
//                            'value' =>$model->video_url?$model->video_url:'',
//                        ],
                        'short_description',
                        'content:html',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>


