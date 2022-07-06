<?php include 'handle.php';
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
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div>
    <a href="welcome.php"><button id="button-17" style="background-color: #044ec8;color: white;
   width: 200px;  
   height: 40px;  
   border: none;  
   border-radius: 17px;  
   padding-left: 7px;  
   color: white; margin-top: 40px; margin-left: 30px;" role="button">HOME</button>
</a>
    </div>
    <section class="container">
        <div class="container form-login">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="container-admin">
                    <h1>Fill the form below</h1>
                </div>
                <div class="container-inputs">
                    <label class="labels">Drag Name</label>
                    <br>
                    <input type="text" name="first_name" value="" placeholder="Drug Name" class="inputs"><br>
                    <label class="labels">Brand</label>
                    <br>
                    <input type="text" name="last_name" value="" placeholder="Brand" class="inputs"><br>
                    <label class="labels">Quantity Of Product</label>
                    <input type="int" name="sector" value="" placeholder="Quantity" class="inputs"><br>                    
                    <label class="labels">Set Expired Date</label>
                    <br>
                    <input type="date" name="id" value="" placeholder ="Expiry Date" class="inputs"><br>
                    <br>
                    <div>
                        <button type="submit" name="save" class="sub">SUBMIT</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
</body>

</html>