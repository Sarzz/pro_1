<?php
/* @var $this InformationController */
/* @var $model Information */
/* @var $form CActiveForm */
//form options array...

?>

<div class="form mycontent">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'information-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	        'htmlOptions' => array(
	        'enctype' => 'multipart/form-data',
	    ),
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	


	<div class="form-group">
		<?php echo $form->labelEx($model,'full_name', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>256, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'location', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php
                $records = Location::model()->findAll(array('order' => 'location'));
                $lis = CHtml::listData($records, 'id','location');
                echo CHtml::dropDownList('location', null, $lis, array('empty' => 'Select Location', 'class' => 'form-control-drop'));
                ?>
        </div>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php
                $records = Phone::model()->findAll(array('order' => 'phone'));
                $list = CHtml::listData($records, 'id','phone');
                echo CHtml::dropDownList('phone', null, $list, array('empty' => 'Select Model', 'class' => 'form-control-drop'));
                ?>
        </div>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'price', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>256, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256, 'class' => 'form-control')); ?>
		</div>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description', array('class' => 'control-label')); ?>
		<div class="leb">
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'class' => 'form-control-desc')); ?>
		</div>
		<?php echo $form->error($model,'description'); ?>
	</div>

	

	<div class="form-group">
		<?php echo $form->labelEx($model,'number', array('class' => 'control-label')); ?>
		<?php echo $form->textField($model,'number',array('class' => 'form-control-number')); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>
        
    <div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo CHtml::activeFileField($model, 'image');  ?>  
        <div class="img">
            <?php 
		if($model->image){ 
			echo CHtml::image(Yii::app()->baseUrl."/banner/".$model->image,$model->image, array(
		    'class' => 'someClass',
		));
		}else{
			echo CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $model->image , array(
		    'class' => 'someClass',
		));
		}
		
		?>
        </div>
        <?php echo $form->error($model,'image'); ?>
    </div>
    
    <div class="form-group">
        <?php echo $form->labelEx($model,'top', array('class' => 'control-label-top')); ?>
        <?php echo $form->checkBox($model,'top',array('class' => 'form-control-top')); ?>
        <?php echo $form->error($model,'top'); ?>
    </div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->