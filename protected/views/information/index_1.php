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
<?php foreach ($model3 as $data) { 
//        echo "<pre>";
//        var_dump($data); exit;   ?>

<div class="view">

	<div class = "my"><span class="helper2"></span>
		<?php 
		if($data->image){ 
			echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/".$data->image,$data->image, array(
		    'class' => 'someClass',
		)), array('view', 'id'=>$data->id));
		}else{
			echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $data->image , array(
		    'class' => 'someClass',
		)), array('view', 'id'=>$data->id));
		}
		
		?>

	</div>
	<!-- <a href="<?php echo Yii::app()->createUrl('information/view', array('id' => $data->id))?>"> -->
	<div class="mydiv">
		

		<div class="mytitle">
		<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id), array('class'=>'btn_my')); ?>
		</div>
            <div class ="myphone">
                <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
		<b><?php echo CHtml::encode($data->phone); ?></b>
            </div>


		<div class="myprice">
		<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
		<b><?php echo CHtml::encode($data->price); ?> Դրամ</b>
		</div>		
		<div class="mydate">
	        <b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
		<b><?php echo CHtml::encode($data->time); ?></b>
		</div>
       	
	</div>
	<!-- </a> -->
</div>
<?php } ?>