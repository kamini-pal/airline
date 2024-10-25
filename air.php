<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline</title>
    <style>
   .header{
    margin: auto;
/* text-align: center; */
width: 1350px;
height: 80px;
background: rgba(0,0,0,0.4);
   }
#home{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 360px;

}
#home::before{
    content: " ";
background: url('a2.jpg') no-repeat center center/cover;
position: absolute;
height: 85%;
width: 100%;
z-index: -1;
 /* opacity: 0.89;  */
top: 0;
left: 0;

}


.left{
        display: inline-block;
        position: absolute;
        left: 30px;
        top: 20px;
        
    }
    .left img{
        width: 70px;
        margin-left: 30px;
        
    }
    .left div{
        line-height: 20px;
        font-size: 20px;
        text-align: center;
    }
    .mid{
        display: block;
        width: 50%;
        margin: 20px auto;
    }
    .right{
        position: absolute;
        right: 250px;
        top: 25px;
        display: inline-block;
    }
    .right li{
        display: inline-block;
        font-size: 25px;
    }
    .right li a{
        color: white;
        text-decoration: none;
        padding: 34px 23px;
    }
    .right li a:hover{
        text-decoration: none;
        color: blue;
    }

    .navbar{
        display: inline-block;
    }
    .navbar ul{
        display: inline-flex;
list-style: none;
color: rgb(220, 220, 235);
align-items: flex-start;
text-align: start;
    }
    .navbar li{
        display: inline-block;
        font-size: 25px;
        
    }
    .navbar li a{
        color: white;
        text-decoration: none;
        padding: 34px 23px;
        color: white;
    text-decoration: none;
    /* text-transform: uppercase; */
    font-weight: bold;
    }
    .navbar li a:hover
    {
        
        text-decoration: none;
        color: red;
        
    }
    .iimm{
        border-radius:50%;
    }

    .home1{
    font-size: 2.5rem;
    padding: 10px;
}

#home h1{
    color: red;
    text-align: center;
}
#home p{
    color: white;
    text-align: center;
    font-size: 1.5rem;
}
.btn{
    padding: 6px 20px;
    border: 2px solid white;
    margin: 17px;
    font-size: 1.3rem;
    border-radius: 15px;
    background-color: rgb(0,0,0.4);
    color: white;
    cursor: pointer;
}
.btn:hover {
    background-color: white;
    color: black;
    font-size:1.2rem ;
}
 .btn a{
     text-decoration: none;
     color: white;
 }
 .btn a:hover{
     color: black;
     font-weight: bold;
 }
 .home2{
    font-size: 2.5rem;
    padding: 12px;
}

#clientsec{
    height: 260px;
    
    /* border: 2px solid black; */
}
#clientsec::before{
    content: " ";
    position: absolute;
    width: 100%;
    height: 75%;
    z-index: -1;
    opacity: 0.8;
    background: url('a15.jpg') no-repeat center center/cover;
}

#services1{
    margin: 34px;
    display: flex;
    
}
#services1 .box{
    border:  5px solid red;
    padding: 34px;
    margin: 3px 6px;
    border-radius: 15px;
    background-color: lightblue;

}
#services1 .box img{
    height: 150px;
    margin: auto;
    display: block;
}
#services1 .box p{
    font-family: cursive;
}
.home2{ text-align: center;
font-family: 'Courier New', Courier, monospace}
.home1{ text-align: center;
font-family: cursive;}

.para{
    display: flex;

}
.inner{
    width: 1000px;
    height: 200px;
    line-height: 200px;
    font-size: 4em;
    font-family: sans-serif;
    font-weight: 800;
    white-space: nowrap;
    overflow: hidden;
    box-shadow: 4px 6px 8px rgba(0,0,0,0.5);

}
.inner:first-child{
    background: indianred;
    color: #f1f1f1;
    transform-origin: right;
    transform: perspective(100px)rotateY(-15deg);
}

.inner:last-child{
    background: lightcoral;
    color: #ff0;
    transform-origin: left;
    transform: perspective(100px)rotateY(15deg);
}
.inner span{
    position: absolute;
    animation: marquee 5s linear infinite;
}
.inner:first-child{
    animation-delay: 2.5s;
    left: -100%;
}
@keyframes marquee{
    from{
        left: 100%;
    }
    to{
        left: -100%;
    }
}

footer{
     background: black;
     color: white;
     padding: 9px 20px;
     
 }

        </style>
</head>
<body>
<body>
    <header class="header">
        <!-- code of logo -->
        <div class="left">
            <img src="a3.jpg" alt="" class="iimm">
            <div style="color: red;">Airline.com</div>
        </div>
        <!-- code of navigation bar -->
         <div class="mid">
             <ul class="navbar">
                 <li><a href="#" class="active">Home</a></li>
                 <li><a href="#">About Us</a></li>
                 <li><a href="http://localhost/airline/cont.php">Contact us</a></li>
                
             </ul> 
            </div>
            <!-- code of button -->
            <div class="right">
                <ul>
                    <li><a href="http://localhost/airline/sign.php">Sign-up</a></li>
                    <li><a href="http://localhost/airline/login.php">Log-in</a></li>
                
            </div>
    </header> 
    <section id="home">
        

       <h1 class="home1">The Sky is Waiting For You</h1>
        <p><b>Modren portal for </b> Online !!!&nbsp;Booking of the 
             Air Tickets......</abbr></p>
        <p>Planning Trip To Anywhere in the World !</p>
        <button class="btn"><a href="http://localhost/airline/flight.php">Flight Book</a></button>
    

    </section>
 <br><br><br><br><br>
 
 <section id="clientsec">
       <h1 class="home1">Wecome To Flight</h1><br><br>
       <div class="para">
                   <div class="inner">
       <span>Welcome my Airline Reservation</span>
       </div>
       <div class="inner">
           <span>Welcome my Airline Reservation</span>
           </div> 
           </div>
   </section><br><br><br><br><br><br><br><br><br><br>

    <br><br>
   <section class="flight">
       <h1 class="home1 ">CHOOSE FLIGHT</h1>
       <div id="services1">
           
        <div class="box">
            <img src="a1.jpg" alt="">
            <h2 class="home2"> Mumbai </h2>
        </div>
        <div class="box">
            <img src="a8.jpg" alt="">
            <h2 class="home2"> New Delhi </h2>
        </div>
        <div class="box">
            <img src="a9.jpg" alt="">
            <h2 class="home2"> Bengaluru </h2>
        </div><br>
        <div class="box">
            <img src="a5.jpg" alt="">
            <h2 class="home2"> Jaipur </h2>
        </div>
        
    </div>

   </section>
   
   <section class="flight">
    
       <div id="services1">
           
        
        <div class="box">
            <img src="a7.jpg" alt="">
            <h2 class="home2"> Haderabad </h2>
        </div>
        <div class="box">
            <img src="a14.jpg" alt="">
            <h2 class="home2"> Chennai </h2>
        </div>
        <div class="box">
            <img src="a11.jpg" alt="">
            <h2 class="home2"> Kokata </h2>
        </div>
        <div class="box">
            <img src="a10.jpg" alt="">
            <h2 class="home2">Pune  </h2>
        </div>
        
    </div>

   </section>

   <footer>
       <div style="text-align: center;">
        <br>        
        copyright @ 2020 &copy; TraveloPro All rights reserved!
       </div>
   </footer>
</body>
</html>