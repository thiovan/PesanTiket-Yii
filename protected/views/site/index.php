<?php $this->pageTitle=Yii::app()->name; ?>

<div class="box" style="padding: 0px">
<marquee style="font-weight: bold;">
	<?php
		$result = Yii::app()->db->createCommand()
				->select('u.promo')
				->from('promo u')
				->where('u.status = 1')
				->queryAll();
		foreach ($result as $value) {
			echo $value['promo'];
			echo "&nbsp&nbsp&nbsp";
		}
		//print_r($result);
		
	?>
</marquee>
</div>

<div class="row">
	<div class="col-md-9">
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
	</div>
	<div class="col-md-3" style="
background: #e8723c;
background: -moz-linear-gradient(-45deg, #e8723c 0%, #ef8767 50%, #ef7d57 51%, #f5b5a3 100%);
background: -webkit-linear-gradient(-45deg, #e8723c 0%,#ef8767 50%,#ef7d57 51%,#f5b5a3 100%);
background: linear-gradient(135deg, #e8723c 0%,#ef8767 50%,#ef7d57 51%,#f5b5a3 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e8723c', endColorstr='#f5b5a3',GradientType=1 );
padding-bottom: 15px;
	">
	<center>
		<div class="row">
			<h4>Belum Punya Akun ?</h4>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/users/index/">
				<button class="btn btn-warning btn-lg">Daftar Sekarang</button>
			</a>
			<br><small>Dapatkan penawaran menarik setelah anda menyelesaikan pendaftaran.</small>
		</div>
		<div class="row" style="margin-top: 25px">
			<h4>Sudah Punya Akun ?</h4>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/login/">
				<button class="btn btn-warning btn-lg">Login Sekarang</button>
			</a>
		</div>
	</center>
	</div>
</div>


<div class="row" style="margin-top: 10px;">
	<div class="col-md-2">
		<div class="partner" style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/assets/title-partner.png) no-repeat -0px -0px">Partner Resmi</div>
	</div>
	<div class="col-md-2">
		<center>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/assets/lion-air.png">
		</center>
	</div>
	<div class="col-md-2">
		<center>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/assets/garuda.png">
		</center>
	</div>
	<div class="col-md-2">
		<center>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/assets/air-asia.png">
		</center>
	</div>
	<div class="col-sm-2">
		<center>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/assets/batik-air.png">
		</center>
	</div>
	<div class="col-md-2">
		<div class="partner" style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/assets/title-partner-right.png) no-repeat -0px -0px; float: right; padding-left: 20px">Partner Resmi</div>
	</div>
</div>

<div class="row" style="background-color: #f2f2f2;">

</div>

<div class="row" style="margin-top: 10px;">

<?php 
	$result = Yii::app()->db->createCommand()
				->select('a.name AS airline, o.city AS city_orig, d.city AS city_dest, o.airport AS airport_orig, d.airport AS airport_dest, c.adult')
				->from('costs c')
				->leftjoin('airlines a', 'c.id_airline = a.id_airline')
				->leftjoin('origins o', 'c.id_origin = o.id_origin')
				->leftjoin('destinations d', 'c.id_destination = d.id_destination')
				->queryAll();

	foreach ($result as $item) {
		if ($item['airline'] == 'Garuda Indonesia') {
			$image = "garuda.png";
		} elseif ($item['airline'] == 'Lion Air') {
			$image = "lion-air.png";
		} elseif ($item['airline'] == 'Air Asia') {
			$image = "air-asia.png";
		} else {
			$image = "batik-air.png";
		}
		echo '
	<div class="col-md-4">
		<div align="center" id="custom-box">
			<div id="custom-inner-box">
				<img src="'. Yii::app()->request->baseUrl .'/images/assets/'. $image .'">
			</div>

			<div class="row">
				<div class="col-sm-4">
				'.
					$item['city_orig']
				.'
					<br>
				'.
					substr($item['airport_orig'], 0, 3)
				.'
				</div>
				<div class="col-sm-4">
					<hr style="border-width: 3px;">
				</div>
				<div class="col-sm-4">
				'.
					$item['city_dest']
				.'
					<br>
				'.
					substr($item['airport_dest'], 0, 3)
				.'
				</div>
			</div>
			Mulai dari: <br>
			<h3>Rp. '. $item['adult'] .'</h3>

		</div>
	</div>
		';
	}
?>

</div>

