<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_top_15 padding-bottom-5-prcnt">
    <div class="fr_lr con-img">
        <div class="container-fluid ">
            <div class="col-md-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center clearfix" style="height: auto;padding: 20px 0px">
                    <h1 class="heading-1 google_marcellus_SC text_shadow_5 size-3-vw"><span> Contact Us</span></h1>
                </div>
                <div class="col-sm-12 col-sm-12 col-xs-12 margin_bottom_10">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_trans_white_80 padding-top-3-prcnt text-left line-h-24 margin_bottom_10 content_img">
                        <h1>Contact Us</h1>

                        <?php if (Yii::app()->user->hasFlash('contact')): ?>

                            <div class="flash-success">
                                <?php echo Yii::app()->user->getFlash('contact'); ?>
                            </div>

                        <?php else: ?>

                            <p>
                                If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                            </p>

                            <div class="form">

                                <?php $form = $this->beginWidget('CActiveForm'); ?>

                                <p class="note">Fields with <span class="required">*</span> are required.</p>

                                <?php echo $form->errorSummary($model); ?>

                                <div class="row">
                                    <?php echo $form->labelEx($model, 'name'); ?>
                                    <?php echo $form->textField($model, 'name'); ?>
                                </div>

                                <div class="row">
                                    <?php echo $form->labelEx($model, 'email'); ?>
                                    <?php echo $form->textField($model, 'email'); ?>
                                </div>

                                <div class="row">
                                    <?php echo $form->labelEx($model, 'subject'); ?>
                                    <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
                                </div>

                                <div class="row">
                                    <?php echo $form->labelEx($model, 'body'); ?>
                                    <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
                                </div>

                                <?php if (CCaptcha::checkRequirements()): ?>
                                    <div class="row">
                                        <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                        <div>
                                            <?php $this->widget('CCaptcha'); ?>
                                            <?php echo $form->textField($model, 'verifyCode'); ?>
                                        </div>
                                        <div class="hint">Please enter the letters as they are shown in the image above.
                                            <br/>Letters are not case-sensitive.</div>
                                    </div>
                                <?php endif; ?>

                                <div class="row submit">
                                    <?php echo CHtml::submitButton('Submit'); ?>
                                </div>

                                <?php $this->endWidget(); ?>

                            </div><!-- form -->

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>