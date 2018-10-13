<?php include '../includes/functions.php'?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	    crossorigin="anonymous">

</head>

<body>
	<div class="container">
		<div class="header w-75">
			<h2>Admin - create user</h2>
		</div>

		<form method="post" action="create_user.php">
			<div class="row justify-content-md-center">
				<?php echo display_error(); ?>
				<div class="col-md-6">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" id="username" name="username" value="<?php echo $username; ?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="email" id="email" name="email" value="<?php echo $email; ?>">
					</div>
					<div class="form-group">
						<label for="user_type">User type</label>
						<select class="form-control" id="user_type" name="user_type" id="user_type">
							<option value=""></option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" id="password" type="password" name="password_1">
					</div>
					<div class="form-group">
						<label for="password">Confirm password</label>
						<input class="form-control" id="password" type="password" name="password_2">
					</div>
					<div class="form-group">
						<button type="submit" class="btn" name="register_btn"> + Create user</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>

</html>