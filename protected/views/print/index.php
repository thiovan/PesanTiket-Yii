<?php
		$result = Yii::app()->db->createCommand()
				->select('t.id_transaction, u.nama_lengkap, o.city AS city_orig, d.city AS city_dest, o.airport AS airport_orig, d.airport AS airport_dest, t.departure, a.name, t.adult, t.child, t.infant, c.adult AS adult_cost, c.child AS child_cost, c.infant AS infant_cost, t.payment, u.jenis_kelamin')
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
		$gender = $result[0]['jenis_kelamin'];
		$arrival = date_create($departure);
		date_add($arrival, date_interval_create_from_date_string('1 days'));
		$arrival = date_format($arrival, 'Y-m-d');

?>

<h3>Electronic Ticket Receipt</h3>

</br>
<p>Booking Number: #0000<?php echo $id_transaction; ?></p>

<hr style="border-color: black; border-width: 3px;">
<h3>Itinerary</h3>

<div class="row">
	<div class="col-md-6 col-print-6">
		<b>FROM:</b>
		<p><?php echo $city_orig; ?></p>
		<p><?php echo $airport_orig; ?></p>
		<b>AIRLINE:</b>
		<p><?php echo $airline; ?></p>
		<b>DEPARTURE:</b>
		<p><?php echo $departure; ?></p>
	</div>
	<div class="col-md-6 col-print-6">
		<b>TO:</b>
		<p><?php echo $city_dest; ?></p>
		<p><?php echo $airport_dest; ?></p>
		<b>AIRLINE:</b>
		<p><?php echo $airline; ?></p>
		<b>ARRIVAL:</b>
		<p><?php echo $arrival; ?></p>
	</div>
</div>

<hr style="border-color: black; border-width: 3px;">

<h3>Receipt</h3>
<div class="row">
	<div class="col-md-3 col-print-5">
		<b>NAME </b>
		</br>
		<b>TICKET NUMBER </b>
		</br>
		<b>GENDER </b>
		</br>
		<b>TOTAL AMOUNT </b>
		</br>
		<b>ISSUING AIRLINE AND DATE </b>
	</div>
	<div class="col-md-9 col-print-7">
		<b>: </b><?php echo $nama_lengkap; ?>
		</br>
		<b>: </b><?php echo rand(100,500). " " .rand(1111111,9999999); ?>
		</br>
		<b>: </b><?php echo $gender; ?>
		</br>
		<b>: </b>Rp. <?php echo $total; ?>,00
		</br>
		<b>: </b><?php echo $airline.", ".$departure; ?>
	</div>
</div>

</br>
<div align="center">
	<button id="dont-print" class="btn btn-lg btn-info" onClick="window.print()">Print E-Ticket</button>
</div>
 