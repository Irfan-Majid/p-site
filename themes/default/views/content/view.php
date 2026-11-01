<?php
/* @var $this ContentController */
/* @var $model Content */

$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_top_15 padding-bottom-5-prcnt">
    <div class="fr_lr con-img">
        <div class="container-fluid ">
            <div class="col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center clearfix" style="height: auto;padding: 20px 0px">
                    <h1 class="heading-1 google_marcellus_SC text_shadow_5 size-3-vw"><span> <?= $model->title ?></span></h1>
                </div>
                <div class="col-sm-12 col-sm-12 col-xs-12 margin_bottom_10">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_trans_white_80 padding-top-3-prcnt text-left line-h-24 margin_bottom_10 content_img">
                        <div class="pull-left" style="padding: 0px 10px 10px 0px;"><?= Content::get_picture_content($model->id) ?></div>
                        <div class="pull-left"><?= $model->details ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>