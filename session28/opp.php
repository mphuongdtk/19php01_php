<?php 
	class User {
		// public, protected, private
		public $name;
		private $email = 'sdc@gmail.com';
		function addUser() {
			echo "Add user";
		}
		public function editUser($old = 20) {
			echo $this->email.'----'.$old;
		}
	}
	$testClass = new User();
// 	$testClass->addUser();
// 	echo "<br>";
// 	echo $testClass->email;
// 	echo "<br>";
	$test = $testClass->editUser('23');
	echo $test;
// 	echo "<br>";<?php 
	class User {
		// public, protected, private
		public $name;
		private $email = 'sdc@gmail.com';
		function addUser() {
			echo "Add user";
		}
		public function editUser($old = 20) {
			echo $this->email.'----'.$old;
		}
	}
	$testClass = new User();
// 	$testClass->addUser();
// 	echo "<br>";
// 	echo $testClass->email;
// 	echo "<br>";
	$test = $testClass->editUser('23');
	echo $test;
// 	echo "<br>";
// 	$test2 = $testClass->editUser();
// 	echo $test2;
// ?>
// 	$test2 = $testClass->editUser();
// 	echo $test2;
// ?>