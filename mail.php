<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username, $password);
$sql = "CREATE DATABASE contact_info";
$result = mysqli_query($con , $sql);
if($result){
    echo "Database is created successfully";

}
else{
    echo "Database is not created, ";
}

// $text = $_POST['first_name'];
// $text1 = $_POST['last_name'];
// $text2 = $_POST['message'];
// $text3 = $_POST['email'];
// $text4 = $_POST['city'];
// $text5 = $_POST['number'];

// $sql = "INSERT INTO `contact_info` (`First_name`, `Last_name`, `Message`, `Email`, `City`, `Contact_number`) VALUES ('$text', '$text1', '$text2', '$text3', '$text4', '$text5');";
// // $rs = mysqli_query($conn, $sql);
// php
// if (mysqli_query($conn, $sql)) {
//     echo "Contact Records Inserted";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


// if ($rs) {
//     echo "Contact Records Inserted";
// }
?>
  