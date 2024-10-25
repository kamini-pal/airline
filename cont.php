<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact here</title>

    <style>

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

#con::before{
    content: " ";
background: url('a8.jpg') no-repeat center center/cover;
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
    
footer{
     background: black;
     color: white;
     padding: 9px 20px;
     
 }
    </style>

</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $ct = $_POST['country'];
    $sub = $_POST['subject'];

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
        
    
    $sql= "INSERT INTO `contact` (`First-name`, `Last-name`, `Country`, `Subject`) VALUES 
    ('$fn', '$ln', '$ct', '$sub')";
    
         $ruslt = mysqli_query($conn, $sql);
       if($ruslt){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> your Information is saved successfully .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
}
else{
    
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>your Information is not saved  .
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}
}
?>

<body>
    
<div class="container">
  <form action="cont.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    
    <label for="lname" > Country</label>
    <input type="text" id="country" name="country" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
<button class="btn"><a href="http://localhost/airline/air.php"> Home</a></button>
<footer>
       <div style="text-align: center;">
        <br>        
        copyright @ 2020 &copy; TraveloPro All rights reserved!
       </div>
   </footer>
</body>
</html>