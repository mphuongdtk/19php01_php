    
<link rel="stylesheet" type="text/css" href="triangle.css">
<?php 
	$height = 10;
	for ($i = 1; $i <= $height; $i++) {
		for ($j = 1; $j	<= $height; $j++) {
			if ($j <= $i) echo "<div class='tamgiacvuong'>*</div>";
		}
	echo "<br>";
	}
echo "<br>";
?>