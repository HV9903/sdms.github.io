<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<title>view Student Data</title>
</head>
<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#userTbl tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">STUDNT DATA MANAGEMENT SYSTEM</a>
		</div>
	</div>
	<div class="container" style="padding-top: 10px;">
		<div class="row">
			<div class="col-md-12">
				<?php 
				$success= $this->session->userdata('success');
				if($success !=""){
				
				?>
				<div class="alert alert-success"> <?php echo $success; ?></div>
			<?php 
			} 
			?>
			<?php 
				$failure= $this->session->userdata('failure');
				if($failure !=""){
				
				?>
				<div class="alert alert-danger"> <?php echo $failure; ?></div>
			<?php } ?>
			</div>
		</div>
	<div class="row">
		<div class="col-md-9">
		<h3>VIEW STUDENT DATA</h3><hr>
		</div>
		<div class="col-md-3">
		<a href="<?php echo base_url().'index.php/user/create' ?>" class="btn btn-primary"> Add Student</a>
		</div>
	</div>
	<div class="form-group pull-right">
    	<input type="text" class="search form-control" placeholder="What you looking for?">
	</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped" id="userTbl">
					<br>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>SEMESTER</th>
						<th>BRANCH</th>
						<th>CONTACT NO.</th>
						<th>UPDATE</th>
						<th>DELETE</th>
					</tr>
					<tbody>
					<?php if(!empty($res)){
						foreach($res as $x){
					 ?>
					<tr>
						<td><?php echo $x['id'];?></td>
						<td><?php echo $x['name'];?></td>
						<td><?php echo $x['semester'];?></td>
						<td><?php echo $x['branch'];?></td>
						<td><?php echo $x['phone'];?></td>

						<td>
							<a href="<?php echo base_url().'index.php/user/edit/'.$x['id']?>" class="btn btn-primary"> UPDATE</a>
						</td>
						<td>
							<a href="<?php echo base_url().'index.php/user/del/'.$x['id']?>" class="btn btn-danger"> DELETE</a>
						</td>
						
					</tr>
					<?php }
							} 
					else{
						?>
					</tbody>
					<tr>
					<td colspan="7">
					Record not found
					</td>
					</tr>
				<?php }
				?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
