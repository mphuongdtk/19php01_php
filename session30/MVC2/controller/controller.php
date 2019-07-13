<?php 
	include 'model/model.php';
	include 'libs/function.php';
	class Controller {
		public function handleRequest() {
			$model = new Model();
			$functionCommon = new FunctionCommon();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					// goi model get du lieu
					$home = $model->getHomePage();
					// goi view home
					include 'view/home/home.php';
					break;
				case 'products':
					// goi model xu ly du lieu
					$showProducts = $model->getProducts();
					$related = $model->getProductsRelated();
					// goi view news
					include 'view/products/products.php';
					break;
				case 'news':
					// goi model xu ly du lieu
					$newsList = $model->getNewsPage();
					// goi view products
					include 'view/news/news.php';
					break;
				case 'news_detail':
				// lay id cua san pham chi tiet
					$id = $_GET['id'];
					// goi model xu ly du lieu
					$newsDetail = $model->getNewsDetail($id);
					// goi view products
					include 'view/news/news_detail.php';
					break;
				case 'contact':
					// goi view contact
					include 'view/contact/contact.php';
					break;
				case 'delete_news':
				   // lay id cua san pham can xoa
					$id = $_GET['id'];
					// goi model thuc hien xoa san pham
					if ($model->deleteNews($id) === TRUE) {
						//header("Location: "index.php?action=products);
						$functionCommon->redirectPage('index.php?action=news');
					}
					break;
				case 'add_news':
					# code...
					// check xem da submit add news chua?
					if (isset($_POST['add_news_form'])) {
						$name = $_POST['name'];
						$description = $_POST['description'];
						// var_dump($_FILES['image']);exit();
						 if ($_FILES['image']['error'] == 0) {
            			$image = uniqid().'_'.$_FILES['image']['name'];
           				 move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
         				 }
						$birthday = date('Y-m-d h:i:s');
						// save vao database
						if ($model->addNews($name, $description, $image, $birthday) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
					}
				}
					// goi view hien thi trang add product
					include 'view/news/add_news.php';
					break;
					case 'edit_news':
					# code...
						$id = $_GET['id'];
						$editNews =$model->getNews($id);
						// edit
						if (isset($_POST['edit_news_form'])) {
							$name = $_POST['name'];
						  $description = $_POST['description'];
						   if ($_FILES['image']['error'] == 0) {
           					 $image = uniqid().'_'.$_FILES['image']['name'];
          					  move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
          }
						  $birthday = date('Y-m-d h:i:s');
						 // edit vao database
						if ($model->editNews($id,$name, $description, $image, $birthday) === TRUE) {
							$functionCommon->redirectPage('index.php?action=news');
						}
						}
						include 'view/news/edit_news.php';
						break;	
				
				
			}
		}
	}
?>