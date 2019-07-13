<?php 
include 'oop.php';
class Customer extends User {
	public function testProtected() {
		echo $this->email;
	}
}
	$customer = new Customer();
	//echo $customer->email;
	echo $customer->testProtected();
?>