<?php
include 'dbconnect.php';
if(isset($_POST['login'])){
    $userId = $_POST['userid'];
    $password = $_POST['password'];

    $adminData = "SELECT * FROM `admin` ORDER BY sn DESC LIMIT 1";
    $adminQuery = mysqli_query($conn,$adminData);

    $dbArray = mysqli_fetch_array($adminQuery);

    $adminUser = $dbArray['userid'];
    $adminPass = $dbArray['password'];

if($userId==$adminUser && $password==$adminPass){
    header('location:IASS/IASS/../index.php');

    ?>
    <script>
        alert("Login Sucess");
    </script>
    <?php
}else{

    ?>
    <script>
        alert("Login Sucess");
    </script>
    <?php

}



}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- <link rel="stylesheet" href="../css/login.css"> -->


    <style>


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body{
    background-image: linear-gradient(to bottom, #dd5ae8, #ca5cea, #b75eea, #a360ea, #8d61e9, #805fdc, #735dcf, #685ac1, #6254a6, #5b4e8c, #534973, #4a435b);
    width: 100%;
    height: 100vh;
}
.login{
    height: 300px;
    width:300px;
    margin:20px;
    background-image: linear-gradient(to top, #dc73d8, #cf6ad4, #c161d0, #b358cd, #a450c9, #9f4cca, #9a47ca, #9543cb, #9a41d0, #9f3ed6, #a43bdb, #a937e0);
    border: none;
    border-radius: 10px;
    box-shadow: 3px 3px 3px rgb(186, 100, 223);
    padding: 5px 5px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    
}
/* .login:hover{
    transform: scale(1.05);
    transition: 0.5s;
} */
.image {
    width: 20%;
    /* margin-left:50%; */
    display: flex;
    position: relative;
    padding: 5px 5px;
    margin-left: 108px;
    margin-top: -80px;
    /* margin-top: 5px; */
   
}
.image img i{
    margin-top: 5px;
    width: 50%;
    height:100px;
    /* margin-top:50% */
    
}
h3 {
    margin-top:20%;
    text-align: center;
    text-transform: uppercase;
    font-size: 15px;
    color: white;
    /* text-decoration: underline; */
}

h3:hover{
    transform: scale(1.05);
    transition: 0.5s;
    color:blue;
}
input[type=text], input[type=password] {
display: inline-block;
width: 95%;
margin: 7px;
padding: 7px;
border: none;
border-radius: 3px;

}
button{

    height: 35px;
    width: 40%;
    color: white;
    font-size: 15px;
    margin-top: 10%;
    margin-left:30%;
    display: inline-block;
    background-color: rgb(82, 82, 230);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    font-style: bold;
    border-bottom-left-radius: 20px;
    /* box-shadow:0 0 5px cyan, 0 0 25px cyan,0 0 50px rgb(87, 12, 208); */
    /* width: 40%;
    height: 35px;
    
    padding: 7px;
    margin-left: 85px;
    border: none;
    color: rgb(170, 170, 175);
    border-radius: 5px;
    background-color: rgb(106, 100, 225);
    font-weight: bold;
    font-size: 16px; */
    
    
    

}
button:hover{

    /* box-shadow: 0 0 5px rgb(54, 36, 168), 0 0 25px cyan, 0 0 50px rgb(72, 211, 45) ,0 0 100px cyan,0 0 200px cyan; */
    transform: scale(1.05);
    transition: 0.5s;
    background-color: #9831d0;
    border-top-color: rgb(200, 51, 208);
    border-bottom-color: rgb(234, 157, 75);
    border-left-color: rgb(211, 61, 89);
    border-right-color: rgb(232, 17, 192);
    /* color: aqua; */
/* background-color: rgb(186, 70, 168);
cursor: pointer;
transition: 0.5s; */



}
@media only screen and (max-width:700px) {
   
   
   .login{
 height: 500px;
width: 500px; 
   }
}


/* .image1{
    margin: 0;
    width: 700px;
    height: 400px;
    margin-left: 60%;
    margin-top: 20%;
} */
    </style>
    
</head>
<body>
<form action="" method="post">
    <!-- <div class="login">
        <div class="image">
        <img src="image/user.png" alt="">
    </div> -->
    
    <!-- <div class="login">
        <div class="image">
        <img src="IASS/image/user.png" alt="">
    </div> -->

    <div class="login">
        <div class="image">
        <img src= ""  alt=""><i class="fa-solid fa-user-group"></i>
    </div>


        <h3>User Login</h3><br><br>

        <input type="text" name="userid" placeholder="Enter User ID" required>
        <input type="password" name="password" placeholder="Enter Password" required><br>

        <br>
        <button  name="login">Login</button>
        <br>

        <!-- <button name=""><a href="signup.php">Signup1</a></button> -->

        <!-- <a href="signup.php">Signup1</a> -->
        </form>
        
       

    </div>
    
    <!-- <div class="image">
       <img src="iass/image/user.png" alt="">
    </div> -->
</body> 
</html>