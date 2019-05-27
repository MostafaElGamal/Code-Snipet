<?php	include "db.php";?>
<?php	include "functions.php";?>
<?php
	if(isset($_POST['link'])){
		UpdateTable();
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
			<h1>Update</h1>
		<div class="col-sm-6">
				<form action="login_update.php" method="POST">
			 
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="user">
				</div> 
				 	
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="pass">
				</div>
				          
				<div class="form-group">
					<select name="user_id" id="">
					
						<?php  showAllData();?>
					</select>
				</div>
				
			
				<input class="btn btn-primary" type="submit" name="link" value='Update'>
	
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>