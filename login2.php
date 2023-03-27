<?php
session_start();
?>
<?php
include 'dbconnect.php';
if(isset($_POST['login'])){
    // echo "hello";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login_Data = "SELECT * FROM `student_reg` WHERE email = '$email'";
    $login_Query = mysqli_query($conn,$login_Data);
    $email_Query = mysqli_num_rows($login_Query);
    if($email_Query==true){
        $user_Password = mysqli_fetch_assoc($login_Query);
        $db_Password = $user_Password['password'];
        $_SESSION['user'] = $user_Password['sname'];
        $password_Decode = password_verify($password,$db_Password);
        if($password_Decode==true){
            echo "Login Success";
            header('location:student_dash.php');
        }else {
            echo "Login Error";

          
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>

<body>
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: linear-gradient(rgb(253, 132, 253),rgb(126, 126, 246));
}
.container {
    height: 300px;
    width: 350px;
    background-color:transparent;
    border-radius: 10px;
    box-shadow: 0px 2px 2px 2px rgb(112, 111, 111);
    position: relative;
    display: flex;
    padding: 10px 10px;
}
.container h1 {
    text-align: center;
    color: white;
    padding: 10px;
    
}
.container form {
    height: 250px;
    width: 300px;
    padding: 10px;
}
form input {
    padding: 5px;
    width: 80%;
    margin: 8px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    margin-left: 48px;
}
button {
    width: 150px;
    margin-left: 75px;
    margin-top: 20px;
    height: 40px;
    font-size: 16px;
    font-weight: bold;
    background-color: rgb(195, 17, 168);
    color: white;
    border-radius: 5px;
    border: none;
}
button:hover{
    background-color: rgb(103, 103, 244);
    cursor: pointer;
    transition: 0.4s;
}
a {
    font-size: 16px;
    color: white;
    text-decoration: none;
    
}
a:hover {
    font-size: 20px;
    transition: 0.4s;
    color: rgb(8, 8, 88);

}
    </style>
    <div class="container">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <h1>Login</h1>
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="password" name="password" placeholder="Enter Password">
            <Button name="login">Login</Button> 
        </form>
    </div>
</body>
</html>