<?php
include 'header.php';
?>

<section style="background:#005899; border-bottom:50px solid #0A3E64">
	<div class="container">
		<div class="row">
			<div style="padding:30px; background:#005899">
				<h1 style="color:#fff">Syllabus</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb" style="background:none; padding:0">
					<li class="breadcrumb-item"><a href="/" style="color:#fff;" />Home</a></li>
					<li class="breadcrumb-item active" aria-current="page" style="color:#fff;">Syllabus</li>
				  </ol>
				</nav>
			</div>	
		</div>	
	</div>
</section>



<style>
    :root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: 400px;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}  


/* CSS */
.button-29 {
  align-items: center;
  appearance: none;
  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 48px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
  margin-left:100px;
  margin-bottom: 20px;

}

.button-29:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button-29:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-29:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}
</style>



<div class="container pt-5 pb-5">
       <div class="row" style="padding-bottom: 65px;">
         <div class="col-md-4">
           <li>
    <a href="" class="card">
      <img src="image/General_Studies_Wall.webp" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="image/pexels-photo-1462630.jpeg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">General studies</h3>            
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">The Examination shall comprise two compulsory papers of 200 marks each</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>      
  </li>
         </div>
          <div class="col-md-4">
            <li>
    <a href="" class="card">
      <img src="image/programming-term-csat-circuit-satisfiability-260nw-571597108.webp" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">CSAT</h3>
            <span class="card__status">3 hours ago</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
<button class="button-29" role="button">Learn more</button>


      </div>
    </a>
  </li>
         </div>
          <div class="col-md-4">
              <li>
    <a href="" class="card">
      <img src="image/wp8948627.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="image/political-scientist-concept-studying-ideas-600w-2090154922.webp" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Poltical science</h3>
            <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>            
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>
</div>

       </div>

<div class="row" >
  <div class="col-md-4">
         <li>
    <a href="" class="card">
      <img src="image/history-etched-old-paper-scroll-feather-quill-compass-30890377.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">History</h3>
            <span class="card__status">3 hours ago</span>
          </div>          
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>
  </div>
   <div class="col-md-4">
          <li>
  <a href="" class="card">
      <img src="image/360_F_243476769_d15WIB1ERQTzvRW51NTMOi5guTvoBOrf.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Geography</h3>
            <span class="card__status">3 hours ago</span>
          </div>          
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>
   </div>
    <div class="col-md-4">
         <li>
  <a href="" class="card">
      <img src="image/40945156.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Sociology</h3>
            <span class="card__status">3 hours ago</span>
          </div>          
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>  
    </div>
</div>


     </div>


















<!-- <ul class="cards">
  <li>
    <a href="" class="card">
      <img src="image/General_Studies_Wall.webp" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="image/pexels-photo-1462630.jpeg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">General studies</h3>            
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">The Examination shall comprise two compulsory papers of 200 marks each</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="image/programming-term-csat-circuit-satisfiability-260nw-571597108.webp" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">CSAT</h3>
            <span class="card__status">3 hours ago</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
<button class="button-29" role="button">Learn more</button>


      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="image/wp8948627.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="image/political-scientist-concept-studying-ideas-600w-2090154922.webp" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Poltical science</h3>
            <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>            
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="image/history-etched-old-paper-scroll-feather-quill-compass-30890377.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">History</h3>
            <span class="card__status">3 hours ago</span>
          </div>          
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>
  <li>
  <a href="" class="card">
      <img src="image/360_F_243476769_d15WIB1ERQTzvRW51NTMOi5guTvoBOrf.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Geography</h3>
            <span class="card__status">3 hours ago</span>
          </div>          
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>
  <li>
  <a href="" class="card">
      <img src="image/40945156.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Sociology</h3>
            <span class="card__status">3 hours ago</span>
          </div>          
        </div>
        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
        <button class="button-29" role="button">Learn more</button>
      </div>
    </a>
  </li>            
</ul>
 -->

























<?php 
include 'footer.php';
?>