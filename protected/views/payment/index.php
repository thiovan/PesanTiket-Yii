<?php
/* @var $this PaymentController */

$this->breadcrumbs=array(
	'Payment',
);
?>

<?php
		$result = Yii::app()->db->createCommand()
				->select('t.id_transaction, u.nama_lengkap, o.city AS city_orig, d.city AS city_dest, o.airport AS airport_orig, d.airport AS airport_dest, t.departure, a.name, t.adult, t.child, t.infant, c.adult AS adult_cost, c.child AS child_cost, c.infant AS infant_cost, t.payment')
				->from('transactions t')
				->leftjoin('airlines a', 't.id_airline = a.id_airline')
				->leftjoin('users u', 't.id_user = u.id_user')
				->leftjoin('origins o', 't.id_origin = o.id_origin')
				->leftjoin('destinations d', 't.id_destination = d.id_destination')
				->leftjoin('costs c', 't.id_cost = c.id_cost')
				->where('id_transaction=:id_transaction', array(':id_transaction'=>$id))
				->queryAll();

		$id_transaction = $result[0]['id_transaction'];
		$nama_lengkap = $result[0]['nama_lengkap'];
		$city_orig = $result[0]['city_orig'];
		$city_dest = $result[0]['city_dest'];
		$airport_orig = $result[0]['airport_orig'];
		$airport_dest = $result[0]['airport_dest'];
		$departure = $result[0]['departure'];
		$airline = $result[0]['name'];
		$adult = $result[0]['adult'];
		$child = $result[0]['child'];
		$infant = $result[0]['infant'];
		$adult_cost = $result[0]['adult_cost'];
		$child_cost = $result[0]['child_cost'];
		$infant_cost = $result[0]['infant_cost'];
		$status = $result[0]['payment'];
		$total = ($adult*$adult_cost)+($child*$child_cost)+($infant*$infant_cost);

?>

<?php
	if (isset($_GET['message'])) {
		echo '<script language="javascript">';
		echo 'alert("Terima Kasih Pembayaran Anda Telah Kami Diterima")';
		echo '</script>';
	}
?>

<h1>Tagihan #<?php echo "00000" . $id_transaction; ?></h1>

<div class="box">

<div align="center">
<?php
	if ($status == 0) {
		echo "<h3 class='text-danger'><u>Belum Lunas</u></h3>";
	}else{
		echo "<h3 class='text-success'><u>Lunas</u></h3>";
	}
?>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>'',
	'attributes'=>array(
		array(
	        'label'=>'ID Transaksi',
	        'value'=>$id_transaction,
	    ),
		array(
	        'label'=>'Nama',
	        'value'=>$nama_lengkap,
	    ),
	    array(
	        'label'=>'Dari',
	        'value'=>$city_orig,
	    ),
	    array(
	        'label'=>'',
	        'value'=>$airport_orig,
	    ),
	    array(
	        'label'=>'Ke',
	        'value'=>$city_dest,
	    ),
	    array(
	        'label'=>'',
	        'value'=>$airport_dest,
	    ),
		array(
	        'label'=>'Tanggal Berangkat',
	        'value'=>$departure,
	    ),
		array(
	        'label'=>'Maskapai',
	        'value'=>$airline,
	    ),
	    array(
	        'label'=>'Penumpang Dewasa',
	        'value'=>$adult . " x  Rp." . $adult_cost . " = Rp." . $adult*$adult_cost,
	    ),

	    array(
	        'label'=>'Penumpang Anak',
	        'value'=>$child . " x  Rp." . $child_cost . " = Rp." . $child*$child_cost,
	    ),

	    array(
	        'label'=>'Penumpang Bayi',
	        'value'=>$infant . " x  Rp." . $infant_cost . " = Rp." . $infant*$infant_cost,
	    )
	),
)); ?>

<div align="right">
	<h3>Total Pembayaran : Rp. <?php echo $total; ?></h3>
</div>

</div>
<div align="center">
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/payment/pay/<?php echo $id_transaction; ?>">
<?php
	if ($status == 0) {
		echo "<button class='btn btn-lg btn-primary'>Konfirmasi Pembayaran</button>";
	}else{
		echo "<button class='btn btn-lg btn-primary disabled'>Konfirmasi Pembayaran</button>";
	}
?>

<?php
	if ($status == 1) {
		echo "<br><br><a href='".Yii::app()->request->baseUrl."/index.php/print/id/".$id_transaction."'>";
		echo "<button class='btn btn-lg btn-success'>Cetak E-Tiket</button>";
		echo "</a>";
	}
?>
	
</div>