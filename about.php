<?php
include 'header.php';
?>


<!-- about section start -->
    <!--   <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Our About</h1>
            <p class="news_text">Do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_taital_box">
                        <p class="date_text">01 Jan 2020</p>
                        <h4 class="make_text">Make it Simple</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <p class="post_text">Post By : Casinal</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="images/img-6.png" class="image_6" style="width:100%">
                     <h6 class="plus_text">+</h6>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- about section end -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Us Page Design </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body> -->

   <style type="text/css">
     /* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
*/
/*header {
    height: 300px;
    position: relative;
}

header::before {
    content: ' ';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(./office.jpg);
    background-position: bottom;
    background-size: cover;
    opacity: 0.8;
    z-index: -1;
}

header::after {
    content: ' ';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.6;
    background-size: cover;
    background-color: black;
    background-position: bottom;
}

.navbar {
    color: #fff;
    padding: 1rem 3rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar ul {
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

.navbar .responsive {
    display: none;
}

.navbar ul li {
    padding: 8px 12px;
}

.navbar ul li a {
    z-index: 2;
    color: #fff;
    position: relative;
    text-decoration: none;
}

#hamBurger {
    display: none;
}

.button {
    padding: 7px 10px;
    color: #fff;
    animation: none;
    animation-duration: 0.5s;
    animation-fill-mode: forwards;
    background-color: rgb(32, 154, 202);
}*/

#home {
    width: 100%;
    padding: 3rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
}

.home-left {
    height: 300px;
    position: relative;
}

.home-left img {
    height: 100%;
    border-radius: 10px;
}

.home-right {
    width: 50%;
}

.home-heading {
    font-size: 2rem;
    margin-bottom: 10px;
    font-weight: bold;
}

.home-para {
    margin-bottom: 20px;
    font-size: 20px;
    line-height: 2.5rem;
}
.my_para{
    font-size: 20px;

    
}
.my_li{
    font-size: 18px;
}

.btn {
    text-decoration: none;
    color: black;
    font-weight: bold;
    position: relative;
    /*width: 0;*/
    margin-top: 26px;
}

.btn:hover::after {
    content: '';
    height: 4px;
    position: absolute;
    background-color: aqua;
    left: 0;
    bottom: -10px;
    animation: width;
    animation-duration: 0.5s;
    animation-fill-mode: forwards;
    border-radius: 5px;
}

@keyframes width {
    0% {
        width: 0%;
    }

    100% {
        width: 100%;
    }
}

#workFlow {
    width: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
    text-align: center;
    margin-bottom: 4rem;
}

.heading {
    margin: 1rem auto;
    text-align: center;
    font-weight: bold;
}

.para {
    margin: 1rem auto;
    font-size: 20px;
    line-height: 2.5rem;
}

.num-container {
    width: 70%;
    margin: 5rem auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.num-item {
    font-size: 1.5rem;
    line-height: 1.4rem;
    color: rgb(43, 126, 199);
}

/* Our Goal */
#goal {
    width: 80%;
    margin: 2rem auto;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    align-items: center;
}

.goal-left {
    width: 60%;
    line-height: 2rem;
}

.goal-left h2 {
    font-size: 2.4rem;
    font-weight: bold;
}

.goal-left p {
    line-height: 2.5rem;
    margin: 1rem 0;
}

.goal-left ul {
    list-style: none;
    margin-bottom: 1rem;
}

.goal-left ul li::before {
    line-height: 1.5rem;
    content: '✓';
    color: red;
}

.goal-right {
    position: relative;
    width: 35%;
}

.goal-right img {
    width: 100%;
    cursor: pointer;
    border-radius: 10px;
    filter: drop-shadow(3px 4px 5px black);
    transition: all 0.2s linear;
}

.goal-right img:hover {
    transform: translateY(-5px);
    filter: drop-shadow(5px 6px 7px black);
}

/* Our Team */
#our-Team {
    width: 80%;
    margin: 4rem auto 1rem;
}

#our-Team h2 {
    text-align: center;
    margin: 1rem auto 4rem;
    position: relative;
}

#our-Team h2::after {
    content: '';
    height: 4px;
    margin: 0 auto;
    text-align: center;
    width: 15%;
    background-color: aqua;
    position: absolute;
    left: 50%;
    bottom: -10px;
    border-radius: 5px;
    transform: translate(-50%);
}

.teamContainer {
    width: 70%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.team-item {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0.5rem;
}

.team-item h5 {
    margin-top: 1rem;
    font-size: 1.1rem;
}

.team-item span {
    margin-top: .4rem;
    font-weight: bold;
    text-transform: uppercase;
    color: rgb(7, 176, 176);
}

.team-item img {
    width: 80px;
}

/*footer {
    padding: 1rem 0;
    text-align: center;
}

@media screen and (max-width: 784px) {
    #list {
        display: none;
    }*/

    #hamBurger {
        cursor: pointer;
        display: block;
        z-index: 20;
        font-size: 2rem;
    }

    .navbar .responsive {
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0%;
        left: 100%;
        padding: 2rem 0;
        z-index: 2;
        height: 100vh;
        background-color: rgb(24, 23, 24);
        width: 100%;
        transition: all 0.5s linear;
        opacity: 0.9;
    }

    .navbar ul li {
        margin: 0.4rem 0;
    }

    .responsive.active {
        left: 0%;
    }

    .goal-right {
        width: 100%;
        margin: 0 auto 2rem;
    }

    .goal-left {
        width: 100%;
        text-align: center;
    }

    #goal {
        flex-direction: column-reverse;
    }
}

@media screen and (max-width: 633px) {
    #home {
        flex-direction: column;
    }

    .home-left {
        width: 100%;
        height: auto;
    }

    .home-left img {
        width: 100%;
    }

    .home-right {
        margin-top: 2rem;
        width: 100%;
    }

    .para {
        width: 90%;
    }

    .num-container {
        flex-direction: column;
    }

    .num-item {
        margin: 1rem;
    }

    .teamContainer {
        justify-content: center;
    }
}
   </style>




  
    <!--================== Header Section Starts from Here ==================-->
  <!--   <header>
        <nav class="navbar">
            <h2> Gavacy. </h2>
            <ul id="list">
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Our Pricing </a></li>
                <li><a href="#"> About Us </a></li>
                <li><a href="#"> Services </a></li>
                <li><a href="#"> News </a></li>
                <li><a href="#"> Page </a></li>
                <li><a href="#" class="button"> Free Trial </a></li>
            </ul>
            <ul id="hamBurger">
                <li><i class="fa-solid fa-bars"></i></li>
            </ul>
            <ul class="responsive">
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Our Pricing </a></li>
                <li><a href="#"> About Us </a></li>
                <li><a href="#"> Services </a></li>
                <li><a href="#"> News </a></li>
                <li><a href="#"> Page </a></li>
                <li><a href="#" class="button"> Free Trial </a></li>
            </ul>
        </nav>
    </header> -->
    <!--================== Header Section Ends Here -->
    <!--section start here-->
    <!-- padding-top: 134px; margin-top: -108px; -->
<section style="background:#005899; border-bottom:50px solid #0A3E64">
   <div class="container">
      <div class="row">
         <div style="padding:30px; background:#005899">
            <h1 style="color:#fff">About</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="background:none; padding:0">
               <li class="breadcrumb-item"><a href="/" style="color:#fff;" />Home</a></li>
               <li class="breadcrumb-item active" aria-current="page" style="color:#fff;">About</li>
              </ol>
            </nav>
         </div>   
      </div>   
   </div>
</section>
 <!--==================  Section end from Here ==================-->
    <!--================== Home Section Starts from Here ==================-->
    
    <section id="home">
    
        <div class="home-left">
            <img src="image/1.gif" alt="">
        </div>
        <div class="home-right">
            <h2 class="home-heading"> The IAS INSTITUITE </h2>
            <p class="home-para">The IAS INSTITUTE is aimed to develop amongst its students a competitive attitude along with sound academic base with quality teaching. The academy also conducts seminars and workshops with the help of experts in order to train the student to think, feel and express like civil servants. Apart from conveying knowledge of the concern subject, the Classic IAS Academy gives importance to leadership development, social responsibility and brain power development in order to ensure that our tomorrow civil servants do not undergo from any ethical bankruptcy.</p>
            <a href="" class="btn"> Our Work</a>
        </div>
    
    </section>
     
    <!--================== Home Section Ends Here -->

    <!--================== Workflow Section Starts from Here ==================-->
    <section id="workFlow">
        <h2 class="heading"> Class Room Teaching </h2>
        <p class="para">The IAS INSTITUTE with its years of proven brilliance is a name to imagine with. This all starts at our classrooms that are the<br> centers of the entire learning experience. IAS preparation involves a long term commitment and determination, <br> due care is taken to keep the students inspired and focused. Other than transacting the set syllabus,<br> the lecturers encourage questioning and taking up individual questions makes the class interactive and contributive.<br> Every class has limited strength to make sure effective learning and coaching.<br> To maintain the quality of classroom training, typical opinions are taken from the students.</p>
        <div class="num-container">
            <div class="num-item"><span>27,882 <br>Students</span></div>
            <div class="num-item"><span>90% <br>Action Plans</span></div>
            <div class="num-item"><span>592 <br>faculty</span></div>
        </div>
    </section>
    <!--================== Workflow Section Ends Here -->


    <!--================== Goal Section Starts from Here ==================-->
    <section id="goal">
        <div class="goal-left">
            <h2>Our Goal</h2>
            <p class="my_para">The IAS Institute is aimed to develop amongst its students a competitive attitude along with sound academic base with quality teaching. The academy also conducts seminars and workshops with the help of experts in order to train the student to think, feel and express like civil servants. Apart from conveying knowledge of the concern subject, The IAS Academy gives importance to leadership development, social responsibility and brain power development in order to ensure that our tomorrow civil servants do not undergo from any ethical bankruptcy.</p>
            <ul>
                <li class="my_li"> The Institute also takes care of Prelims, Mains Optional Subjects as well as the preparation for subsequent interviews! </li>
                <li class="my_li">The Academy prepares students with greater knowledge and inculcates in them the capacity to think positively ,and act purposively!</li>
                <li class="my_li">At Classic IAS Academy, the main focus is on participatory and interactive learning. Therefore, the faculty members create an atmosphere that is conductive to an all-encompassing teaching!</li>
            </ul>
            <a href="" class="btn"> Contact Us</a>
        </div>
       <div class="container">
         <div class="row">
            <div class="col-md-4">
             <div class="goal-right">
               <img src="image/2.gif" alt="">
           </div>
        </div>
         <div class="col-md-4">
            <div class="goal-right">
            <img src="image/3.gif" alt=""style="height: 349px;">
         </div>
      </div>
         
             <div class="col-md-4">
               <div class="goal-right">
            <img src="image/4.gif" alt=""style="height: 349px;">
        </div>
     </div>
</div>
</div>
        
       <!--  <div class="goal-right">
            <img src="image/2.gif" alt="">
        </div>
        <div class="goal-right">
            <img src="image/2.gif" alt="">
        </div> -->
        </div>
    </section>
    <!--================== Goal Section Ends Here -->

    <!--================== Our Team Section Starts from Here ==================-->
   <!--  <section id="our-Team">
        <h2>Our Member</h2>
        <div class="teamContainer">
            <div class="team-item">
                <img src="./teamMember.png" alt="">
                <h5 class="member-name">John Smith</h5>
                <span class="role">seo expert</span>
            </div>
            <div class="team-item">
                <img src="./teamMember.png" alt="">
                <h5 class="member-name">John Smith</h5>
                <span class="role">seo expert</span>
            </div>
            <div class="team-item">
                <img src="./teamMember.png" alt="">
                <h5 class="member-name">John Smith</h5>
                <span class="role">seo expert</span>
            </div>
            <div class="team-item">
                <img src="./teamMember.png" alt="">
                <h5 class="member-name">John Smith</h5>
                <span class="role">seo expert</span>
            </div>
        </div>
    </section> -->
    <!--================== Our Team Section Ends Here -->

    <!--================== Footer Starts from Here ==================-->
   <!--  <footer>
        <p> &copy; 2022 - All rights reserved - geekshelp.in</p>
    </footer> -->
    <!--================== Footer Ends Here -->

<!-- </body>
<script src="script.js"></script>
</html> -->






 <!-- Javascript files-->



 <!-- <script type="text/javascript">
      const hamBurgerBtn = document.getElementById('hamBurger');
hamBurgerBtn.addEventListener('click', function () {
    const responsiveRight = document.querySelector('.responsive')
    hamBurgerBtn.classList.toggle('active')
    if (hamBurgerBtn.classList.contains('active')) {
        responsiveRight.classList.add('active')
    }
    else {
        responsiveRight.classList.remove('active')
    }
})
   </script> -->


<?php 
include 'footer.php';
?>







