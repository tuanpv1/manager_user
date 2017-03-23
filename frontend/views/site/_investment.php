<?php
/**
 * Created by PhpStorm.
 * User: TuanPham
 * Date: 1/17/2017
 * Time: 9:21 AM
 */
use common\models\News;

?>
<!--<div class="main ovfh">-->
<ul>
    <?php if (isset($listNews) && !empty($listNews)) {
        foreach ($listNews as $item) {
            /** @var  $item News */
            ?>
            <li>
                <div class="benef--box">
                    <div>
                        <a href="<?=\yii\helpers\Url::to(['site/detail-news','id'=>$item->id])?>">
                            <img width="96" height="96" src="<?= $item->getImage() ?>"
                              class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                              alt="<?= $item->title ?>"/>
                        </a>
                    </div>
                    <div class="benef--box--text">
                        <h3><a href="<?=\yii\helpers\Url::to(['site/detail-news','id'=>$item->id])?>"><?= $item->title ?></a> <span></span></h3>
                        <div><p><?= $item->description ?></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php
        }
    } ?>
</ul>
