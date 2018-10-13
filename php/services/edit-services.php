<?php //include config
require_once "../includes/pdoconfig.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Edit Post</title>
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/main.css">
    <script src="services-js.js"></script>
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

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

        <?php include '../post/menu.php';?>
        <p><a href="./">Blog Admin Index</a></p>

        <h2>Edit Post</h2>


        <?php

//if form has been submitted process it
if (isset($_POST['submit'])) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
    $image = $_FILES["image"]["name"];
    if (empty($image)) {
        try {
            $stmt = $db->prepare('SELECT image FROM services WHERE id = :id');
            $stmt->execute(array(':id' => $_GET['id']));
            $row = $stmt->fetch();
            $image = $row['image'];

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    $_POST = array_map('stripslashes', $_POST);

    //collect form data
    extract($_POST);

    //very basic validation
    if ($id == '') {
        $error[] = 'This post is missing a valid id!.';
    }

    if ($title == '') {
        $error[] = 'Please enter the title.';
    }

    if ($description == '') {
        $error[] = 'Please enter the description.';
    }

    if (!isset($error)) {

        try {

            //insert into database
            $stmt = $db->prepare('UPDATE services SET title = :title, description = :description ,image = :image WHERE id = :id');
            $stmt->execute(array(
                ':title' => $title,
                ':description' => $description,
                ':id' => $id,
                ':image' => $image,
            ));

            //redirect to index page
            header('Location: index.php?action=updated');
            exit;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

}

?>


            <?php
//check for any errors
if (isset($error)) {
    foreach ($error as $error) {
        echo $error . '<br />';
    }
}

try {
    $stmt = $db->prepare('SELECT * FROM services WHERE id = :id');
    $stmt->execute(array(':id' => $_GET['id']));
    $row = $stmt->fetch();

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

                <form action='' method='post' enctype="multipart/form-data">
                    <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>

                    <p><label>Title</label><br />
                        <input type='text' name='title' value='<?php echo $row['title']; ?>'></p>

                    <p><label>Description</label><br />
                        <textarea name='description' cols='60' rows='10'>
       <?php echo $row['description']; ?></textarea></p>

                    <?php if ($row['image'] != ""):
    echo '<p><label>Image</label><br />';
    echo '<img id="profile-img-tag" width="180" height="170"    src="uploads/' . $row['image'] . '">';
    echo '</p>';
endif;
?>
                    <input type="file" id="profile-img" name="image" value=" <?php if (isset($error)) {echo $_POST['image'];}?>">

                    <p><input type='submit' name='submit' value='Update'></p>

                </form>

    </div>
<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });</script>
</body>

</html>
