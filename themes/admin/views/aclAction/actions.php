<?php
$this->pageTitle = 'ACL Actions';
$this->breadcrumbs = array(
    'Controllers' => array('aclController/admin'),
    'ACL Actions' => array('actions', 'cid' => $_GET['cid']),
    AclController::getData($_GET['cid'], 'title'),
);
?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-home fa-fw "></i> 
            ACL Actions 
            <span>> 
                Manage
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">

    </div>
</div>
<!-- widget grid -->
<section id="widget-grid" class="">
    <!-- row -->
    <div class="row">
        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Controller Actions (<?php echo AclController::getData($_GET['cid'], "title"); ?>)</h2>
                    <div class="widget-toolbar">
                        <?php echo CHtml::link('<i class="fa fa-home"></i> MANAGE CONTROLLERS', array('aclController/admin'), array('data-rel' => 'tooltip', 'title' => 'Manage', 'data-placement' => 'bottom', 'class' => 'btn btn-xs btn-primary')); ?>
                        <?php echo CHtml::link('<i class="fa fa-plus"></i> NEW', array('create', 'cid' => $_GET['cid']), array('data-rel' => 'tooltip', 'title' => 'New', 'data-placement' => 'bottom', 'class' => 'btn btn-xs btn-primary')); ?>
                    </div>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->
                    </div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <div class="table-responsive">
                            <?php
                            $this->widget('zii.widgets.grid.CGridView', array(
                                'itemsCssClass' => 'table table-striped table-hover',
                                'template' => '{items}{summary}{pager}',
                                'id' => 'acl-action-grid',
                                'dataProvider' => $model->actions($_GET['cid']),
                                'filter' => $model,
                                'pager' => array(
                                    'htmlOptions' => array(
                                        'class' => 'pagination',
                                    ),
                                    'header' => '',
                                    'selectedPageCssClass' => 'active',
                                ),
                                'pagerCssClass' => 'dt-row dt-bottom-row',
                                'columns' => array(
                                    array(
                                        'name' => 'title',
                                        'type' => 'raw',
                                        'value' => '$data->title',
                                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Title'),
                                    ),
                                    array(
                                        'name' => 'controller_id',
                                        'type' => 'raw',
                                        'value' => 'AclController::getData($data->controller_id, "title")',
                                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Controller'),
                                    ),
                                    'action',
                                    array(
                                        'class' => 'CButtonColumn',
                                        'template' => '{view}{update}{delete}',
                                        'htmlOptions' => array('style' => "text-align:center;width:10%;", 'title' => 'Actions', 'class' => ''),
                                        'buttons' => array
                                            (
                                            'view' => array
                                                (
                                                'label' => 'View',
                                                'url' => 'yii::app()->createUrl("aclAction/view", array("id"=>"$data->id","cid"=>"$_GET[cid]"))',
                                                'options' => array('class' => 'view')
                                            ),
                                            'update' => array
                                                (
                                                'label' => 'Update',
                                                'url' => 'yii::app()->createUrl("aclAction/update", array("id"=>"$data->id","cid"=>"$_GET[cid]"))',
                                                'options' => array('class' => 'edit'),
                                            ),
                                            'delete' => array
                                                (
                                                'label' => 'Delete',
                                                'url' => 'yii::app()->createUrl("aclAction/delete", array("id"=>"$data->id","cid"=>"$_GET[cid]"))',
                                                'options' => array('class' => 'delete'),
                                            ),
                                        ),
                                    ),
                                ),
                            ));
                            ?>
                        </div>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
<!-- end widget grid -->