<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'customer-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data'),
        ));
?>
<fieldset>
    <div class="form-group">
        <label class="col-md-4 control-label">
            <?php echo $form->labelEx($model, 'full_name'); ?>
        </label>
        <div class="col-md-8">
            <?php echo $form->textField($model, 'full_name', array('maxlength' => 150, 'class' => 'form-control', 'placeholder' => 'Name')); ?>
            <?php echo $form->error($model, 'full_name', array('class' => 'text-danger')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">
            <?php echo $form->labelEx($model, 'username'); ?>
        </label>
        <div class="col-md-8">
            <?php echo $form->textField($model, 'username', array('maxlength' => 150, 'class' => 'form-control', 'placeholder' => 'Username')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'text-danger')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">
            <?php echo $form->labelEx($model, 'email'); ?>
        </label>
        <div class="col-md-8">
            <?php echo $form->textField($model, 'email', array('maxlength' => 150, 'class' => 'form-control', 'placeholder' => 'Email')); ?>
            <?php echo $form->error($model, 'email', array('class' => 'text-danger')); ?>
        </div>
    </div>
    <?php if ($model->isNewRecord) { ?>
        <div class="form-group">
            <label class="col-md-4 control-label">
                <?php echo $form->labelEx($model, 'password'); ?>
            </label>
            <div class="col-md-8">
                <?php echo $form->passwordField($model, 'password', array('maxlength' => 150, 'class' => 'form-control', 'placeholder' => 'Password')); ?>
                <?php echo $form->error($model, 'password', array('class' => 'text-danger')); ?>
            </div>
        </div>
    <?php } ?>
    <div class="form-group">
        <label class="col-md-4 control-label">
            <?php echo $form->labelEx($model, 'group'); ?>
        </label>
        <div class="col-md-8">
            <?php echo $form->dropDownList($model, 'group', CHtml::listData(UserGroup::model()->findAll(array('condition' => 'group_type="Front"')), 'id', 'title'), array('empty' => 'Select a Group', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'group', array('class' => 'text-danger')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">
            <?php echo $form->labelEx($model, 'status'); ?>
        </label>
        <div class="col-md-8">
            <?php echo $form->dropDownList($model, 'status', array('1' => 'Active', '0' => 'Inactive'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status', array('class' => 'text-danger')); ?>
        </div>
    </div>
</fieldset>
<div class="modal-footer">   
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'btn btn-primary', 'id' => $model->id)); ?>
    <button data-dismiss="modal" class="btn btn-default" onclick="location.reload();" type="button">Cancel</button>
</div>
<?php $this->endWidget(); ?>
