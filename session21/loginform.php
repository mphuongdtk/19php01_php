<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="loginform.css">
</head>
<body>
	<?php 
		$errorName = $errorMail = $errorSdt = $errorSex = $errorRess= $errorDate="";
		$fullname=$emailprivate=$phone=$date=$birthplace="";
		if (isset($_POST["register"])) {
			$fullname = $_POST["ten"];
			$emailprivate = $_POST["email"];
			$phone = $_POST["sdt"];
			$date = $_POST["ngaysinh"];
			$birthplace = $_POST["quequan"];
			
			
			if ($_POST["ten"] == "") {
				$errorName = "Nhập tên của bạn!";
			} else {
				$errorName = "";
			}
			if ($_POST["email"] == "") {
				$errorMail = "Nhập email của bạn!";
			} else {
				$errorMail = "";
			}
			if ($_POST["sdt"] == "") {
				$errorSdt = "Nhập số điện thoại của bạn!";
			} else {
				$errorSdt = "";
			}
			if (!isset($_POST["gioitinh"] )){
				$errorSex = "Chọn giới tính của bạn!";
			} else {
				$errorSex = "";
			}
			if ($_POST["quequan"] == "") {
				$errorRess = "Chọn quê quán của bạn!";
			} else {
				$errorRess = "";
			}
			if($_POST["ngaysinh"]== ""){
				$errorDate = "Chọn ngày sinh của bạn!";
			} else{
				$errorDate="";
			}
			echo $_POST["ten"];
			echo "<br>";
			echo $_POST["email"];
			echo "<br>";
			echo $_POST["sdt"];
			echo "<br>";
			if (isset($_POST["gioitinh"])) {
				echo $_POST["gioitinh"];
			}
			

			echo "<br>";
			echo $_POST["quequan"];
			echo "<br>";
			echo $_POST["ngaysinh"];

		}
	?>
	<div class="container">
	<h1>Register form</h1>
	<form action="#" name="ReGisTer" method="POST">
		<div class="row">
			<span>Họ tên</span>
			<input type="text" name="ten" placeholder="Họ tên" value="<?php echo $fullname; ?>" >
			<p class="error"><?php echo $errorName; ?> </p>
		</div>
		<div class="row">
			<span>Email</span>
			<input type="text" name="email" placeholder="Email" value="<?php echo $emailprivate; ?>">
			<p class="error"><?php echo $errorMail;?></p>
		</div>
		<div class="row">
			<span>Số điện thoại</span>
			<input type="text" name="sdt" placeholder="Số điện thoại" value="<?php echo $phone; ?>">
			<p class="error"><?php echo $errorSdt;?></p>
		</div>
		<div class="row">
			<span>Giới tính</span>
			 <input type="radio" name="gioitinh" value="Nữ" 
			 <?php 
					if (isset($_POST['gioitinh'])) { 
						if ($_POST['gioitinh'] == 'Nữ') echo"checked";
					}
				?>
			 >Nữ

			<input type="radio" name="gioitinh" value="Nam"
			<?php 
					if (isset($_POST['gioitinh'])) { 
						if ($_POST['gioitinh'] == 'Nam') echo"checked";
					}
				?>
			>Nam
			<p class="error"><?php echo $errorSex; ?></p>
		</div>
		<div class="row">
			<span>Quê quán</span>
			<select  name="quequan" value="<?php echo $birthplace; ?>">
					
					<option>Đà Nẵng</option>
					<option>Hà Nội</option>
					<option>Hồ Chí Minh</option>
					<option>Huế</option>
					<option>Hội An</option>
					<option selected>Quê quán</option>
				
			<p class="error"><?php echo $errorRess; ?></p>
			</select>
		</div>
		<div class="row">
			<span>Ngày sinh</span>
			<input type="date" name="ngaysinh" value="<?php echo $date; ?>">
			<p class="error"><?php echo $errorDate; ?></p>
		</div>
		<div class="row">
			<input  type="submit"   name="register" value="Đăng nhập">
		</div>
	</form>
</div>
</body>
</html>