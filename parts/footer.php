		<!-- Before Footer -->
		<section class="before-footer">
			<div class="wrap">
				<div class="col col-small same-height">
					<h3>Get in Touch</h3>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
					<div class="info">
						<div class="icon">
							<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						</div>	
						<div class="text">
							<p>Haji mohsin road,</p> 
							<p>Khulna 9000</p>
						</div>
					</div>	
					<div class="info">
						<div class="icon">
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						</div>	
						<div class="text">
							<p><a href="tel:123456789">+123 456 789</a></p> 
							<p><a href="tel:258963741">+258 963 741</a></p>
						</div>
					</div>
					<div class="info">
						<div class="icon">
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
						</div>	
						<div class="text">
							<p><a href="mailto:info@gmail.com">info@gmail.com</a></p> 
							<p><a href="mailto:your@mail.com">your@mail.com</a></p>
						</div>
					</div>

					<div class="social-media">
						<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

					</div>	
				</div>
				<div class="col col-big same-height">
					<div id="response"></div>
					<div id="errorContainer">
					    <p>Please correct the following errors and try again:</p>
					    <ul />
					</div>
					<h3>Leave a Comment</h3>
					<form action="response.php" method="post" class="contact-form" id="form1">
						<div class="name-email">
							<div>
								<input type="text" name="name" placeholder="Name" required="">
							</div>
							<div>
				          		<input type="email" name="email" placeholder="Email" required="">
				          	</div>
			          	</div>
			          	<div class="message">
			          		<textarea placeholder="Write a Message" required="" name="message"></textarea>
			          	</div>
			          	<input type="submit" value="Send Message">
		        	</form> 
		      	</div>
	    	</div>
	  	</section> 
		<!-- Before Footer --> 	
	
		<!-- Footer -->
		<footer>
			<div class="wrap">
			    <div class="col">
			    	<p>Copyright © <?php echo date("Y"); ?> <a href="#" target="_blank">MAXIN</a> All Right Reserved.</p>
			    </div>	
			    <div class="col">
			    	<nav class="navigation">
			          <ul id="menu">
			            <li class="nav-item active">
			              <a class="nav-link" href="#">Home</a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" href="#">About</a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" href="#">Terms</a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" href="#">Policy</a>
			            </li>

			            <li class="nav-item">
			              <a class="nav-link" href="#">Contact</a>
			            </li>
			          </ul>
			        </nav>
			    </div>	
			</div>
		</footer> 
		<!-- Footer -->	
		
		<!-- Assets -->
		<?php include_once 'footer-assets.php'; ?>
		<!-- Assets -->

	</body>

</html>