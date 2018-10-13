<?php

require_once("../includes/pdoconfig.php");

if (isset($_POST['submit'])) {
// echo "";
// }else{
// $file=$_FILES['image']['tmp_name'];
// $image = $_FILES["image"] ["name"];
// $image_name= addslashes($_FILES['image']['name']);
// $size = $_FILES["image"] ["size"];
// $error = $_FILES["image"] ["error"];
// 
// if ($error > 0){
// die("Error uploading file! Code $error.");
// }else{
// 	if($size > 10000000) //conditions for the file
// 	{
// 	die("Format is not allowed or file size is too big!");
// 	}
// 	
// else
// 	{
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$image=$_FILES["image"]["name"];
$title =$_POST['title'];
$description=$_POST['description'];

//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//insert into database
//$sql = "'INSERT INTO services (title,description,image) VALUES ('$title', '$description', '$image')";
    $date = date("Y-m-d H:i:s");
    $stmt = $db->prepare('INSERT INTO services (title,description,image,date) VALUES (:title, :description,:image,:date)') ;
				$stmt->execute(array(
					':title' => $title,
					':description' => $description,
                    ':image' => $image,
                    ':date' => $date));

//$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";

				//redirect to index page
				header('Location: index.php?action=added');
				exit;
}
?>
