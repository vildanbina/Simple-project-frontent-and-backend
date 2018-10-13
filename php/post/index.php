<?php
//include config
require_once "../includes/pdoconfig.php";

//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if (isset($_GET['delpost'])) {

    $stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID');
    $stmt->execute(array(':postID' => $_GET['delpost']));

    header('Location: index.php?action=deleted');
    exit;
}

?>
	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Admin</title>
		<link rel="stylesheet" href="../style/normalize.css">
		<link rel="stylesheet" href="../style/main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

		<script language="JavaScript" type="text/javascript">
			function delpost(id, title) {
				if (confirm("Are you sure you want to delete '" + title + "'")) {
					window.location.href = 'index.php?delpost=' + id;
				}
			}
		</script>
	</head>

	<body>

		<div id="wrapper">

			<h1 style="display:inline;">About </h1>
			<?php include 'menu.php';?>
			<p >
				<a href='add-post.php'>Add Post</a>
			</p>

			<?php
//show message from add / edit page
if (isset($_GET['action'])) {
    echo '<h3>Post ' . $_GET['action'] . '.</h3> <a href="/Projekti/about.php">Preview</a>';
}
?>

				<table class="table table-hover" style="font-size:15px;">
				<thead>
					<tr>
						<th>Title</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
try {

    $stmt = $db->query('SELECT postID, postTitle FROM blog_posts ORDER BY postID DESC');
    while ($row = $stmt->fetch()) {

        echo '<tr>';
        echo '<td>' . $row['postTitle'] . '</td>';
        ?>

						<td  class="text-center">
							<a href="edit-post.php?id=
               <?php echo $row['postID']; ?>">Edit</a> |
							<a href="javascript:delpost('<?php
echo $row['postID']; ?>','<?php
echo $row['postTitle']; ?>')">Delete</a>
						</td>
						<?php
echo '</tr>';

    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
</tbody>
				</table>


		</div>

	</body>

	</html>

