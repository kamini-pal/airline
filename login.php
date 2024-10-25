 <?php
   $alrt = false;
   $err = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   include 'database.php';
   $username = $_POST['username'];
   $password = $_POST['password'];
   
   $sql= "Select * from airline where username='$username' AND password='$password'";
   
        $ruslt = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($ruslt);
      if($num == 1){
              $alrt = true;
               session_start();
               $_SESSION['loggedin'] = true;
               $_SESSION['username'] = $password;
               header("location: flight.php");
}

else{
   $err = "Invalid Information!";
}
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* Bordered form */
form {
  /* border: 3px solid #f1f1f1; */
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  /* border: 1px solid #ccc; */
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
   
footer{
     background: black;
     color: white;
     padding: 9px 20px;
     
 }

 #log::before{
    content: " ";
background: url('a17.jpg') no-repeat center center/cover;
position: absolute;
height: 70%;
width: 100%;
z-index: -1;
 /* opacity: 0.89;  */
top: 0;
left: 0;

}  

.btn{
    padding: 6px 20px;
    border: 2px solid white;
    /* margin-top: 100px; */
    /* margin-left: 600px; */
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
    </style>
</head>
<body>


<?php
    if($alrt){
   echo '<div style="color:white;">
  <strong>Success!</strong>you are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    if($err){
        echo '<div style="color:white;">
       <strong>error!</strong>'. $err.'
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';
         }
       ?>

<section id="log">
<form action="login.php" method="post">
<!-- <hr> -->
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div><hr>
  <br><br><br><br><br><br>
  <div class="imgcontainer">
    <img src="a13.jpg" alt="a1" class="avatar">
  </div>
</form>
</section>
<button class="btn"><a href="http://localhost/airline/air.php"> Home</a></button>
<footer>
       <div style="text-align: center;">
        <br>        
        copyright @ 2020 &copy; TraveloPro All rights reserved!
       </div>
   </footer>
</body>
</html>