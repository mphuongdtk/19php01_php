<?php 
	include 'config/connectdb.php';
	class Model extends ConnectDB {
		public function getProducts() {
			$news = 'Test news abc';
			return $news;
		}

		public function getProductsRelated() {
			$productsRelated = "Tin lien quan";
			return $productsRelated;
		}
		public function getHomePage(){
			$a = 5;
			$b = 7;
			return $a * $b;
		}
		public function getNewsPage() {
			$sql = "SELECT * FROM news";
			$newsList = mysqli_query($this->connect(), $sql);
			return $newsList;
		}
		public function getNewsDetail($id) {
			$newsDetail = 'Chi tiet san pham '.$id;
			return $newsDetail;
		}
		public function deleteNews($id) {
			$sql = "DELETE FROM news WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
		public function addNews($name, $description, $image, $birthday) {
			$sql = "INSERT INTO news(name, description, image, created) VALUES ('$name', '$description', '$image', '$birthday')";
			return mysqli_query($this->connect(), $sql);
		}
		public function getNews($id) {
			$sql = "SELECT * FROM news WHERE id = $id";
			$result = mysqli_query($this->connect(), $sql);
			return $result->fetch_assoc();
		}
		public function editNews($name, $description, $image, $birthday){
		$sql = "UPDATE news SET name='$name', description = '$description', image = '$image', created = '$birthday' WHERE id=$id ";
		return mysqli_query($this->connect(), $sql);
	}
	}
?>
