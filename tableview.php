<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create View Post </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <!-- <div class="container">
 <table border="4px">
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Photo</th>
          <th>Video</th>
    </tr>
    <tr>
        <td>Apu Gorai</td>
        <td>India</td>
        <td><img src="https://app.3schools.in/logo.png" height=100 width=100></td>
        <td><video width="100" height="100" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video></td>
    </tr>
</table>
</div> -->



    <style>
        /* body{
            width: 100%;
            height: 100vh;
            background-color: pink;
        } */
        
    img,
    video {

        
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    </style>

<?php
                    include 'dbconnect.php';
                    $dataTable = "SELECT * FROM `create_post` ";
                    $viewQuery = mysqli_query($conn,$dataTable);
                    while($view =mysqli_fetch_array($viewQuery)){
                   
                   
                     ?>

    <div class="container">
  

        <div class="row">

            <!-- <div class="col-md-12 py-5">
                <div class=" text-center">
                    <h3>Date</h3>
                </div>
            </div>
            <div class="col-md-12 py-5">

                <div>
                    <h3 class=" text-center">Content</h3>
                </div>
            </div> -->
            <div class="col-md-12  py-5">

                <div class="  ">


                    <h1 class=" text-center">Video</h1>
                    <div class=" center">





                        <video src="<?php echo $view['video']?>" width="550" height="280" controls></video>
                        <!-- <video width="550" height="280" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video> -->
                    </div>
                </div>

            </div>
            <div class="col-md-12  py-5">

                <div class="  ">
                    <h1 class=" text-center">image</h1>
                    <img src="<?php echo $view['image']?>" class=""
                        style=" width:550px;" alt="">


                </div>

            </div>

        </div>
    </div>
    <?php

}

?>
</body>

</html>