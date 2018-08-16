<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<!-- Custom Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-3.2.1.min.js"></script>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background-color: #6191bf;
background-image: -webkit-gradient(linear, left top, left bottom, from(#DA6B3D), to(#DD8E6F));
background-image: -webkit-linear-gradient(top, #DA6B3D, #DD8E6F);
background-image: -moz-linear-gradient(top, #DA6B3D, #DD8E6F);
background-image: -ms-linear-gradient(top, #DA6B3D, #DD8E6F);
background-image: -o-linear-gradient(top, #DA6B3D, #DD8E6F);
background-image: linear-gradient(top, #DA6B3D, #DD8E6F);">

<div class="container" id="page">

	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/assets/logo.png" style="width: 400px;"></div>
	</div><!-- header -->

	<div id="mainmenu">

<?php
$user = Yii::app()->user->name;

	if (Yii::app()->user->isGuest) {
              $this->widget('zii.widgets.CMenu',array(
              'activeCssClass' => 'active',
              'activateParents' => true,
              'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index'), 'itemOptions'=>array('class'=>'fa fa-home')),
                    array('label'=>'Tiket Pesawat', 'url'=>array('/transactions/create'), 'itemOptions'=>array('class'=>'fa fa-plane')),
                    array('label'=>'Informasi', 'url'=>array('/information'), 'itemOptions'=>array('class'=>'fa fa-info-circle')),
                    array('label'=>'Hubungi Kami', 'url'=>array('/site/contact'), 'itemOptions'=>array('class'=>'fa fa-phone')),
                    array('label'=>'Register', 'url'=>array('/users/index'), 'itemOptions'=>array('id' => 'menu-register', 'class'=>'fa fa-user-circle')),
		    		array('label'=>'Login', 'url'=>array('/site/login'), 'itemOptions'=>array('id' => 'menu-login', 'class'=>'fa fa-sign-in')),
                    ),
               ));
    }elseif ($user == 'admin') {
    			$this->widget('zii.widgets.CMenu',array(
		            'activeCssClass' => 'active',
		            'activateParents' => true,
		            'items'=>array(
		            	array('label'=>'Home', 'url'=>array('/site/index')),
		            	array('label'=>'Transactions', 'url'=>array('/transactions')),
		            	array('label'=>'Airlines', 'url'=>array('/airlines')),
		            	array('label'=>'Origins', 'url'=>array('/origins')),
		            	array('label'=>'Destinations', 'url'=>array('/destinations')),
		            	array('label'=>'Costs', 'url'=>array('/costs')),
		            	array('label'=>'Promo', 'url'=>array('/promo')),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'),'itemOptions'=>array('id' => 'menu-login', 'class'=>'fa fa-sign-out')),
						array('label'=>'My Order', 'url'=>array('/order'), 'itemOptions'=>array('id' => 'menu-register', 'class'=>'fa fa-ticket'))
            		),
        		));

    }else{
        		$this->widget('zii.widgets.CMenu',array(
		            'activeCssClass' => 'active',
		            'activateParents' => true,
		            'items'=>array(
		            	array('label'=>'Home', 'url'=>array('/site/index'), 'itemOptions'=>array('class'=>'fa fa-home')),
		            	array('label'=>'Tiket Pesawat', 'url'=>array('/transactions/create'), 'itemOptions'=>array('class'=>'fa fa-plane')),
		            	array('label'=>'Informasi', 'url'=>array('/information'), 'itemOptions'=>array('class'=>'fa fa-info-circle')),
		            	array('label'=>'Hubungi Kami', 'url'=>array('/site/contact'), 'itemOptions'=>array('class'=>'fa fa-phone')),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'),'itemOptions'=>array('id' => 'menu-login', 'class'=>'fa fa-sign-out')),
						array('label'=>'My Order', 'url'=>array('/order'), 'itemOptions'=>array('id' => 'menu-register', 'class'=>'fa fa-ticket'))
            		),
        		));
    }

?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>