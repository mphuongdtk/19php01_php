<?php include 'common/header.php'; ?>
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
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add news</h3>
            </div>
             <form role="form" action="index.php?action=add_news" method="POST" enctype="multipart/form-data">
              <div class="box-body">
				<div class="form-group">
			
			<label>Title</label>
			<input type="text" name="name" class="form-control" id="name" placeholder="Enter Title">
			</div>
			<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" rows="3" placeholder="Enter..."></textarea>
			</div>
			<div class="form-group">
			<label for="image">Image</label>
     		<input type="file" name="image">
     		</div>
     		<div class="box-footer">
			<input type="submit" class="btn btn-primary" name="add_news_form" value="Add News">
			</div>
		</div>
</form>
</div>
</div>
</div>
</div>
</section>


  <?php include 'common/footer.php';?>