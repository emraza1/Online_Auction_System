<?php include  '_inc/head.php'; ?>

<!--nav start here-->
<?php include  '_inc/nav.php'; ?>
<!--nav end here-->


<!--contact start here-->
<div class="height-top">
</div>
<div class="contact">
	<div class="contact-main">
	   <div class="container">
			<div class="contact-top">
				<h3>CONTACT US</h3>
				<p>Your Feedback is very important to us.</p>
			</div>
               <form method="post" action="_inc/contact.php">
			<div class="contact-bottom">
				<div class="col-md-7 contact-left">
                                   
					<p>Name</p>
		             <input type="text" value="" class="user-input" name="name" required="required" placeholder="Enter Name" />
		            <p>E-mail</p> 
		             <input type="text" value="" class="user-input" name="email" required="required" placeholder="Enter Email" />
		            <p>Subject</p>
		             <input type="text" value="" class="user-input" name="subject" required="required" placeholder="Enter Subject" />
		            <p>Phone</p>
		             <input type="text" class="user-input" name="phone" required="required" placeholder="Enter Phone"/>
				</div>
				<div class="col-md-5 contact-right">
					<p>Messages</p>
					 <textarea class="form-control text-area" rows="3" name="message" required="required" placeholder="Enter Message" ></textarea> <br>
		             <input type="submit" value="Send" class="subbtn">

				 </div>
				 <div class="clearfix"> </div>
				</div>
               </form>

		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
	<div class="container">
		<div class="col-md-7 map-left">
			<h3>CONTACT INFO</h3>
				      <P>Our Contact information is given below.</P>
				     <div class="addre">
					      <h4>ADDRESS</h4>
					      <p>Address : Multan</p>
						  <p>Street : Kutchery road </p>
						  <p>ph : +123456789</p>
					 </div>
		</div>
		<div class="col-md-5 map-right">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1415253431785"> </iframe>
	   </div>
	</div>
</div>
<!--map end here-->


<!-- footer -->
<?php include  '_inc/footer.php'; ?>
<!-- footer end -->
