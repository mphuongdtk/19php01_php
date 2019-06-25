<?php 
	// thong tin ket noi database
	$server = 'localhost'; //$server = '127.0.0.1'
	$username = 'root'; // username default
	$password = ''; // password default
	$database = '19php01_demo1'; // ket noi den database nay
	
	// thuc hien ket noi database
	$connect = mysqli_connect($server, $username, $password, $database);
	//utf8-connect
	
	// kiem tra ket noi database
	if ($connect === FALSE) {
		echo "Connect fail ".mysqli_connect_error();
	}
	// du lieu dung de chen vao users
	$name = 'phuong test123456'; // $name = $_POST['name'];
	$email = 'mphuongdtk@gmail.com';
	$phone = '1234567890';
	$avatar = 'ok.jpg';
	$city = 'Da Nang';
	$gender = 'female';
	// cau lenh insert du lieu
	$sql = "INSERT INTO users (name, email, phone, avatar, city, gender) VALUES ('$name', '$email', '$phone', 'avatar', '$city', '$gender')";
	// thuc thi cau lenh 
	if (mysqli_query($connect, $sql) === TRUE) {
		echo "Register success!";
	} else {
		echo "Register error";
	}
?>