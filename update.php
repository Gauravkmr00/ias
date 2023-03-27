
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
        background-color: rgb(218, 136, 192);
      
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
        background-color: lightblue;
        /* background-image: linear-gradient(to bottom, #8d0fe8, #a214ea, #b61aeb, #c822ed, #d92bee); */
      /* background-color: rgb(213, 65, 232); */
    }


    input[type="text"],input[type="email"],input[type="date"],input[type="password"]{
    padding: 5px;
    border-radius: 10px;
    width: 470px;
    border-color: rgb(208, 154, 154);
    color: rgb(37, 37, 37);
    border: none;
    /* color: white; */
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

</style>

<body>
<?php
include 'dbconnect.php';
$getRoll = $_GET['roll_no'];
$getData = "SELECT * FROM `student_reg` WHERE roll_no = $getRoll";
$getQuery = mysqli_query($conn,$getData);
$row = mysqli_fetch_array($getQuery);
//$name = $row['sname'];
// echo $name;
?>

    <div class="contact">
      

        <form action="" method="post" enctype="multipart/form-data">
            <h3>STUDENT REGISTRATION FORM</h3>
            <label for="">Enter Roll Number</label><br>
            <input type="text" name="update_roll" value="<?php echo $getRoll ?>" readonly><br>
            <label for="">First Name</label><br>
            <input type="text" name="sname" required placeholder="Enter First Name" value="<?php echo $row['sname']; ?>"><br>
            <label for="">Last Name</label><br>
            <input type="text" name="lname" required value="<?php echo $row['lname']; ?>"><br>


         

            <label for="">Enter Date of Birth:</label><br>
            <input type="date" name="dob" required value="<?php echo $row['dob']; ?>"><br>

            <label for="">Email Address:</label><br>
            <input type="email" name="email" required value="<?php echo $row['email']; ?>"><br>

             <label for="">Student Phone Number:</label><br>
            <input type="text" name="phone" required value="<?php echo $row['phone']; ?>"><br>
            

            <label for="">Address:</label><br>
            <input type="text" name="address" required value="<?php echo $row['address']; ?>"><br>


            <label for="">Father Name:</label><br>
            <input type="text" name="fname" required value="<?php echo $row['fname']; ?>"><br>

            <label for="">Mother Name:</label><br>
            <input type="text" name="mname" required value="<?php echo $row['mname']; ?>"><br>

            <label for="">Parent Phone Number:</label><br>
            <input type="text" name="pphone" required value="<?php echo $row['pphone']; ?>"><br>

            <label for="">Parent Email Address:</label><br>
            <input type="email" name="pemail" required value="<?php echo $row['pemail']; ?>"><br>


            <label for="">State:</label><br>
            <input type="text" name="state" required value="<?php echo $row['state']; ?>"><br>

            <label for="">Pin Code:</label><br>
            <input type="text" name="pin" required value="<?php echo $row['pin']; ?>"><br>

            <label for="cars">Choose Courses:</label><br>
            <select name="course" value="<?php echo $row['course']; ?>">
              <option value="bca">BCA</option>
              <option value="bba">BBA</option>
              <option value="btech">B.Tech</option>
              <option value="bcom">B.COM</option>
              <option value="other">Other</option>
            </select><br>
            
            <button type="submit" name="update">Update</button><br><br>

            
        </form>
    </div>

    <!-- <div class="image">

        <img src="https://images.pexels.com/photos/245032/pexels-photo-245032.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
    </div> -->
</body>

</html>
<?php
if(isset($_POST['update'])){
$updateRoll= $_POST['update_roll'];
$student_Fname= $_POST['sname'];
$student_Lname = $_POST['lname'];
$update_dob = $_POST['dob'];
$update_email = $_POST['email'];
$update_phone = $_POST['phone'];
$update_address = $_POST['address'];
$update_fname = $_POST['fname'];
$update_mname = $_POST['mname'];
$parent_Phone = $_POST['pphone'];
$parent_Email= $_POST['pemail'];
$update_State = $_POST['state'];
$update_Pin = $_POST['pin'];
$update_Course = $_POST['course'];
$udate_data = "UPDATE `student_reg` SET `sname`='$student_Fname',`lname`='$student_Lname',`roll_no`='$updateRoll',`dob`='$update_dob',`email`='$update_email',`phone`='$update_phone',`address`='$update_address',`fname`='$update_fname',`mname`='$update_mname',`pphone`='$parent_Phone',`pemail`='$parent_Email',`state`='$update_State',`pin`='$update_Pin',`course`='$update_Course' WHERE roll_no=$updateRoll";
$update_Query = mysqli_query($conn,$udate_data);
if($update_Query==true){
    ?>
    <script>
        alert("Data has been update Sucessfully");
    </script>
    <?php
}else {
    ?>
    <script>
        alert("Update Error");
    </script>
    <?php  
}

}
?>

