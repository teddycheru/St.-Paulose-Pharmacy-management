<?php
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login1.php");
    exit;
}

$conn = mysqli_connect('localhost', 'root' , '',   'file-management');
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);    
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['searchCus'])) {
$searchName = $_POST['cusName'];
 
$sql = "SELECT * FROM customer WHERE name LIKE '%$searchName%'";          
$result = mysqli_query($conn, $sql);    
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!-- <?php include 'style1.css'?> -->
<!DOCTYPE html>
<html lang="en">
  <head> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

  
</head>

  <body>
    <section>
      <div class="container">
        
        <form class="dispClearBtns" action="search.php" method="post">
          <button class="displayBtn" type="submit" name="displayAllCus"><a href="displayCustomers.php" class="text">Display All Customers</a></button>
          <button class="clearBtn" type="submit" name="dispDrugs"><a href="search.php" class="text">Return Back</a></button>
        </form>
        
        <form class="searchId" action="displayCustomers.php" method="post">
          <h4 class="texts"> Search Customer By Name</h4>
          <input class="inputId" type="text" placeholder="Search" name="cusName" value="">
          <button class="idBtn" type="submit" name="searchCus">Search</button>
        </form>
        
    </div>
<table class="list">
<thead>
  <tr>
    <th>ID</th>   
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>Drug Bought</th>
    <!-- <th>Action</th> -->
  </tr>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>      
      <td><?php echo $file['name']; ?></td>
      <td><?php echo $file['age']; ?></td>
      <td><?php echo $file['gender']; ?></td>
      <td><?php echo $file['phone']; ?></td>
      <td><?php echo $file['drug']; ?></td>
      <!-- <td><a href="search.php?file_name=<?php echo $file['id'] ?>">Sell 1</a></td> -->
    </tr>
  <?php endforeach;?>
</tbody>
</table>
</section>
  </body>
</html>