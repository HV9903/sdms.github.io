<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<title>Add Student Data</title>
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">STUDNT DATA MANAGEMENT SYSTEM</a>
		</div>
	</div>
	<div class="container" style="padding-top: 10px;">
		<h3>CREATE STUDENT DATA</h3><hr>
		<form method="post" name="create" action="<?php echo base_url().'index.php/user/create';?>">
		<div class="row">

			 <div class="col-md-6" >
			 	
			 	<div class="form-group">
			 		<br>
			 		<label>Name: </label>
			 		<input type="text" name="name" value="<?php echo set_value('name')?>" placeholder="Enter your Name" class="form-control">
			 		<?php echo form_error('name'); ?>
			 	</div>
			 	<div class="form-group">
			 		<br>
			 		<label>Semester: </label>
			 		<input type="text" name="semester" value="<?php echo set_value('semester')?>" placeholder="Enter your Semester" class="form-control">
			 		<?php echo form_error('semester'); ?>
			 	</div>
			 	<div class="form-group">
			 		<br>
			 		<label>Branch: </label>
			 		<input type="text" name="branch" value="<?php echo set_value('branch')?>"  placeholder="Enter your Branch" class="form-control">
			 		<?php echo form_error('branch'); ?>
			 	</div>
			 	<div class="form-group">
			 		<br>
			 		<label>Contract No: </label>
			 		<input type="Phone_Number" name="phone" value="<?php echo set_value('phone')?>"  placeholder="Enter your Contract No" class="form-control">
			 		<?php echo form_error('phone'); ?>
			 	</div>
			 	<div class="form-group">
			 		<button class="btn-primary btn"> ADD STUDENT</button>
			 	
			 		<a href="<?php echo base_url().'index.php/user/index'?>" class="btn btn-secondary">CANCEL</a>			 	
			 	</div>
			 </div>
		</div>
	</form>
	</div>

</body>
</html>