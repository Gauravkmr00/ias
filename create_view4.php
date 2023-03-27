<!DOCTYPE html>
<html>
  <head>
    <title>view</title>
    <!-- <style>
      body{
        width: 100%;
        height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
        
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      tr,td {
        text-align: left;
        padding: 8px;
        border: 1px solid black;
        /* background-color: blue; */
      }
    
      /* tr:nth-child(even) {
        background-color: #f2f2f2;
      } */
      td,video{
        width: 30%; 
        height:60px;
     
      }
      
      .container{

        width: 60%;
        height: 100vh;
        justify-content: center;
        align-items: center;
        display: flex;
      }
   

      
    </style> -->
    <style>
          img,video {
  display: block;
  margin-left: auto;
  margin-right: auto;}
    </style>

  </head>
  <body>



  <div class="container">


<div class="row">
                        
   <div class="col-md-12 py-5">
                            <div class=" text-center" ><h3>date</h3></div>
                        </div>
                        <div class="col-md-12 py-5">

                        <div > <h3 class=" text-center">content</h3>  </div>
                        </div>
                            <div class="col-md-12  py-5">

                            <div class="  ">
                    <h1 class=" text-center">video</h1>
                    <div class=" center">
                <video width="550" height="280" >
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>
                </div>
                </div>

    </div>
      <div class="col-md-12  py-5">

      <div class="  ">
                            <h1 class=" text-center">image</h1>
                            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="" style=" width:550px;" alt="">
                        </div>

      </div>
       
</div>
</div>
  <div class="container">
   

    <table>
    
<?php

include 'dbconnect.php';
 $dataTable = "SELECT * FROM `create_post` ";
 $viewQuery = mysqli_query($conn,$dataTable);
 while($view =mysqli_fetch_array($viewQuery)){


  ?>

<tr>
  <td> Date:<?php echo $view['date']?></td>
</tr>
  
 <tr>
 <td>Content:<?php echo $view['content']?></td>
 </tr>
  
  
 <tr>
 <td>Video<video src="<?php echo $view['video']?>" controls></video></td>

 </tr>
 
 <tr>
 <td>Image<img src="<?php echo $view['image']?>" alt=""></td>
 </tr>
</tr>

<?php

 }
 
?>
    </table>
    </div>
  </body>
</html>

