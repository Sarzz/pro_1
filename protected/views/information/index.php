<?php
/* @var $this InformationController */
/* @var $dataProvider CActiveDataProvider */
//var_dump($model);exit;
?>
<h1>Informations</h1>
<div class ="cont">
    <?php
    foreach ($model as $value){ 
    ?>
        <div class="block1" id="we">
            <div class="img">
                <?php 
                    if($value->image){ 
                            echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/".$value->image,$value->image, array(
                        'class' => 'someClass',
                    )), array('view', 'id'=>$value->id));
                    }else{
                            echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $value->image , array(
                        'class' => 'someClass',
                    )), array('view', 'id'=>$value->id));
                    }

                    ?>
            </div>
            <?php echo CHtml::link(CHtml::encode($value->title), array('view', 'id'=>$value->id), array('class'=>'btn_my')); ?>
            <div>
            <span id="date_0"  class="bold"><?php echo CHtml::encode($value->time, array('size'=>10)); ?></span>
            <span id="price_0" class="price_red"><?php echo CHtml::encode($value->price); ?></span>
            </div>       
        </div>  
    <?php    
    }
    ?>
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'info-form',
    'enableAjaxValidation'=>false,
)); ?>
    <div class ="cont1">
        <div class="form-group">
            <div class="lebloc">
                <?php
                $records = Location::model()->findAll(array('order' => 'location'));
                $lis = CHtml::listData($records, 'id','location');
                echo CHtml::dropDownList('location', null, $lis, array('empty' => 'Select Location', 'class' => 'form-control-drop wid'));
                ?>
            </div>
        </div>

        <div class="form-group">
            <div class="lebphone">
                <?php
                $records = Phone::model()->findAll(array('order' => 'phone'));
                $list = CHtml::listData($records, 'id','phone');
                echo CHtml::dropDownList('phone', null, $list, array('empty' => 'Select Model', 'class' => 'form-control-drop wid'));
                ?>
            </div>
        </div>

        <div class="row buttons let">
            <?php echo CHtml::submitButton($model1->isNewRecord ? 'Search' : 'Save', array('class' => 'btn btn-success')); ?>
        </div>

    </div>
<?php $this->endWidget(); ?>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
)); ?>
