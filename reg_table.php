<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>

<style>
    body{
      width: 100%;
      height: auto;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
      table {
        /* width: 100%; */
     
        border-collapse: collapse;
        /* width: 100%; */
      }
      th, td {
        font-size: 15px;
        width: 100%;
        text-align: left;
        padding: 8px;
        border: none;
        border: 2px solid black;
    
        /* background-color: blue; */
      }
      th{
        width: 100%;
        /* height: 30px;
        width: 50%; */
        font-size: 15px;
        border: none;
        padding: 20px;
        text-decoration: bold;
        text-transform: uppercase;
        margin-right: 20%;
        background-color: rgb(237, 112, 216);

      }
    th:hover{
      background-color: rgb(91, 231, 231);
    }
      .container{
   
        /* border-radius:10px; */
        width: 75%;
        margin-top: 2%;
        justify-content: center;
            display: flex;
            align-items: center;
            background-color: white;
            /* width: 80%;
            height: 70px; */
          
         
      }
      .view{
        background-color: rgb(115, 137, 234);
            justify-content: center;
            display: flex;
            align-items: center;
            width: 98%;
            height: auto;
      }
      .main{
        justify-content: center;
            display: flex;
            align-items: center;
            background-color: rgb(232, 105, 217);
            width: 70%;
            height: 60px;
      }
      .center{
        justify-content: center;
            display: flex;
            align-items: center;
            background-color: rgb(65, 214, 227);
            width: 55%;
            height: 60px;
      }
      table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<div class="view">

<div class="main">
  <div class="center">



<marquee behavior="" direction=""><h1>View Report</h1></marquee>
</div>
</div>


</div>

<div style="overflow-x:auto;">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Roll Number</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Mother's Name</th>
                <th scope="col">Parent Phone Number</th>
                <th scope="col">Parent Email</th>
                <th scope="col">State</th>
                <th scope="col">Pin Code</th>
                <th scope="col">Course</th>
                <th colspan="2">Action</th>
            </tr>



            <?php

          include 'dbconnect.php';
          $viewData ="SELECT * FROM `student_reg`";
          $viewQuery = mysqli_query($conn,$viewData);
          while ($viewResult = mysqli_fetch_array($viewQuery)) {
             ?>
            <tr>
                <td> <?php echo $viewResult['id']?> </td>
                <td> <?php echo $viewResult['sname']?> </td>
                <td> <?php echo $viewResult['lname'] ?></td>
                <td> <?php echo $viewResult['roll_no'] ?></td>
                <td><?php echo $viewResult['dob']?></td>
                <td><?php echo $viewResult['email'] ?></td>
                <td><?php  echo $viewResult ['phone']?></td>
                <td><?php  echo $viewResult['address']?></td>
                <td><?php  echo $viewResult ['fname']?></td>
                <td><?php echo $viewResult ['mname'] ?></td>
                <td> <?php echo $viewResult['pphone'] ?></td>
                <td> <?php echo $viewResult['pemail'] ?></td>
                <td> <?php echo $viewResult['state'] ?></td>
                <td> <?php echo $viewResult['pin'] ?></td>
                <td> <?php echo $viewResult['course'] ?></td>
                <td><a href="update.php?roll_no=<?php echo $viewResult['roll_no']; ?>"
                        class=' edit btn btn-sm btn-primary'>Edit</a></td>
                <td><a href="delete.php?roll_no=<?php echo $viewResult['roll_no']; ?>"
                        class=' edit btn btn-sm btn-primary'>Delete</a></td>


            </tr>
            <?php


          }
          
          

          ?>

        </thead>
    </table>

</div>

</body>

</html>