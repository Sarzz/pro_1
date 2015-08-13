<?php
/* @var $this InformationController */
/* @var $model Information */


?>

<div class="inftitle"><?php echo $model->title; ?></div>

<div class="myview">
	<?php 
		if($model->image){ 
			echo CHtml::image(Yii::app()->baseUrl."/banner/".$model->image,$model->image , array(
		    'class' => 'pic',
		));
		}else{
			echo CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $model->image , array(
		    'class' => 'pic',
		));
		}
	?>
</div>

<div class="inf">
	<div class="infm">Name: <?php echo $model->full_name; ?></div>
	<div class="infm">Phone number: <?php echo $model->number; ?></div>
	<div class="infm">Location: <?php echo $model->location; ?></div>
	<div class="infm">Phone model: <?php echo $model->phone; ?></div>
        <div class="infm">Price: <?php echo $model->price; ?> AMD</div>
    <div class="infm">Email: <?php echo $model->email; ?></div>
</div>
	<div class="descr"><?php echo $model->description; ?></div>

