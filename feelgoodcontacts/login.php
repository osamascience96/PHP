<?php include 'Connection.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php include 'header.php' ?>

<div class="container">
	<div class="row login_padding">
		<!-- Col01 Start -->
		<div class="col-md-5 col-lg-5 col-sm-5">
			<div class="login_sub_div">
				<p class="login_heading">Existing Customer</p>
				<form action="" method="post">
				  <div class="form-group field_text">
					<label for="username">Email</label>
					<input type="email" name="email" class="form-control login_fields" id="username" aria-describedby="emailHelp">
				  </div>
				  <div class="form-group field_text">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control login_fields" id="password">
				  </div>
				  <button type="submit" name="login_btn" class="btn btn-primary btn-lg btn-block login_btn">LOGIN</button>
				</form>	
			</div>
		</div>
		<!-- Col01 End -->
		
		<!-- Col02 Start -->
		<div class="col-md-7 col-lg-7 col-sm-7">
			<div class="register_sub_div">
				<p class="register_heading">NEW Customer</p>
				<form action="" method="post">
					<table class="login_table">
					<tr>
						<td class="login_td">
							<div class="form-group">
								<label for="username" class="login_label">First Name</label>
								<input type="text" name="first_name" class="form-control register_fields" id="username" aria-describedby="emailHelp" required>
							 </div>
						</td>
						<td class="login_td">
							<div class="form-group">
								<label for="username" class="login_label">Last Name</label>
								<input type="text" name="last_name" class="form-control register_fields" id="username" aria-describedby="emailHelp" required>
							 </div>
						</td>
					</tr>
						<tr>
						<td class="login_td">
							<div class="form-group">
								<label for="username" class="login_label">Email</label>
								<input type="email" name="email" class="form-control register_fields" id="username" aria-describedby="emailHelp" required>
							 </div>
						</td>
						<td class="login_td">
							<div class="form-group">
								<label for="password" class="login_label">Password</label>
								<input type="password" name="password" class="form-control register_fields" id="password" required>
							</div>
						</td>
					</tr>
					</table>
				
					
				  
				  <button type="submit" name="register" class="btn btn-primary btn-lg btn-block register_btn">Register</button>
				</form>	
			</div>
		</div>
		<!-- Col02 End -->
		
	</div>
	
	
	<div class="row">
		<!-- Col01 Start --
		<div class="col-md-5 col-lg-5 col-sm-5">
			<div class="login_sub_div">
				<p class="login_heading">Recover Password</p>
				<form>
				  <div class="form-group field_text">
					<label for="username">Email</label>
					<input type="email" class="form-control login_fields" id="username" aria-describedby="emailHelp">
				  </div>
				 
				  <button type="button" class="btn btn-primary btn-lg btn-block login_btn">LOGIN</button>
				</form>	
			</div>
		</div>
		<!-- Col01 End -->
		
		<!-- Col02 Start -->
		<div class="col-md-7 col-lg-7 col-sm-7">
			<br>
		</div>
		<!-- Col02 End -->
		
	</div>
</div>

<?php include 'footer.php' ?>