<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TÍNH TỔNG</title>
	<style type="text/css">
		.error {
			color: red;
			font-size: 15px;
		} 
	</style> 
</head>
<body>
	 <?php 
		$errNum1 = $errNum2 = ' ';
		if (isset($_POST['number1']) && isset($_POST['number2'])) {
			if ($_POST['number1'] == '') {
				$errNum1 = 'Nhập số thứ 1!';
			} else {
				$errNum1 = ' ';
			}
			if ($_POST['number2'] == '') {
				$errNum2 = 'Nhập số thứ 2!';
			} else {
				$errNum2 = ' ';
			}
			echo $_POST['number1'];
			echo "<br>";
			echo $_POST['number2'];
			echo "<br>";
			echo $_POST['sum'] = $_POST['number1'] + $_POST['number2'];
			
			} 
	?>  
	<h1>Tính Tổng</h1>
	<form action="#" name="tinhtong" method="POST">
		<p>Số thứ 1:
			<input type="text" name="number1">
			<p class="error"><?php echo $errNum1; ?> </p>
		</p>
		<p>Số thứ 2:
			<input type="text" name="number2">
			<p class="error"><?php echo $errNum2 ;?></p>
		</p>
		<p>
			<input  type="submit"  name="sum" value="Tính tổng">
		</p>
	</form>

	</body>
	</html>