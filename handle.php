<?php
// connect to the database
//                      host/server  user  password  DB name
$conn = mysqli_connect('localhost', 'root' , '',   'file-management');

//selecting from drugs table
$sql = "SELECT * FROM drugs";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
 $firstname = $_POST['first_name'];
 $lastname = $_POST['last_name']; 
 $id = $_POST['id'];
 $sector = $_POST['sector'];

$sql = "INSERT INTO drugs (Dname, Brand, Edate, Quant) VALUES ('$firstname' , '$lastname', '$id', '$sector')";

if (mysqli_query($conn, $sql)) {
    echo "Drug Registered successfully!";
}
else {
    echo "Failed to Register Drug.";
 }
}




if (isset($_POST['owner login'])) {
    header("location: adminregister1.php");
    }


if (isset($_POST['customerBtn'])) { // if save button on the form is clicked

$sql1 = "SELECT * FROM customer";
$result1 = mysqli_query($conn, $sql1);
$files = mysqli_fetch_all($result1, MYSQLI_ASSOC);

 $name = $_POST['name'];
 $age = $_POST['age']; 
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];
 $drug = $_POST['drug'];

 $sql1 = "INSERT INTO customer (name, age, gender, phone, drug) VALUES ('$name' , '$age', '$gender', '$phone', '$drug')";
 $sql3 = "UPDATE drugs SET Quant = Quant-1 WHERE Dname = '$drug'";
if (mysqli_query($conn, $sql1) and mysqli_query($conn, $sql3)) {
    echo "Customer Registered successfully!";
}
else {
    echo "Failed to Register Customer.";
 }
}

if (isset($_POST['del'])) {
    $sqll1 = "SELECT * FROM customer";
    $resultl1 = mysqli_query($conn, $sqll1);
    $filesl = mysqli_fetch_all($resultl1, MYSQLI_ASSOC);
    
    $ame = $_POST['deli'];

    $sqll1 = "DELETE FROM admin WHERE username = '$ame'";

    if (mysqli_query($conn, $sqll1)) {
    echo "Customer Removed successfully!";
}
else {
    echo "Failed to Remove Customer.";
 }
}

