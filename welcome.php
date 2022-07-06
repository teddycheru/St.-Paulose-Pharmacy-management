<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login1.php");
    
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="bg-gray-50">
  <header class="bg-gray-100 ">
    <h3 class="text-center text-3xl mt-0 mb-2 text-gray-700 pt-4">Welcome to St. Paul Pharmacy</h3>
    <hr class="mb-4">
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
         <!-- <form action="welcome.php" method="post">
          <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
            <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-blue-600 bg-white bg-clip-padding border border-solid border-blue-600 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name = "name"placeholder="Search drug" aria-label="Search" aria-describedby="button-addon3">
            <button class="btn inline-block px-6 py-2 bg-blue-500 border-2 border-blue-600 text-white font-medium text-xs leading-tight uppercase rounded hover:bg-blue-600 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" name = "search" type="button" id="button-addon3">Search</button>
          </form> -->
          </div>
        </div>
      </div>
  </header>

  <div class="ml-16 mr-16 mt-16 flex flex-row">
      <div class="flex-1 basis-1/4">
            <a href="index.php"><button class="bg-blue-500 mt-6 hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">Add Drugs</button></a><br><br>
            <a href="search.php"><button class="bg-blue-500 mt-6 hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">Expired Drugs</button></a><br><br>
            <a href="search.php"><button class="bg-blue-500 mt-6 hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">All Drugs</button></a><br><br>
            <a href="customer.php"><button class="bg-blue-500 mt-6 hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">Register Customer</button></a><br><br>
            <a href="reset-password.php"><button class="bg-blue-500 mt-6 hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">Change Password</button></a><br><br>
            <a href="logout.php"><button class="bg-blue-500 mt-6 hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">Log Out</button></a>
      </div>
      <div class="inline-block ml-16 font-mono">
    <h3 class="text-center text-sm mt-0 mb-2 text-gray-700 pt-0">The pharmacy management system, also known as the pharmacy information system, is a system that stores data and enables functionality that organizes and maintains the medication use process within pharmacies</h3>
      <img height = "400" width = "750" src="./ff.jpg" alt="" class="ml-16">
      <a href="documentation.html"><button class="bg-blue-500 mb-56  float-right hover:bg-blue-600 text-white font-bold py-2 w-40 rounded">Documentation</button></a><br><br>
      </div>

  </div>

</body>

</html>