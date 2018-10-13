<?php include '../includes/functions.php'?>

<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM users WHERE id = :id";

$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);
$form = $query->fetch();
echo $form['id'];
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    // checking empty fields
    if (empty($username) || empty($email) || empty($user_type)) {

        if (empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }

        if (empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }

        if (empty($user_type)) {
            echo "<font color='red'>user_type field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $query = $pdo->prepare("UPDATE users SET username='$username',email='$email',user_type='$user_type' WHERE id=$id");
        $query->execute();
        $_SESSION['success'] = "User successfully updated!!";
        header("Location: home.php");
    }
}
?>

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
					<h2>Admin - edit user</h2>
				</div>
				<form method="POST">
					<div class="row justify-content-md-center">
					<?php echo display_error(); ?>
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control" type="text" id="username" name="username" value="<?php echo $form['username']; ?>">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control" type="email" id="email" name="email" value="<?php echo $form['email']; ?>">
							</div>
							<div class="form-group">
								<label for="user_type">User type</label>
								<select class="form-control" id="user_type" name="user_type" id="user_type">
									<option value=""></option>
									<option value="admin" <?php if ($form['user_type'] == "admin") {
    echo 'selected="selected"';
}
?>>Admin</option>
									<option value="user"  <?php if ($form['user_type'] == "user") {
    echo 'selected="selected"';
}
?>>User</option>
								</select>
							</div>
								<div class="form-group">
								<label for="password">Old Password</label>
								<input class="form-control" id="password" type="password" name="password" value="<?php echo $form['password']; ?>">
							</div>
							<div class="form-group">
								<labell for="password">Password</label>
								<input class="form-control" id="password"  type="password" name="password">
							</div>
							<div class="form-group">
								<label for="password">Confirm password</label>
								<input class="form-control" id="password" type="password" name="password">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success" name="update">Update user</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</body>

		</html>