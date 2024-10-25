<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Flight</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
   box-sizing: border-box;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
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
background: url('a6.jpg') no-repeat center center/cover;
position: absolute;
height: 40%;
width: 100%;
z-index: -1;
top: 0;
left: 0;

}  
.btn{
    padding: 6px 20px;
    border: 2px solid white;
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
<section id="log">
<form action="delete.php" method="post">
<!-- <hr> -->
  <div class="container">
    <label for="uname"><b>E-mail Address</b></label>
    <input type="text" placeholder="Enter your e-mail address" name="mail" required>
    <input type="submit" class="cancelbtn" name="delete" value="Cancel Flight"/>
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

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'airline');
if(isset($_POST['delete']))
{
    $mail = $_POST['mail'];
    $query = "DELETE FROM `flight-book` WHERE `flight-book`.`E-mail` = '$mail'";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
      echo '<script type="text/javascript"> alert("flight is cancel") </script>';
    }
    else{
      echo '<script type="text/javascript"> alert("flight is not cancel") </script>';
    }
    
}

?>