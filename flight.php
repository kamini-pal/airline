

<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n1 = $_POST['name'];
    $email = $_POST['name1'];
    $id = $_POST['name2'];
    $ftn = $_POST['name3'];
    $add = $_POST['address'];
    $p1 = $_POST['phone'];
    $pin = $_POST['pin'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "airline"; 
    
    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("sorry! we faild to connect<br>");
    }
    else{
        
    
    $sql= "INSERT INTO `flight-book` (`Name`, `E-mail`, `flight-id`, `flight-name`, `Address`, `phone-no`, `pin`) VALUES
     ('$n1', '$email', '$id', '$ftn', '$add', '$p1', '$pin')";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> your reservation is done successfully .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
}
else{
    
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>your reservation is not done  .
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation here  <?php $_SESSION['username']?></title>
    <style>

.contact{
            width: 80%;
            min-height: 400px;
            margin-bottom: 50px;
            
        }
        .contact h1{
            color: blue;
            text-align: center;
            padding: 50px;
            margin-top: -15px;
            
        }
        .contact-img{
            width: 40%;
            float: left;
        }
        .contact-img img{
            width: 100%;
            margin: 0px auto;
            margin-top: 90px;
            margin-left: 180px;
            
        }
        .contact-form{
            float: right;
            padding-bottom: 20px;
            width: 40%;
            /* border: 1px solid black; */
    background: radial-gradient(blue, transparent);
        }
        .contact-form input{
            text-align: center;
     font-size: 1.5rem;
     font-family: cursive;
     border-top: none;
     padding-bottom: 10px;
     width: 80%;
     justify-content: center;
       }
       .contact-form textarea{
        width: 78%;
     padding: 0.5rem;
     border-radius: 15px;
     text-align: center;
     font-family: cursive;
     font-size: 1.5rem;
       }
      .contact-form .submit{
           width: 170px;
           border-radius: 10px;
           margin-left: 100px;
       }
       /* .btn{

           background-color: blue;
           color: black;
           margin-left: 200px;
           width: 90px;
           font-size: 1.8rem;
        }
        .btn a{
            color: red;
    text-decoration:  none;
    
}

.welcome{
    font-size: 1.8rem;
    width: 300px;
    margin-left: 150px;
    
    
} */

.btn{
    padding: 6px 20px;
    border: 2px solid white;
    /* margin-top: 100px; */
    margin-left: 600px;
    font-size: 1.3rem;
    border-radius: 15px;
    background-color: rgb(0, 0, 0.4);
    cursor: pointer;
    
}
.btn a{
    color: white;
    text-decoration:  none;
}
.btn:hover{
    background-color: black;
    color: brown;
    font-size:1.2rem ;
}
         /* footer sections */
 footer{
     background: black;
     color: white;
     
 }
@media screen and (max-width: 678px;) {
    
            .contact-form input{
                
                font-size: 1.3rem;
            }
            .contact h1{
                font-size: 2rem;
                margin-top: -10px;
            }
            .contact-img img{
                width: 70%;
            margin: 0px auto;
            margin-top: 100px;
            margin-left: 100px;
            
            }

        .contact-form input,textarea{
            font-size: 1rem;
            
        }
            
        }

        .tasty-food{
            height: 300px;
            width: 100%;
        }
        footer{
     background: black;
     color: white;
     width:1500px;
     padding: 9px 20px;
     
 }
    </style>
</head>
<body>


<div class="container">
<div class="alert alert-success" role="alert">
  <p> <a href="logout.php" class="mb1"> Logout Here.</a></p>
</div>
<div class="contact">
        <h1 style="font-size: 2.8rem;">AIRLINE RESERVATION</h1>
        <hr style="color: rgb(0, 71, 0,0.64); width: 90%;">
        <hr style="color: black; width: 80%;">
        <hr style="color: red; width: 70%;">
        <div class="contact1"> 
            <div class="contact-img">
                <img src="a4.png" alt="flight">
    <button class="btn" style="margin-left:100px;"><a href="http://localhost/airline/delete.php"> Cancel Flight</a></button>
            </div>
            <div class="contact-form">
                <form action="flight.php" method="post">

                <br><br>
                    <input type="text" placeholder = "Enter your Name" name="name"><br>
                   <br><br>
                   <input type="text" placeholder = "Enter your E-mail " name="name1"><br>
                   <br><br>
                    <input type="text" placeholder = "Enter flight id" name="name2"><br>
                    <br><br>
                    <input type="text" placeholder="Enter flight Name" name="name3"><br>
                   <br><br>
                   
                    <input type="text" placeholder=" Enter your Address " name="address"><br><br>
                    <br><br>
                    <input type="text" placeholder = "Enter phone no" name="phone"><br>
                    <br><br>
                    <input type="text" placeholder = "Enter PIN number" name="pin"><br><br>
                    <input type="submit" value="sumbit " class="submit">
                </form>
            </div>
        </div>
        <!-- <div class="welcome"><h3>Flight !!!</h3></div>
        <button class="btn"><a href="http://localhost/airline/air.php"> Back</a></button>
    </div><br><br> -->
    <br><br>
    <img src="a18.png" class="tasty-food">
    <button class="btn"><a href="http://localhost/airline/air.php"> Home</a></button>
    <footer>
       <div style="text-align: center;">
        <br>        
        copyright @ 2020 &copy; TraveloPro All rights reserved!
       </div>
   </footer>
</body>
</html>