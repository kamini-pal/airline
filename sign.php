

<?php
    $alrt = false;
    $err = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'database.php';
    $username = $_POST['username'];
    $el = $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['rpsw'];

    $existssql = "SELECT * FROM `airline` WHERE username = '$username'";
    $ruslt = mysqli_query($conn, $existssql);
    $numexists = mysqli_num_rows($ruslt);
    if($numexists >0){
        $err = "username Already Exists";
    }
       else{
                
    if(($password == $cpass)){
        $hash = password_hash($password , PASSWORD_DEFAULT);
    $sql= "INSERT INTO `airline` (`username`, `Email`, `password`, `Date`) VALUES
     ('$username', '$el', '$password', current_timestamp());";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
               $alrt = true;
       
}
}
else{
    $err = "password do not match! ";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in </title>
    <style>

* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  /* color:white; */
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
 color:red;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
#sign::before{
    content: " ";
background: url('a8.jpg') no-repeat center center/cover;
position: absolute;
height: 90%;
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
footer{
     background: black;
     color: white;
     padding: 9px 20px;
     
 }
 label{
     color:red;
 }
    </style>
</head>


<body>

<?php
    if($alrt){
   echo '<div style="color:white;">
  <strong>Success!</strong> Your account is created now!
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

<section id="sign">
<form action="sign.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p style="color:red;">Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Name" name="username" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpsw" required>

    <!-- <label> -->
      <!-- <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me -->
    <!-- </label> -->

    <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
      <button type="button" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>
</section>
<br><br>
<button class="btn"><a href="http://localhost/airline/air.php"> Home</a></button>
<footer>
       <div style="text-align: center;">
        <br>        
        copyright @ 2020 &copy; TraveloPro All rights reserved!
       </div>
   </footer>
</body>
</html>