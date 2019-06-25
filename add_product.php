<?php include 'common/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <?php 
    include 'connect.php';
    include 'function/common.php';
    $errName = $errDes = $errPrice = $errImage = '';
    $name = $price = $description = '';
    $checkAdd = true;
    if (isset($_POST['add_product'])) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $created = date('Y-m-d h:i:s');
      $image = 'default.jpg';
      if ($name == '') {
        $errName = 'Please input product name';
        $checkAdd = false;
      }
      if ($description == '') {
        $errDes = 'Please input product description';
        $checkAdd = false;
      }
      if ($price == '') {
        $errPrice = 'Please input product price';
        $checkAdd = false;
      }
      if (checkExistNameProduct($name, $connect)) {
        $errName = 'Product name exist';
        $checkAdd = false;
      }
      if ($_FILES['image']['error'] == 0 && $_FILES['image']['size'] > 102400) {
        $errImage = 'Please select a photo less than 100kb';
        $checkAdd = false;
      }
      //
      if ($checkAdd) {
        // check and upoad image
        if ($_FILES['image']['error'] == 0) {
          $image = uniqid().'_'.$_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
        }
        // end image upload
        $sql = "INSERT INTO products(name, description, price, image, created) VALUES ('$name', '$description', $price, '$image', '$created')";
        if (mysqli_query($connect, $sql) === TRUE) {
          header("Location: list_product.php");
        } else {
          echo "Add product fail";
        }
      }
    }
    ?>
    <!-- Main content -->
    <section class="content">
	     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group <?php echo ($errName != '')?'has-error':'';?>">
                  <label for="exampleInputEmail1">Product name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name"  value="<?php echo $name;?>">
                  <span class="help-block"><?php echo ($errName != '')?$errName:'';?></span>
                </div>
                <div class="form-group <?php echo ($errDes != '')?'has-error':'';?>">
                  <label>Description</label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."><?php echo $description;?></textarea>
                  <span class="help-block"><?php echo ($errDes != '')?$errDes:'';?></span>
                </div>
                <div class="form-group <?php echo ($errPrice != '')?'has-error':'';?>">
                  <label for="price">Product price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price" value="<?php echo $price;?>">
                  <span class="help-block"><?php echo ($errPrice != '')?$errPrice:'';?></span>
                </div>
                <div class="form-group <?php echo ($errImage != '')?'has-error':'';?>">
                  <label for="image">Image</label>
                  <input type="file" name="image">
                  <span class="help-block"><?php echo ($errImage != '')?$errImage:'';?></span>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_product">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div> 
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>