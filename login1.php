<?php
include '../dbconnect.php';
if(isset($_POST['submit'])){ 
$Useremail = $_POST['email'];
// $password = $_POST['password'];
$data = "SELECT * FROM `student_reg`";
$loginQuery =mysqli_query($conn,$data);
$loginFetch = mysqli_fetch_array($loginQuery);

$tabEmail = $loginFetch['email'];

// $tablePass = $_POST['password'];
// $okPassword = password_verify($password,$okPassword);
if($Useremail==$tabEmail){
  // if($password==$okPassword){
  //   echo "Yes";
  // }else{
    echo " yes";
  }
  else{
    echo "No";
  }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="email" name="email" >
    <input type="password" name="password">
    <button name="submit">Login</button>
</form>
</body>
</html>