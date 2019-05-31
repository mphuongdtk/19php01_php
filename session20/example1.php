<link rel="stylesheet" type="text/css" href="example1.css">
<?php
echo "<h1>Hello world</h1>";
?>
<p>Hi man!</p>
<?php 
	$userName = 'admin';
	echo $userName;
	//document.write(userName);
	/* 
	//document.write(userName);
	*/
	$x = 7;
	$y = 8;
	echo "<br>";
	echo $x + $y;
	echo "<br>";
	echo $x - $y;
	echo "<br>";
	echo $x * $y;
	echo "<br>";
	echo $x / $y;
	/* 
	*sumNumber function
	* Description: Summary 2 number
	*created by mykull
	*created 2019-05-25
	*/
	function sumNumber($a , $b){
		return $a + $b;
	}
	echo "<br>";
	echo sumNumber(22, 98);
	echo "<br>";
	$i = 5;
	if ($i % 2) {
		echo "i là số lẻ";
	} else{
		echo "i là số chẵn";
	}
	echo "<br>";
	for($i =1; $i <= 10; $i++){
		echo $i;
		echo "<br>";
	}
	echo "<br>";
	$n = 5;
	while ($n < 10){
		echo $n;
		$n++;
		echo "<br>";
	}
	// số chia hết cho 3 từ 200-250
	echo "<br>";
	for($i =200; $i <= 250; $i++){
		if ($i % 3 == 0){
			echo  " $i chia hết cho 3<br>";
			echo "<br>";
		} 
	}
	?>
	<?php
	// vẽ bàn cờ
	$row = 8;
	$col = 8;
	for ($i = 1; $i <= $row; $i++) {
		for ($j = 1; $j < $col; $j++) { 
			if (($i + $j) % 2 == 0) {
				echo "<div class='white'></div>";
			}
			else {
				echo "<div class='black'></div>";
			}
		}
	echo "<br>";
	}

?>




