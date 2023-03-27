
<?php
include 'dbconnect.php';


$randNo = rand(100000,500000);
// $randt = $randNo.$randNo;
$regTable = "SELECT * FROM `student_reg` ORDER BY roll_no DESC LIMIT 1";
$regQuery = mysqli_query($conn,$regTable);
$randArray = mysqli_fetch_array($regQuery);
$dbRoll = $randArray['roll_no'];

if(isset($_POST['submit'])){

    $sName = $_POST['sname'];
    $lName = $_POST['lname'];
    $rollNumber = $_POST['roll_no'];
    
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $fName = $_POST['fname'];
    $mName = $_POST['mname'];
    $pPhone = $_POST['pphone'];
    $pEmail = $_POST['pemail'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $course = $_POST['course'];
    $password = $_POST['password'];
$cPassword =$_POST['cpassword'];
    // $tableEmail = $_POST['email'];

    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
    $chashPassword = password_hash($cPassword,PASSWORD_BCRYPT);
    if($password==$cPassword){        
        $storeData = "SELECT * FROM `student_reg`";
        $storeQuery = mysqli_query($conn,$storeData);
        $array = mysqli_fetch_array($storeQuery);
        $user = $array['email'];

        if($user<=1){
            echo "User already Exit";
        }else {
            $saveData = "INSERT INTO `student_reg`(`sname`, `lname`, `roll_no`, `dob`, `email`, `phone`, `address`, `fname`, `mname`, `pphone`, `pemail`, `state`, `pin`, `course`, `password`) VALUES ('$sName','$lName','$rollNumber','$dob ',' $email','$phone','$address ',' $fName','$mName',' $pPhone','$pEmail','$state','$pin','$course',' $hashPassword')";
    $saveQuery = mysqli_query($conn,$saveData);
    if($saveQuery==true){
        echo "Data has been Insert";
    }else {
        echo "Data Insert Error!";
    }

        }
        
        
    }else {
      
        echo "Password does not Match";
    }
    

    }
    

        

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Reg</title>
    <!-- <link rel="stylesheet" href="css/style_reg.css"> -->
</head>


<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    body{
        width: 100%;
        height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
        /* background-image: linear-gradient(to top, #405cc1, #4659c9, #4f56d1, #5a51d7, #664bdd, #7749dd, #8647dd, #9544dd, #a647d9, #b54cd5, #c252d1, #ce58ce); */


    }
    .contact{
        /* margin-left: 20%;
        margin-right: 2%; */
        width: 650px;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        color: rgb(31, 29, 29);
        text-decoration: bold;
    border: none;
        border-radius: 20px;
        background-image: linear-gradient(to bottom, #8d0fe8, #a214ea, #b61aeb, #c822ed, #d92bee);
      /* background-color: rgb(213, 65, 232); */
    }


    input[type="text"],input[type="email"],input[type="date"],input[type="password"]{
    padding: 5px;
    border-radius: 10px;
    width: 470px;
    border-color: rgb(208, 154, 154);
    color: rgb(37, 37, 37);
    border: none;
}

select ,option{
    padding: 5px;
    border-radius: 10px;
    width: 470px;
    border-color: rgb(46, 45, 45);
    color: rgb(43, 42, 42);
    border: 1px 1px 1px solid black;
}
h3{
    text-align: center;

    text-decoration: underline;
    color: rgb(234, 91, 229);
}
h3:hover{
    color: rgb(98, 98, 241);
}

button{
    width: 50%;
    padding: 8px;
    margin-left: 30%;
    border: none;
    font-size: 15px;
    color: white;
    border-radius: 10px;
    background-color: rgb(166, 39, 216);
}
button:hover{
    background-color: rgb(52, 52, 236);
}

/* .img{
margin: 40%;
    width: 20%;
    height: 90px;

} */

</style>

<body>
   

    <!-- <div class="logo">
        <img src="../../../../../../image/user.png" alt="">
    </div> -->
    <div class="contact">
      

        <form action="" method="post" enctype="multipart/form-data">
            <h3>STUDENT REGISTRATION FORM</h3>
            <label for="">First Name</label><br>
            <input type="text" name="sname" required placeholder="Enter First Name"><br>
            <label for="">Last Name</label><br>
            <input type="text" name="lname" required><br>

            <label for="">Enter Roll Number</label><br>
            <input type="text" name="roll_no" value="<?php echo $randNo ?>" required ><br>

            <!-- <legend>Gender:</legend>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male" value="male" checked required> 
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="female">
          </fieldset><br> -->
<!--        
          <label for="">Gender :</label>
           
            <input type="radio" name="gender" value="Male"  required/>
            Male
            <input type="radio" name="gender" value="Female"  required/>
            Female
           <br>  -->
         

            <label for="">Enter Date of Birth:</label><br>
            <input type="date" name="dob" required><br>

            <label for="">Email Address:</label><br>
            <input type="email" name="email" required><br>

             <label for="">Student Phone Number:</label><br>
            <input type="text" name="phone" required><br>
            

            <label for="">Address:</label><br>
            <input type="text" name="address" required><br>


            <label for="">Father Name:</label><br>
            <input type="text" name="fname" required><br>

            <label for="">Mother Name:</label><br>
            <input type="text" name="mname" required><br>

            <label for="">Parent Phone Number:</label><br>
            <input type="text" name="pphone" required><br>

            <label for="">Parent Email Address:</label><br>
            <input type="email" name="pemail" required><br>


            <label for="">State:</label><br>
            <input type="text" name="state" required><br>

            <label for="">Pin Code:</label><br>
            <input type="text" name="pin" required><br>

            <label for="cars">Choose Courses:</label><br>
            <select name="course">
              <option value="bca">BCA</option>
              <option value="bba">BBA</option>
              <option value="btech">B.Tech</option>
              <option value="bcom">B.COM</option>
              <option value="other">Other</option>
            </select><br>

<!-- 
            <label for="cars">Gender:</label><br>
            <select name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              
            </select><br>
             -->

            <label for="">Create Password:</label><br>
            <input type="password" name="password" required><br>

            <label for="">Confirm Password:</label><br>
            <input type="password" name="cpassword" required><br><br>
            <button type="submit" name="submit">Submit</button><br><br>

            
        </form>
    </div>

    <!-- <div class="image">

        <img src="https://images.pexels.com/photos/245032/pexels-photo-245032.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
    </div> -->
</body>

</html>

