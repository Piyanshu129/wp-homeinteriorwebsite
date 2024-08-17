<?php

//header file is included
include 'inc/header.php';

//user file is included here
include 'lib/user.php';
$user = new user;

session::userSession();


?>

<!-- body area started from here 

<div class="container mt-5">
    <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
        <th scope="col">User Id</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
<?php

$userlist = new user;
$result = $userlist->userList();

if($result){
    foreach($result as $data){ ?>
        <tr>
        <th scope="row"><?php echo $data['user_id']; ?></th>
        <td><?php echo $data['user_name']; ?></td>
        <td><?php echo $data['user_username']; ?></td>
        <td><?php echo $data['user_email']; ?></td>
        <td><a href="profile.php?id=<?php echo $data['user_id']; ?>"><button class="btn btn-primary btn-sm">View</button></a></td>
        </tr>
<?php }
} ?>
    </tbody>
    </table>
</div>-->


<div class="main_img1" style="background-image: url(Picture1.jpg);">

<div class="header">
    <nav class="navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
        <div class="container">
            <ul class="cont">
                <li><a href="#!">HOME INTERIOR</a></li>
            </ul>
            <ul clas="cont1">
                <li><a href="#Home">Home</a></li>
                <li><a href="#About Us">About Us</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#Contact">Contact</a></li>
                <?php
                $userlogin = session::get("login");
                if($userlogin == true){ ?>
                    <li><a href="?action=logout">Logout</a></li>
                <?php }else{ ?>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>
<div class="main-container">
    <div class="main-msg">
        <p>Fas Infra Solutions.
					The Ultimate Home Decor Hub
        </p>
    </div>


<div>
<div class="image-pair">
  <div class="image-container">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="assets/flip-images/block1.png" alt="Front Image 1">
        </div>
        <div class="flip-card-back">
          <img src="assets/flip-images/block2.png" alt="Back Image 1">
        </div>
      </div>
    </div>
  </div>

  <div class="image-container">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="assets/flip-images/block3.png" alt="Front Image 2">
        </div>
        <div class="flip-card-back">
          <img src="assets/flip-images/block4.png" alt="Back Image 2">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="image-pair">
  <div class="image-container">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="assets/flip-images/block5.png" alt="Front Image 3">
        </div>
        <div class="flip-card-back">
          <img src="assets/flip-images/block6.png" alt="Back Image 3">
        </div>
      </div>
    </div>
  </div>

  <div class="image-container">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="assets/flip-images/block7.png" alt="Front Image 4">
        </div>
        <div class="flip-card-back">
          <img src="assets/flip-images/block8.png" alt="Back Image 4">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    <!--<div class="container1">
        <div class="box">
        <div class="box-login" id="login">
            <div class="top-header">
                <h3>Hello, Again!</h3>
                <small>We are happy to have you back.</small>
            </div>
            <form action="login.php" method="POST">
            <div class="input-group">
                <div class="input-field">
                    <input type="text" name="username" class="input-box" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="input-box" id="password" required>
                    <label for="password">Password</label>
                    <div class="eye-area">
                    <div  class="eye-box" onclick="myLogPassword()">
                        <i class="fa-regular fa-eye" id="eye"></i>
                        <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                    </div>
                </div>
                </div>
                <div class="remember">
                    <input type="checkbox" id="formCheck" class="check">
                    <label for="formCheck">Remember Me</label>
                </div>
                <div class="input-field">
                    <input type="submit" class="input-submit" name="submit" value="Sign In" required>
                </div>
                
                
            </div>
         </div>
        </form>-->

            <!-- register-->

        <!--<div class="box-register" id="register">
            <div class="top-header">
                <h3>Sign Up, Now!</h3>
                <small>We are happy to have you with us.</small>
            </div>
            <div class="input-group">
                <div class="input-field">
                    <input type="text" class="input-box" id="regUsername" required>
                    <label for="regUsername">Username</label>
                </div>
                <div class="input-field">
                    <input type="text" class="input-box" id="regEmail"  required>
                    <label for="regEmail">Email address</label>
                </div>
                <div class="input-field">
                    <input type="password" class="input-box" id="regPassword"  required>
                    <label for="regPassword">Password</label>
                    <div class="eye-area">
                <div  class="eye-box" onclick="myRegPassword()">
                <i class="fa-regular fa-eye" id="eye-2"></i>
                <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                  </div>
                 </div>
                </div>
                
                <div class="remember">
                   <input type="checkbox" id="formCheck2" class="check">
                   <label for="formCheck2">Remember Me</label>
                </div>
                <div class="input-field">
                   <input type="submit" class="input-submit" value="Sign Up" required>
                </div>
            </div>
         </div>
         <div class="switch">
            <a href="#" class="login active" onclick="login()">Login</a>
            <a href="#" class="register" onclick="register()">Register</a>
            <div class="btn-active" id="btn"></div>
        </div>
        </div>
     </div>
</div>-->

<section id="About Us" class="about-section">
    <div class="about-content">
        <h2>About Us</h2>
        <p>
            Welcome to our home interior design website, where creativity and functionality unite to transform houses into dream homes. 
            At Fas Infra Solutions, we understand that the aesthetics and ambiance of a living space play a crucial role in enhancing the quality of life. 
            Our mission is to inspire and guide you on your journey to create a harmonious and personalized living environment. 
            With a team of passionate designers and experts, we offer a wide range of services, from expert advice and innovative design concepts to practical tips for every budget. 
            We believe that every space tells a unique story, and we are here to help you craft a narrative that is exclusively yours. 
            Explore our website and discover the art of creating interiors that reflect your personality, lifestyle, and aspirations.
        </p>
    </div>
</section>
    
<section class="portfolio" id="Portfolio">
	<div class="item">
			<img src="assets/images portfolio/living room1.jpg" alt="Project 1">
			<h3>Living Room</h3>
			<p>The living room is often the heart of any home—a space where comfort, style, and functionality seamlessly come together.</p>
	</div>
	<div class="item">
			<img src="assets/images portfolio/living room2.jpg" alt="Project 2">
			<h3>Living Room</h3>
			<p>Our living room designs aim to create a warm and inviting atmosphere for families and friends to gather, relax, and create lasting memories.</p>
	</div>
	<div class="item">
		<img src="assets/images portfolio/living room3.jpg" alt="Project 1">
		<h3>Living Room</h3>
		<p>We pay careful attention to every detail, from the choice of color palettes and furniture selection to lighting and decor.</p>
</div>
<div class="item">
		<img src="assets/images portfolio/kitchen1.jpg" alt="Project 2">
		<h3>Kitchen Room</h3>
		<p>The kitchen is the heart of the home, where culinary creativity meets practical functionality. Our kitchens reflect a blend of contemporary trends and timeless elegance.</p>
</div>
<div class="item">
	<img src="assets/images portfolio/kitchen2.jpg" alt="Project 1">
	<h3>Kitchen Room</h3>
	<p>Our kitchen designs are carefully crafted to harmonize the art of cooking with the art of aesthetics. </p>
</div>
<div class="item">
	<img src="assets/images portfolio/kitchen3.jpg" alt="Project 2">
	<h3>Kitchen Room</h3>
	<p>We prioritize the seamless integration of form and function, creating kitchens that are not only a joy to cook in but also a pleasure to behold.</p>
</div>
<div class="item">
		<img src="assets/images portfolio/bedroom1.jpg" alt="Project 2">
		<h3>Bedroom</h3>
		<p>The bedroom is a sanctuary, a place of rest and rejuvenation.Our approach to bedroom design places emphasis on creating a harmonious and comfortable environment.</p>
</div>
<div class="item">
	<img src="assets/images portfolio/bedroom2.jpg" alt="Project 1">
	<h3>Bedroom</h3>
	<p>Each element of our designs is meticulously chosen to enhance the overall atmosphere of the room.</p>
</div>
<div class="item">
	<img src="assets/images portfolio/bedroom3.jpg" alt="Project 2">
	<h3>Bedroom</h3>
	<p>With our bedroom designs, we aspire to create spaces that invite relaxation, inspire creativity, and provide a deep sense of well-being.</p>
</div>
</section>

<div class="contact-message">
  <pre>
    For additional information, reach out to our design team. 
    We'll then work together to discuss your project and determine pricing.
		Don't forget to fill out the form below.</pre>
</div>

<section>
    <div class="Contact" id="Contact">
        <div class="row">
            <div class="col-lg-7">  
                <div class="contact">
                    <form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group col-md-12">
                            <textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-5">
                        <div class="single_address">
                            <a href="https://www.google.com/maps/d/u/0/viewer?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ll=18.526597761873653%2C73.90867652830482&z=22">
                            <i class="fa fa-map-marker">
                                <img src="assets/images/location.png" class="icons">
                            </i>
                            <h4 class="message1">Our Address</h4>
                            <p class="message1">B/20 Sai park opp to kalyani steel co.</p>
                            </a>
                        </div>
                        <div class="single_address">
                            <a href="mailto:FasInfraSol@gmail.com">
                                <i class="fa fa-envelope">
                                    <img src="assets/images/envelop.png" class="icons">
                                </i>
                            <h4 class="message1">Send your message</h4>
                            <p class="message1">FasInfraSol@gmail.com</p>
                            </a>
                        </div>
                        <div class="single_address">
                            <i class="fa fa-phone">
                                <img src="assets/images/call.png" class="icons">
                            </i>
                            <h4 class="message1">Call us on</h4>
                            <p class="message1">(+91) 98900 91620</p>
                        </div>
                        <div class="single_address">
                            <i class="fa fa-clock-o">
                                <img src="assets/images/work icon.png" class="icons">
                            </i>
                            <h4 class="message1">Work Time</h4>
                            <p class="message1">Mon - Fri: 08.00 - 16.00. <br>Sat: 10.00 - 14.00</p>
                        </div>                  
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>


<!--why choose us section-->

<section id="why-choose-us">
    <h2>Why Choose Us</h2>
    <div class="choose-us-item">
        <h3>Quality Products</h3>
        <p> 
					We offer a wide range of high-quality products to meet your interior needs.
					Discover top-notch, beautiful products crafted with care.
				</p>
				<form class="rating">
					<div class="rating__stars">
						<input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
						<input id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
						<input id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
						<input id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
						<input id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
						<label class="rating__label" for="rating-1">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">1 star</span>
						</label>
						<label class="rating__label" for="rating-2">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">2 stars</span>
						</label>
						<label class="rating__label" for="rating-3">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">3 stars</span>
						</label>
						<label class="rating__label" for="rating-4">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">4 stars</span>
						</label>
						<label class="rating__label" for="rating-5">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">5 stars</span>
						</label>
					</div>
				</form>
    </div>
    <div class="choose-us-item">
        <h3>Expert Designers</h3>
        <p>
					Our team of expert designers can help you achieve the look you desire for your home.
					Let our skilled designers bring your vision to life.
				</p>
				<form class="rating">
					<div class="rating__stars">
						<input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
						<input id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
						<input id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
						<input id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
						<input id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
						<label class="rating__label" for="rating-1">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">1 star</span>
						</label>
						<label class="rating__label" for="rating-2">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">2 stars</span>
						</label>
						<label class="rating__label" for="rating-3">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">3 stars</span>
						</label>
						<label class="rating__label" for="rating-4">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">4 stars</span>
						</label>
						<label class="rating__label" for="rating-5">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">5 stars</span>
						</label>
					</div>
				</form>
    </div>
    <div class="choose-us-item">
        <h3>Customer Satisfaction</h3>
        <p>
					Your satisfaction is our top priority, and we strive to exceed your expectations.
          Your satisfaction is our success.
				</p>
				<form class="rating">
					<div class="rating__stars">
						<input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
						<input id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
						<input id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
						<input id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
						<input id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
						<label class="rating__label" for="rating-1">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">1 star</span>
						</label>
						<label class="rating__label" for="rating-2">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">2 stars</span>
						</label>
						<label class="rating__label" for="rating-3">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">3 stars</span>
						</label>
						<label class="rating__label" for="rating-4">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">4 stars</span>
						</label>
						<label class="rating__label" for="rating-5">
							<svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
								<ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
								<g class="rating__star-body-g">
									<path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
								</g>
							</svg>
							<span class="rating__sr">5 stars</span>
						</label>
					</div>
				</form>
            </div>
		<script  src="rating.js"></script>
</section>

<footer>
    <p>&copy; 2023 Home Interior Design</p>
</footer>
    
</body>