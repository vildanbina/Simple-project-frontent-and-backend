<?php //include config
require_once("../includes/pdoconfig.php");
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
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <?php include("../post/menu.php");?>
        <p><a href="./">Blog Admin Index</a></p>

        <h2>Add Post</h2>

        <?php
    include("upload.php");
	//if form has been submitted process it
	if(isset($_POST['submit'])){

//		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($title ==''){
			$error[] = 'Please enter the title.';
		}

		if($description ==''){
			$error[] = 'Please enter the description.';
		}


	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>

            <form action="" method='post' enctype="multipart/form-data">

                <p><label>Title</label><br />
                    <input type='text' name='title' value='<?php if(isset($error)){ echo $_POST[' title '];}?>'></p>

                <p><label>Description</label><br />
                    <textarea name='description' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['description'];}?></textarea></p>

                <p><label>Upload Image</label></p><br>
                <img src="#" width="200" height="200"  id="blah" alt=""><br>
                <input type="file" onchange="readURL(this);" id="profile-img"  name="image" value=" <?php if(isset($error)){ echo $_POST['image'];}?>">
                    <p><input type='submit' name='submit' value='Submit'></p>
            </form>
    </div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    } 
    </script>

    </body>
</html>
