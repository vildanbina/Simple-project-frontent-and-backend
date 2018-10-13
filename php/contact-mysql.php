<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$text = $_POST["text"];
    $cars = $_POST["cars"];
    if(!empty($_POST['chk1'])){
$pets="";
foreach($_POST['chk1'] as $entry){
$pets .= $entry.",";
}
        }
    $gender = $_POST["gender"];
    
	$conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO contact (name, email,text,cars,hobi,gender) VALUES ('" . $name. "', '" .$email. "','" . $text. "','".$cars."','".$pets."','".$gender."')");
	$insert_id = mysqli_insert_id($conn);
	if(!empty($insert_id)) {
	$message = "Your contact information is saved successfully";
	}

}
?>