<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AffiliateCompany */

$this->title = Yii::t('app','Cập nhật '). $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Quản lý Công ty liên kết'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app','Cập nhật ');
?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i><?= $this->title ?></div>
            </div>
            <div class="portlet-body form">
                <?= $this->render('_form', [
                    'model' => $model,
                    'type' => $type
                ]) ?>
            </div>
        </div>
    </div>
</div>
