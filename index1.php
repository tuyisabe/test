<hrml>
<head>
<title>arthimeticc</title>
</head>
<body>

<form method="POST" action="">
<input type="number" name="num1" placeholder="Enter the first number">
<input type="submit" name="result" value="Result">
</form>


<?php

$num1=$_POST['num1'];

if(isset($_POST['result'])){
if($num1<=50 and $num1>0){
$res = $num1*150;
echo $res;

}

else if($num1>50 and $num1<=100){
$res1= $num1-50;
$price1 = 50*150;
$price2 = $res1*200;
$res=$price1+$price2;

echo $price1 ."+".$price2."+"."=".$res;

}

else if($num1>150 and $num1<250){
$res1 = $num1-50;
$price1 = 50* 150;
$res2 = $res1-100;
$price2= 100*200;
$price3 = $res2*250;

$res = $price1+$price2+$price3;
echo $price1 ."+".$price2."+".$price3."+"."=".$res;
}
else if($num1>250){
$res1 = $num1-50;
$price1 = 50 * 150;
$res2 = $res1-100;
$price2= 100 * 200;
$price3 = 100*250;
$res3 = $res2-100;
$price4 = $res3*400;
$res = $price1+$price2+$price3+$price4;
echo $price1 ."+".$price2."+".$price3."+".$price4."=".$res;
}
else{
	echo" You have entered a negative number";
}
}
?>
</body>
</html>


