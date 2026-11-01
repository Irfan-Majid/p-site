<?php
/* @var $this DocumentController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = DocumentCategory::getData(@$_REQUEST['id'], 'title') . ' - ' . Yii::app()->name;
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_top_15 padding-bottom-5-prcnt">
    <div class="fr_lr con-img">
        <div class="container-fluid ">
            <div class="col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center clearfix" style="height: auto;padding: 20px 0px">
                    <h1 class="heading-1 google_marcellus_SC text_shadow_5 size-3-vw"><span> <?= DocumentCategory::getData(@$_REQUEST['id'], 'title') ?></span></h1>
                </div>
                <div class="col-sm-12 col-sm-12 col-xs-12 margin_bottom_10">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_trans_white_80 padding-top-3-prcnt text-left line-h-24 margin_bottom_10 content_img">
                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'content-grid',
                            'dataProvider' => $model->search_document(@$_REQUEST['id']),
                            'filter' => $model,
                            'htmlOptions' => array('class' => ''),
                            'itemsCssClass' => 'table table-bordered table-striped table-hover smart-form',
                            'template' => '{items}{pager}',
                            'emptyText' => 'No result found.',
                            'summaryText' => "{start} - {end} of {count} result",
                            'pager' => array(
                                'htmlOptions' => array(
                                    'class' => 'pagination',
                                ),
                                'header' => '',
                                'selectedPageCssClass' => 'active',
                            ),
                            'pagerCssClass' => 'widget-footer',
                            'columns' => array(
                                array(
                                    'name' => 'title',
                                    'type' => 'raw',
                                    'value' => 'CHtml::link(CHtml::encode($data->title), array("download","id"=>$data->id))',
                                    'filter' => CHtml::activeTextField($model, 'title', array('class' => 'form-control')),
                                    'htmlOptions' => array('class' => ''),
                                ),
                                array(
                                    'header' => 'Published Date',
                                    'name' => 'created_on',
                                    'type' => 'raw',
                                    'value' => 'User::get_date_time($data->created_on)',
                                    'filter' => CHtml::activeTextField($model, 'created_on', array('class' => 'form-control')),
                                    'htmlOptions' => array('style' => 'width:220px;'),
                                ),
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
