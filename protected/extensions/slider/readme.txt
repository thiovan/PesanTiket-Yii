<?php
	        $this->widget('ext.slider.slider', array(
	            'container'=>'slideshow',
	            'width'=>800, 
	            'height'=>240, 
	            'timeout'=>3000,
	            'infos'=>false,
	            'constrainImage'=>true,
	            'images'=>array('1.jpg','2.jpg','3.jpg','4.jpg'),
	            'alts'=>array(''),
	            'defaultUrl'=>Yii::app()->request->hostInfo
	            )
	        );
	?>