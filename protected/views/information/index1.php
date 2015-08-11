<?php
/* @var $this InformationController */
/* @var $dataProvider CActiveDataProvider */




?>

<h1>Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view1',
	
)); ?>
