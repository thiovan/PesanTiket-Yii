<?php
/* @var $this OrderController */

$this->breadcrumbs=array(
	'Order',
);
?>
<h1>My Order</h1>

<?php
		$user2 = Yii::app()->user->name;
		$result2 = Yii::app()->db->createCommand()
				->select('*')
				->from('users')
				->where('username=:username', array(':username'=>$user2))
				->queryRow();
		$id_user = $result2['id_user'];
		$nama_lengkap = $result2['nama_lengkap'];


		$result = Yii::app()->db->createCommand()
				->select('t.id_transaction, a.name, o.city AS city_orig, d.city AS city_dest, o.airport AS airport_orig, d.airport AS airport_dest, t.payment')
				->from('transactions t')
				->leftjoin('airlines a', 't.id_airline = a.id_airline')
				->leftjoin('origins o', 't.id_origin = o.id_origin')
				->leftjoin('destinations d', 't.id_destination = d.id_destination')
				->where('id_user=:id_user', array(':id_user'=>$id_user))
				->order('id_transaction desc')
				->queryAll();

?>

<?php
	foreach($result as $item) {
		$id = $item['id_transaction'];
		if ($item['payment'] == 0) {
			$status = "<h4 class='text-danger'>*Transaksi Tertunda</h4>";
		}else{
			$status = "<h4 class='text-success'>*Transaksi Selesai</h4>";
		}
		echo '<div class="view">';
		echo $status;
   		echo "<b>Id Transaksi:</b>";
   		echo "\t".$item['id_transaction'];
   		echo "</br>";
   		echo "<b>Maskapai:</b>";
   		echo "\t".$item['name'];
   		echo "</br>";
   		echo "<b>Dari:</b>";
   		echo "\t".$item['city_orig']."\t(".$item['airport_orig'].")";
   		echo "</br>";
   		echo "<b>Ke:</b>";
   		echo "\t".$item['city_dest']."\t(".$item['airport_dest'].")";
   		echo "</br>";
   		echo "<div align=center>";
   		echo '<a href="'.Yii::app()->request->baseUrl.'/index.php/payment/id/'.$id.'"><button class="btn btn-md btn-danger">More Detail</button></a>';
   		echo "</div>";
   		echo "</div>";
	}
?>



	