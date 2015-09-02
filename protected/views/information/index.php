<?php
/* @var $this InformationController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class ="cont">
    <?php $this->renderPartial('top', array(
        'model'=>$model1,
    )); ?>
</div>

<div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'post',
)); ?>
    <?php
        $records = Phone::model()->findAll(array('order' => 'phone'));
        $list = CHtml::listData($records, 'id','phone');
        echo CHtml::dropDownList('phone', null, $list, array('empty' => 'Select Model', 'class' => 'form-control-drop'));
    ?>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Փնտրել'); ?>
    </div>

<?php $this->endWidget(); ?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
)); ?>
