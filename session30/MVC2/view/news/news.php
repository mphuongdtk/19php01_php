<?php include 'common/header.php';?>
  <div class="content-wrapper">
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
    <section class="content">
<div class="row">
        <div class="col-md-10">
          <div class="box">
<h1 class="box-title">Products page here</h1>
<a href="index.php?action=add_news">Add news</a>

<div class="box-body">
<table class="table table-bordered">
  <tr>
    <th style="width: 10px">#</th>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Created</th>
    <th>Action</th>
  </tr>
 <?php 
 if ($newsList->num_rows > 0) {
  while($row = $newsList->fetch_assoc()) {
    $id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td>
        <?php echo $row['description']?>
      </td>
      <td><img src="uploads/<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
      <td>
        <?php echo $row['created']?>
      </td>
      <td><a href="index.php?action=edit_news&id=<?php echo $id?>">Edit</a> | <a href="index.php?action=delete_news&id=<?php echo $id?>">Delete</a></td>
    </tr>
  <?php 
    }
  } else {?>
  <tr>
    <td colspan="4">Khong co san pham nao</td>
  </tr>
  <?php }?>
</table>
</div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
    </section>
    <!-- /.content -->
  </div>

<?php include 'common/footer.php';?>