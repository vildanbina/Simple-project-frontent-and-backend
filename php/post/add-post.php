<?php //include config
require_once "../includes/pdoconfig.php";
//if not logged in redirect to login page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Add Post</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>
<div id="wrapper">

	<?php include 'menu.php';?>
	<p><a href="./">Blog Admin Index</a></p>

	<h2>Add Post</h2>

	<?php

//if form has been submitted process it
if (isset($_POST['submit'])) {

    $_POST = array_map('stripslashes', $_POST);

    //collect form data
    extract($_POST);

    //very basic validation
    if ($postTitle == '') {
        $error[] = 'Please enter the title.';
    }

    if ($postDescriotion == '') {
        $error[] = 'Please enter the description.';
    }
    if (!isset($error)) {

        try {

            //insert into database
            $stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDescriotion) VALUES (:postTitle, :postDescriotion)');
            $stmt->execute(array(
                ':postTitle' => $postTitle,
                ':postDescriotion' => $postDescriotion));

            //redirect to index page
            header('Location: index.php?action=added');
            exit;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

}

//check for any errors
if (isset($error)) {
    foreach ($error as $error) {
        echo '<p class="error">' . $error . '</p>';
    }
}
?>

	<form action='' method='post'>

		<p><label>Title</label><br />
		<input type='text' name='postTitle' value='<?php if (isset($error)) {echo $_POST['postTitle'];}?>'></p>

		<p><label>Description</label><br />
		<textarea name='postDescriotion' cols='60' rows='10'><?php if (isset($error)) {echo $_POST['postDescriotion'];}?></textarea></p>


		<p><input type='submit' name='submit' class="btn btn-default w-25" value='Submit'></p>

	</form>

</div>
