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
            <div class="img"><span class="helper2"></span>
                <?php 
                    if($value->image){ 
                            echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/".$value->image,$value->image, array(
                        'class' => 'someClass1',
                    )), array('view', 'id'=>$value->id));
                    }else{
                            echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $value->image , array(
                        'class' => 'someClass1',
                    )), array('view', 'id'=>$value->id));
                    }

                    ?>
            </div>
             <marquee scrollamount="3" direction="right" onmouseover=this.stop() onmouseout=this.start() class="btn_my_marc"><?php echo CHtml::link(CHtml::encode($value->title), array('view', 'id'=>$value->id), array('class'=>'btn_my pad')); ?></marquee>
             
            <div>
            <span id="date_0"  class="bold"><?php echo CHtml::encode($value->time, array('size'=>10)); ?></span>
            <span id="price_0" class="price_red"><?php echo CHtml::encode($value->price); ?>AMD</span>
            </div>   
        </div>  
    <?php    
    }
    ?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
)); ?>
