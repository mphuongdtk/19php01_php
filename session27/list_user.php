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
    <!-- Main content -->
    <section class="content">
	    <?php
	    	include 'connect.php';
	    	$sql = "SELECT * FROM users_19php";
	    	$result = mysqli_query($connect, $sql);
	    ?>
	     <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered text-center">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name
                  <input type="text" class="form-control">
                  </th>
                  <th>Email
                  <input type="text" class="form-control">
                  </th>
                  <th>Birthday
                  <input type="text" class="form-control">

                  </th>
                  <th>Phone
                  <input type="text" class="form-control">

                  </th>
                  <th>Gender
                  <input type="text" class="form-control">

                  </th>
                  <th>City
                  <input type="text" class="form-control">

                  </th>
                  <th>Avatar
                  <input type="text" class="form-control">

                  </th>
                  <th>Action
                  <button type="submit" class="btn btn-info" >Search</button>
                  </th>
                </tr>

               <?php 
               if ($result->num_rows > 0) {
               	while($row = $result->fetch_assoc()) {
               		$id = $row['id'];
               ?>
	                <tr>
	                  <td><?php echo $row['id']?></td>
	                  <td><?php echo $row['name']?></td>
	                  <td> <?php echo $row['email']?></td>
                    <td><?php echo $row['birthday']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><img src="uploads/avatar/<?php echo $row['avatar']?>" alt="avatar" class="avatar_user"></td>
	                  <td><a href="edit_user.php?id=<?php echo $id?>">Edit</a> | <a href="delete_user.php?id=<?php echo $id?>">Delete</a></td>
	                </tr>

                <?php 
                	}
                } else {?>
                <tr>
                	<td colspan="4">Khong co user nao</td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
    <!-- /.content -->
  <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i> 

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-md inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">6</a></li>
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#">10</a></li>

                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
  </div>

  <!-- /.content-wrapper -->

  <?php include 'common/footer.php';?>