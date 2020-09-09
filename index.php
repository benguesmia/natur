<!DOCTYPE html>
<html>
<head>
	<title>Natur</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&family=Cairo|comfortaa|karla&display=swap" rel="stylesheet">
    
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="register-form">
			<input type="text" placeholder="user name"/>	
			<input type="text" placeholder="password"/>
			<input type="text" placeholder="email id"/>
			<button>Create</button>
			<p class="message">Already Registered? <a href="#"> Login </a> </p>
			</form>
			<form class="login-form">
				<input type="text" placeholder="user name" />
				<input type="password" placeholder="password" />
				<button>login</button>
				<p class="message">Not Registred? <a href="#">Register</a></p>
			</form>
		</div>
	</div>
	
        <!-- navbar -->

      <div class="navbar">
      	<?php
            echo "Natur";
         
      	?>
      	<ul>
      		<li>Home</li>
      		<li>About</li>
      		<li>Services</li>
      		<li>Our Wors</li>
      		<li>Contact Us</li>
      	</ul>
      </div>
      <!-- header -->
      <div class="header">
      	<div class="opacity"></div>
      	<p>welcom to Natur of the land</p>
      	
      </div>
      <!-- about -->
      <div class="About">
       <img src="https://inhabitat.com/wp-content/blogs.dir/1/files/2017/10/Nile-Uganda-889x594.jpg">

        <p>
        	<span>a b o u t</span>
        	Nature is a comprehensive term that includes the natural world or the physical universe, which contains all the various aspects of life that exist in the universe.Nature is a term of Greek origin that means to delve into the study of the work of nature, just as the philosophy of nature focuses on analysis and discussion in the method of describing nature, and it is known as the physical sciences that it was called in the fourteenth and fifteenth centuries

        </p>

      </div>

      <!-- services -->

      <div class="services">
      	<span>s e r v i c e s</span>
      	<div class="opacity">

      		<div class="item">
      			<img src="https://www.freeiconspng.com/uploads/nature-icon-png-22.png" class="img1"/>
      			<p>Nature is defined as everything that exists in the universe from various aspects, as it includes everything that God Almighty created</p>
      		</div>
      		<div class="item">
      			<img src="https://www.freeiconspng.com/uploads/nature-icon-png-22.png" class="img1"/>
      			<p>Nature is defined as everything that exists in the universe from various aspects, as it includes everything that God Almighty created</p>
      		</div>
      		<div class="item">
      			<img src="https://www.freeiconspng.com/uploads/nature-icon-png-22.png" class="img1"/>
      			<p>Nature is defined as everything that exists in the universe from various aspects, as it includes everything that God Almighty created</p>
      		</div>
      		<div class="item">
      			<img src="https://www.freeiconspng.com/uploads/nature-icon-png-22.png" class="img1"/>
      			<p>Nature is defined as everything that exists in the universe from various aspects, as it includes everything that God Almighty created</p>
      		</div>
      		
      	</div>
      	
 </div>
 <!-- our works -->
 <div class="our-works">
 	<span>o u r w o r k s</span><br>
 	<img src="https://rufaydahhariri.files.wordpress.com/2014/11/imageshnu9u2qyd986d987d8aa.jpg?w=656">
 	<img src="https://foodprotection.news/uploads/images/image_750x422_5d4ea759e66ef.jpg">
 	<img src="https://cdn.sotor.com/thumbs/fit630x300/31153/1577056665/%D8%AA%D8%B9%D8%B1%D9%8A%D9%81_%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%B9%D8%A9.jpg">
 	<img src="https://rotana.net/assets/uploads/2017/05/%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%B9%D8%A9.jpg">
 	<img src="https://cdn.mosoah.com/wp-content/uploads/2020/02/17125838/%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%B9%D8%A9-825x510.jpg">
 	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Val_de_Funes_cun_la_Odles_d%27auton_S%C3%BCdtirol.jpg/270px-Val_de_Funes_cun_la_Odles_d%27auton_S%C3%BCdtirol.jpg">
 </div>

   <!-- contact us -->
   <div class="contact-us">
   	
   	<div class="item">
   		<img src="https://simpleicon.com/wp-content/uploads/phone-1.png"><br>
   		+777852367
   	
   </div> 
   <div class="item">
   		<img src="https://simpleicon.com/wp-content/uploads/map-marker-2.png"><br>
   		batna - algeria
   	
   </div> 
   <div class="item">
   		<img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX18954318.jpg"><br>
   		style@gmail.com
   	
   </div>
   <ul>
     	<li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/600px-Facebook_icon.svg.png"></li>
    	<li><img src="https://cdn.icon-icons.com/icons2/836/PNG/512/Twitter_icon-icons.com_66803.png"></li>
    	<li><img src="https://cdn.icon-icons.com/icons2/1584/PNG/512/3721679-youtube_108064.png"></li>
    	
   </ul>
   </div> 
   <div class="copyright">All Right Reseved 2020, Dising By Benguesmia Ahlam</div>
   <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
   <script >
   	$('.message a') .click(function(){
   	$('form').animate({height:"toggle",opacity: "toggle"}, "slow");	
   	});
   </script>
    
</body>
</html>