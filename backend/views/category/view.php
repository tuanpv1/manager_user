<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->display_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Danh mục'), 'url' => ['index']];
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
                <div class="tabbable-custom ">
                    <p>
                        <?= Html::a(Yii::t('app','Cập nhật'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a(Yii::t('app','Xóa'), ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app','Bạn có muốn xóa danh mục này không?'),
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [

                            'display_name',

                            'description:ntext',
                            [
                                'attribute' => 'status',
                                'format' => 'raw',
                                'value' => ($model->status == \common\models\Category::STATUS_ACTIVE) ?
                                    '<span class="label label-success">' . $model->getStatusName() . '</span>' :
                                    '<span class="label label-danger">' . $model->getStatusName() . '</span>',
                            ],
                            [
                                'attribute' => 'created_at',
                                'value' => date('d/m/Y H:i:s', $model->created_at),
                            ],
                            [
                                'attribute' => 'updated_at',
                                'value' => date('d/m/Y H:i:s', $model->updated_at),
                            ],
                        ],
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>
