<?php
include '../includes/functions.php';
include '../includes/config.php';

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <script src="crud.js"></script>
</head>

<body>
<div class="container">
    <div class="header w-75">
        <h2>Admin - Home Page</h2>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
            </h3>
        </div>
        <?php endif?>
        <!-- logged in user information -->
        <div class="profile_info">
            <img src="../images/admin_profile.png">
            <div>
                <?php if (isset($_SESSION['user'])): ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>

                <small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
						&nbsp; <a href="create_user.php"> + add user</a>
					</small>

                <?php endif?>
            </div>
        </div>
        <div class="row">
        <div class="col-md-3">
            <a href="/Projekti/index.php">
            <input type="button" class="btn btn-default w-75" value="Home Page">
            </a>
        </div>
        <div class="col-md-3">
            <input type="button" onclick="toggleAppearance()" class="btn btn-default w-75" value="Show Users" id="data-button">
        </div>
        <div class="col-md-3">
            <a href="../post/index.php">
                <input type="button" value="Posts" class="btn btn-default w-75" >
            </a>
        </div>
        <div class="col-md-3">
            <a href="../services/index.php">
                <input type="button" value="Services" class="btn btn-default w-75" >
            </a>
        </div>

        </div>
        <table class="table table-striped mt-5" id="data" width='80%' border=0 style="visibility: hidden;">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php
//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
while ($res = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $res['username'] . "</td>";
    echo "<td>" . $res['email'] . "</td>";
    echo "<td>" . $res['user_type'] . "</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
?>
         </tbody>
        </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>
