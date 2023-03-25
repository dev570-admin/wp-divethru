
<!DOCTYPE html>

<html lang="en">

   <head>

      <title>Divethru</title>



          <meta charset="utf-8">

          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

          <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico" type="image/x-icon">

          <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico" type="image/x-icon">
<!-- 
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>

          <link href="css/style.css" rel="stylesheet" type="text/css">

          <link href="css/responsive.css" rel="stylesheet" type="text/css">  
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/> -->

        <style type="text/css">
          .sidebar { 
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height:450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
        </style>
       <?php wp_head(); ?>
   </head>
<body>
    
    
   <header>
      <section class="main-head">
         <div class="container">
            <div class="dFlx">
               <div class="navarea">
                 <!--  <button onclick="$('.aside').asidebar('open')"><img src="<?php echo get_stylesheet_directory_uri();?>/images/humbergar.png"/></button> -->
                  <div class="aside">
                     <div class="aside-header">
                        <span class="close" data-dismiss="aside" aria-hidden="true">&times;</span>
                     </div>
                     <div class="aside-contents">
                        <div class="nav-item">
                           <span>Locations</span>
                           <ul>
                              <li><a href="javascript:void(0)">Edmonton Whyte</a></li>
                              <li><a href="javascript:void(0)">Alberta Virtual</a></li>
                           </ul>
                        </div>
                        <div class="nav-item">
                           <span>Therapy</span>
                           <ul>
                              <li><a href="javascript:void(0)">Our Approach</a></li>
                              <li><a href="our-therapist.html">Our Therapists</a></li>
                              <li><a href="javascript:void(0)">For Parents</a></li>
                           </ul>
                        </div>
                        <div class="nav-item">
                           <span>Community</span>
                           <ul>
                              <li><a href="membership.html">Membership</a></li>
                           </ul>
                        </div>
                        <div class="nav-item">
                           <span>Resources</span>
                           <ul>
                              <li><a href="divethru-app.html">DiveThru App</a></li>
                              <li><a href="blog.html">The Blog</a></li>
                              <li><a href="javascript:void(0)">Daily Newsletter</a></li>
                           </ul>
                        </div>
                        <div class="nav-item">
                           <span>More Info</span>
                           <ul>
                              <li><a href="about.html">About Us</a></li>                                 
                              <li><a href="careers.html">Careers</a></li>
                              <li><a href="membership.html">Partnerships</a></li>
                              <li><a href="contact.html">Contact Us</a></li>                                 
                              <li><a href="javascript:void(0)">FAQ</a></li>                                 
                              <li><a href="press.html">Press</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="logoarea">
                  <a href="javascript:void(0)"><?php the_custom_logo();?></a>
               </div>
               <div class="headbtnarea">
                  <ul>
                     <li><a href="our-therapist.html" class="btn">Find a Therapist</a></li>
                     <li><a href="javascript:void(0)" class="btn-login">Log In</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div id="main">
  <button class="openbtn" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/images/humbergar.png"/></button>  
  </div>
          <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


      </section>
   </header>

  

