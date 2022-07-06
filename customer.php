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
    <section>
        
        <div>
            <form action="customer.php" method="post" enctype="multipart/form-data">
                <div>
                    <div>
                        <h1>Fill the form below</h1>
                    </div>
                    <label>Name</label>
                    <br>
                    <input type="text" name="name" value="" placeholder="Name" class="inputs"><br>
                    <label>Age</label>
                    <br>
                    <input type="int" name="age" value="" placeholder="Age" class="inputs"><br>
                    
                    <label class="gen">Gender</label>
                    
                    <select name="gender" class="gens">
                        <option class="op" value="male">Male</option>
                        <option class="op" value="female">Female</option><br>
                    </select>
                    <br>
                    <br>
                    <label>Phone</label>
                    <br>
                    <input type="int" name="phone" value="" placeholder ="Phone Number"class="inputs"><br>
                    <label>Drug Number</label>
                    <br>
                    <input type="text" name="drug" value="" placeholder="Drug Bought"class="inputs"><br>
                     <br>                 
                </div>
                
                <div>
                    <button type="submit" name="customerBtn" class="sub">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>