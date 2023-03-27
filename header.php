<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>IAS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <link rel="stylesheet" href="https://www.drishtiias.com/frontend/css/colorbox.css"/> -->

    <!-- before comments -->
    <!--<link rel="stylesheet" href="https://www.drishtiias.com/frontend/css/main.css"/>-->

    <link rel="stylesheet" href="assect/css1/main.css">
         <!-- Fontawesome CDN Link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/> -->


      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900" rel="stylesheet">

     <!-- <script src="https://www.drishtiias.com/frontend/js/jquery.min.js"></script> -->
    <script src="assect\js/js2/jquery.nicescroll.js"></script> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> 
     <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

     
</head>

<body>



<style>

/*
height: 625px; background-color: #8c0073;
*/


.nav-link{
  font-size:15px;
}

#logo{
  text-align:left;
  margin-left:160px;
}

.desktop_view{
    display: block;
}

.small_view{
      display: none;
 }

 .my_nav{
      padding-top: 0px;
  }

@media(max-width: 500px){
    .desktop_view{
      display: none;
    }

    .small_view{
      display: block;
    }

    .my_nav{
      padding-top: 20px;
    }
    .right-section{
      display: none;
    }
}

.my_menu{
  display: none;
}


  .my_golu{
        background: transparent;
    color: white;
    margin-left: 78px;
    margin-right: -22px;
  }

.my_golu1{
      padding-left: 37px;
    margin-top: 11px;
    margin-bottom: 11px;
}

.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link {
    color: white;
}

@media(max-width:500px){
  .my_golu{
        background: white;
    color: black;
    margin-left: 78px;
    margin-right: -22px;
  }
.my_golu1{
      padding-left: 37px;
    margin-top: 11px;
    margin-bottom: 11px;
}


  .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link {
      color: black;
  }

  .my_menu{
    display: block;
  }
  
}




</style>



<div class="container-fluid " style="background-image: linear-gradient(to right top, #480145, #6a0360, #8f057c, #b70597, #e100b2); height: 70px;">
  <div class="row">
    <div class="col-md-3">
      <div class="logo">
        <img src="image/logo.jpeg"  style="width: 15%; margin-top: 6px;">

          <button class="navbar-toggler py-2 my_menu" style="float: right; margin-top: 20px; background: white;" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            
            <img src="image/menu.webp" style="width: 25px; height: 20px;">
            <!-- <span class="navbar-toggler-icon"></span> -->

          </button>

      </div>
    </div>
               
     <div class="col-md-6">

 <nav class="navbar navbar-expand-lg navbar-light pt-3">
  <a class="navbar-brand text-white font-weight-bold" href="#" style="margin-left:-310px; font-size:25px; padding-left: 15px;">The IAS Institute</a>

  <div class="collapse navbar-collapse my_golu" id="navbarNav">
    <ul class="navbar-nav mx-auto my_golu1">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" style="" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" style="" href="about.php"><i class="fa fa-info"  aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" style="" href="course.php"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand " style="" href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Contact</a>
      </li>
    </ul>
  </div>
</nav>
      </div>



      <div class="col-md-3">

          <div class="right-section" style="color:black; padding-top: 28px;">
                <div class="phone pt-0">
                   <!--  <a href="tel:" class="phone1 " style="color:white;">6299716991</a>
                    <a href="tel:" class="phone2" style="color:white;">6299716991</a> -->
                </div>
                
                <div class="top-links my_g pt-0" id="isNotLogin" style="display: block;">
                  <!-- <a href="tel:" class="phone1 " style="color:white;">6299716991/<a> -->
                    <!-- <a href="login2.php" class="phone2" style="color:white;">Student login</a>&nbsp;&nbsp;&nbsp; -->
                    <!-- <a href="login2.php" class="register popup cboxElement font-weight-bold" style="color:white;">Student login</a> -->
                    <!-- <a href="tel:" class="phone2" style="color:white;">6299716991</a> -->
                 
                    <a href="login2.php" class="register popup cboxElement font-weight-bold" style="color:white;">Student login</a>&nbsp;&nbsp;&nbsp;
                    <a href="registration.php" class="register popup cboxElement font-weight-bold" style="color:white;">Registration</a>&nbsp;&nbsp;&nbsp;


                    
                    <a href="admin.php" class="login popup cboxElement font-weight-bold" style="color:white;"> Admin Login</a>&nbsp;&nbsp;&nbsp;

                    <!-- <a href="login2.php" class="register popup cboxElement font-weight-bold" style="color:white;">Student login</a> -->
                   <!--  <a href="tel:" class="phone1 " style="color:white;">6299716991</a>
                    <a href="tel:" class="phone2" style="color:white;">6299716991</a> -->
                </div>
            </div>  
      </div>
  </div>
</div>




<!-- <nav class="navbar navbar-expand-lg navbar-light pt-3">
  <a class="navbar-brand text-white" href="#">The IAS INSTITUTE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-brand text-white" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand text-white" href="about.php"><i class="fa fa-info"  aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand text-white" href="course.php"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand text-white " href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;contact</a>
      </li>
    </ul>
  </div> -->

  <!--
  <div class="right-section" style="color:black;">
                <div class="phone pt-0">
                    <a href="tel:" class="phone1 " style="color:white;">6299716991</a>
                    <a href="tel:" class="phone2" style="color:white;">6299716991</a>
                </div>
                
                <div class="top-links  pt-0" id="isNotLogin" style="display: block;">
                    <a href="" class="login popup cboxElement font-weight-bold" style="color:white;">Login</a>
                    <a href="" class="register popup cboxElement font-weight-bold" style="color:white;">Register</a>
                </div>
            </div>-->  
</nav>
</div>
 
 <!-- <div class="top-header" style="margin-bottom: 0px; background-image: linear-gradient(to right top, #b119dd, #a811e5, #9c0aed, #8e07f6, #7d0aff);">
        <div class="wrapper py-3 desktop_view  px-5" style="max-width: 100%; background-image: linear-gradient(to right top, #370515, #480024, #56003a, #5d0056, #580078);">
            <div class="logo" id="logo">
             <img src="image/logo.jpeg" alt="" style="width: 6%; margin-top: 3px;">
            </div>

            <div class="right-section" style="color:black;">
                <div class="phone pt-0">
                    <a href="tel:" class="phone1 " style="color:white;">6299716991</a>
                    <a href="tel:" class="phone2" style="color:white;">6299716991</a>
                </div>
                
                <div class="top-links  pt-0" id="isNotLogin" style="display: block;">
                    <a href="" class="login popup cboxElement font-weight-bold" style="color:white;">Login</a>
                    <a href="" class="register popup cboxElement font-weight-bold" style="color:white;">Register</a>
                </div>
            </div>
    </div>



<div class="container-fluid my_nav " style="    margin-top: -47px; background-image: linear-gradient(to right top, #370515, #480024, #56003a, #5d0056, #580078);">
  <nav class="navbar navbar-expand-lg navbar-light   ml-auto" style="margin-top: -8px;">
  
    <a class="navbar-brand " href="" >Home</a>-->
<!--     <button class="navbar-toggler" onclick="show_nav()" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <button style="background: transparent;" class="small_view">
          <img src="image/61fbb6b5ff255b0001a2bd4e (1).webp" alt="" style="width: 50px; height: 50px;">
    </button>

  <div class="collapse navbar-collapse text-center"  id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link navbar-brand text-white"  href="index.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand text-white" href="about.php"><i class="fa fa-info"  aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;ABOUT US</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="course.php">
                <i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;COURSE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand text-black" href="#">TEAM</a>
            </li>-->
    <!--         <li class="nav-item">
                <a class="nav-link navbar-brand text-white" href="contact.php">
                  <img src="image/contact.png" style="width: 17px; height: 17px; background: transparent;">
                &nbsp;&nbsp;&nbsp;CONTACT</a>
            </li>
          </ul>
         
        </div>
  </div>
   

  </nav> -->
<!-- </div>  --> 


<script>

  function show_nav(params) {
    $("#navbarSupportedContent").toggle(500);
  }

  

// .collapse:not(.show) {
//     display: none;
// }

</script>