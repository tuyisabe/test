<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.container{
			position: relative;
			width: 600px;
			height: 50%;
			background: #ECF4F3;
			margin: 200px;
			padding: 20px;
		}

		.head{
			position: relative;
			margin-top: 0px;
			font-size: 14px;
			text-align: left;
			height: 120px;

		}

		table{
			position: relative;
			width: 580px;
			margin: 5px;
			align-items: center;
			text-align: center;
		}
		thead{
			text-align: center;
			padding: 6px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="head" style="p">
		<h2>N@T SHOP Ltd</h2>
		<h4>TIN: 1029473   <?php  $a= 110; for($i=1;$i<$a;$i++) {echo "&nbsp;"; }   $today = date('d-M-Y'); echo"Date: ". $today; ?></h4>
		<h4>TEL: 0789446782</h4>
		<h4>EMAIL:natshop@gmail.com</h4>
	</div>
	<div>
<?php
$names=$_POST['names'];
$product =$_POST['product'];
$qty=$_POST['qty'];
$buying=$_POST['buying'];
$selling=$_POST['selling'];


if(isset($_POST['result'])){
$total_price = $qty * $selling;
$interest = $selling-$buying;
$vat = ($interest * 15) / 100;

if ($qty >=20) {
	if($buying<0){
		$bonus = ($total_price * 0.5)/100;
		$total_price_to_pay = $total_price - $bonus + $vat;
		?>
<button style="background-color: yellow; width: 100%; margin: 15px 0px;"> You entered a negative buying price</button>
		<?php
	}
	
	$bonus = ($total_price * 0.5)/100;
	$total_price_to_pay = $total_price - $bonus + $vat;
	echo"<h3>NAMES: $names</h3>";
	echo "<table>

<thead>
<tr>
<th>Description</th><th>Qty</th><th>Price</th><th>Bonus</th><th>Tax</th><th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>".$product."</td><td>".$qty."</td><td>".$selling."</td><td>".$bonus."</td><td>".$vat."</td><td>".$total_price_to_pay."</td>
</tr>
</tbody>
</table>";

}
else if($qty<20 and $qty>0){

	$total_price_to_pay = $total_price + $vat;


	echo"<h3>NAMES: $names</h3>";
	echo "<table>

<thead>
<tr><th>Names</th>
<th>Description</th><th>Qty</th><th>Price</th><th>Tax</th><th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>".$names."</td><td>".$product."</td><td>".$qty."</td><td>".$selling."</td><td>".$vat."</td><td>".$total_price_to_pay."</td>
</tr>
</tbody>
</table>";
}
else{
?>
	
<script>
	alert("welcome" );
</script>
<?php
}

}
?></div>
</div>
</body>
</html>