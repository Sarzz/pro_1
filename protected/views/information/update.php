<?php
/* @var $this InformationController */
/* @var $model Information */




?>

<h1>Update Information <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>