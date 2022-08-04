<?php 
include_once'header.php';
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport"content="with=device-width,initial-
   scale=1.0">
     <title>Story pal </title>
	 <link rel="stylesheet" href="style.css">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
</head>
<body>
  
    
    <!-----course----->
    <section class="course">
        <h1>Templates available</h1>
        <p>Let these curated steps guide you on your literature journey</p>
        
        <div class= "row">
            <div class="course-col" >
                <h3>Intermediate</h3>
                <p>Fantasy template with guide to build amazing worlds and characters</p>
            </div>
            <div class="course-col" >
                <h3>Non fiction</h3>
                <p>Fantasy template with guide to build amazing worlds and characters</p>
            </div>
            <div class="course-col" >
                <h3>Romance</h3>
                <p>Fantasy template with guide to build amazing worlds and characters</p>
            </div>
        </div>
        
    </section>
    
     <!-----Character creation----->
    
    <section class="campus">
        
        <h1>Create amazing characters</h1>
         <p>Let these curated steps guide you on your literature journey</p>
         
         <div class="row">
            <div class= "campus-col">
                <img src="images/32.jpg" >
                <div class="layer">
                    <h3>ATTRIBUTES</h3>
                </div>
            </div>
            <div class= "campus-col">
                <img src="images/3.jpg">
                <div class="layer">
                    <h3>BACKGROUND</h3>
                </div>
            </div>
            <div class= "campus-col">
                <img src="images/28.jpg" >
                <div class="layer">
                    <h3>CONSEQUENCES</h3>
                </div>
            </div>
             
         </div>
        
    </section>
    
    
    
     <!-----Facilities----->
     
    <section class="facilities">
       <h1>What we offer</h1>
       <p>blah blah blah will be replaced later</p>
       
       <div class= "row">
       <div class="facilities-col">
            <img src="images/temp.jpg" >
           <h3>Amazing templates</h3>
           <p>ksoocfojsol jnskdjnndkn njdskjsik </p>
       </div>
          <div class="facilities-col">
            <img src="images/earth.1.jpg" >
           <h3> Timeline</h3>
           <p>ksoocfojsol jnskdjnndkn njdskjsik </p>
       </div>
          <div class="facilities-col">
            <img src="images/Earth.png" >
           <h3>World and charcter building</h3>
           <p>ksoocfojsol jnskdjnndkn njdskjsik </p>
       </div>
          
       </div>
        
    </section>
    
    <!----Call to action---->
    
    <section class= "cta">
        <h1>Begin your journey with Author pal <br>from anywhere in the world</h1>
        <a href="" class="hero-btn">SIGN UP</a>
    </section>
    
    
    
    
    
<!------JavaScript for Toggle Menu----->
    <script>
        
        var navLinks= document.getElementById("navLinks"); 
        
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="200px";
        }
        
    </script>>

</body>
</html>