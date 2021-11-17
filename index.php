<hrml>
<head>
<title>arthimeticc</title>
</head>
<style type="text/css">
	.container{
		position: relative;
		width: 600px;
		background: #ECF4F3;
		padding-left: 100px;
		padding-top: 0px;
		font-weight: 500;
		padding-bottom: 20px;
		height: 90%;
	}
	input,select{
		position: relative;
		width: 500px;
		border-radius: 10px;
		height: 60px;
		font-size: 20px;
		margin: 10px;
	}
</style>
<body>
<fieldset style="width: 600px; margin-left: 200px;">
	<h3 style="background: blue; color: white; height: 60px; font-weight: 600; text-align: center;"> N@TSHOP COMPANY </h3>
	<div class="container">
<form method="POST" action="invoice.php" style="margin-top: 0px;">
<input type="text" name="names" placeholder="Enter names" required="required"><br>
<select name="product" required="required">
	<option>---Select Product----</option>
	<option value="DVDs">DVDs</option>
	<option value="CDs">CDs</option>
	<option value="LAPTOPS">LAPTOPS</option>
	<option value="HDD">HDD</option>
	<option value="HDMI">HDMI</option>
	<option value="VGA">VGA</option>
	<option value="SWITCHES">SWITCHES</option>
	<option value="ROUTERS">ROUTERS</option>
	<option value="CAMERA">CAMERA</option>
	<option value="IP PHONE">IP PHONE</option>
	<option value="DSL MODEMS">DSL MODEMS</option>
</select><br>
<input type="number" name="buying" placeholder="Enter Buying prices" required="required"><br>
<input type="number" name="selling" placeholder="Enter Selling prices" required="required"><br>
<input type="number" name="qty" placeholder="Enter Quantity" required="required"><br><br>
<input type="submit" name="result" value="Result" style="background: green;">
</form></div></fieldset>
</body>
</html>


