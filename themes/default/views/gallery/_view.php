<?php
/* @var $this GalleryController */
/* @var $data Banner */
?>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-bottom: 10px;">
    <?php //echo Banner::get_picture($data->id, 'img-responsive img-thumbnail') ?>
    <?php
    $filePath = Yii::app()->baseUrl . '/uploads/banner/' . $data->banner;
    ?>
    <a class="border-radius-50-prcnt overflow-hidden text-center img_anchor_1" data-lightbox="default" data-title="<?= $data->title ?>" href="<?= $filePath ?>">
        <?php echo CHtml::image($filePath, 'Picture', array('alt' => $data->title, 'class' => 'width_full', 'title' => $data->title, 'style' => '')); ?>
    </a>
</div>