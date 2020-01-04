<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electrician Consultant</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
 
 <style>
   html {
  scroll-behavior: smooth;
}
::placeholder {
	padding-left:3%;
    color: #000;
    opacity: 1; 

  font-size:16px;
  font-weight:normal;
}

	input[type="time"]::before{
   color: #ffffff;
   content: attr(placeholder) ":  ";
 }


    input[type=date]::-webkit-datetime-edit-year-field:not([aria-valuenow]),
		::-webkit-datetime-edit-month-field:not([aria-valuenow]),
		::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
		    color: transparent;
		}
}


</style>
	<script type="text/javascript">
			$(window).scroll(function(){
		  if($(window).scrollTop() > 700){
		      $("#up").fadeIn("slow");
		  }
		});
		$(window).scroll(function(){
		  if($(window).scrollTop() < 700){
		      $("#up").fadeOut("fast");
		  }
		});
			 
		      $(document).ready( function() {
		        $('#hide').delay(4000).fadeOut(300);
		      });
		   
	</script>
</head>
<body >
<div class="container-fluid">
	<header class="top-back">
		<div class="container-fluid">
			<div class="mll" style="">
				<div style="float:left;">
					<img src="images/733592-social (1).png" style="width:20px;"> &nbsp;&nbsp;
					<img src="images/733592-social (2).png" style="width:20px;"> &nbsp;&nbsp;
					<img src="images/733592-social (3).png" style="width:20px;">
				</div>
				<div style="float:right;color:white;font-size:18px;">
					<span class="sp">support@example.com</span> &nbsp;&nbsp;&nbsp;<span class="sp">999-999-9999</span>
				</div>
			</div><br>
			<nav class="navigate wh" >
				<a href="#"><img src="images/Logo.png" alt="logo1" /></a>

				<div class="menu">
					<ul>
						<a href="#contact"><li style="color:black;">Contact Us</li></a>
						<a href="#about"><li style="color:black;">About Us</li></a>
						<a href="#"><li style="color:black;">Home</li></a>
					</ul>
				</div>
			</nav>
			
				<p class="top-text"><b>
					Trust Your Electrician <br>
For All Of Your Electrician <br>
Services</b>
					
				</p>
				<a href="#form"><button class="topbtn">Request A Quote</button></a>
							<?php
								if(isset($_REQUEST['sent']))
								{	
								?>
									<p id="hide" style="font-size:16px;color:#fff;text-align: center;">Mail Has Been Sent Successfully!!</p>	
								<?php 
								}
							?>
		</div>
			
	</header>
	
	<center>
		<img src="images/electrician.png" class="top-elec-img" />

		<div class="top-div"><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<center>
							<img src="images/66163.png" style="width: 80px;">	<br><br><br>
							<p class="text-para" style="color:#009fdb;"><b>
								On Time</b>
							</p>
							<p class="text-para">
								We guarantee your technician will arrive within a two hour window.
							</p>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<img src="images/iconmonstr-time-19-240.png" style="width: 80px;">	<br><br><br>
							<p class="text-para" style="color:#009fdb;"><b>
								Same Day Service</b>
							</p>
							<p class="text-para">
								Guaranteed on all calls for service before timing.

							</p>
							
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<img src="images/and.png" style="width: 80px;">	<br><br><br>
							<p class="text-para" style="color:#009fdb;"><b>
								No Risk</b>
							</p>
							<p class="text-para">
								100% Total Satisfaction Guarantee. Your job done right by our skilled experienced technician.
							</p>
							
						</center>
					</div>
				</div>
			</div>
			
		</div>
	</center>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<center><br>
					<p class="text-head" style="font-weight:bolder;" id="about">About Us</p>
				</center>
					<p class="text-para" >We are a professional Electrical Service & Repair company providing residential & commercial customers with the best "Same-Day" service, our technicians are knowledgeable, courteous, clean, and friendly. They continually receive ongoing 
education to maintain updated industry knowledge and technical skills to best meet your electrical needs.
<br><br>
The only thing better than our professional expertise and workmanship is our ability to satisfy customers. Our goal isn’t just to be the best residential and commercial electrical company in the area,
					</p>
			</div>
			<div class="col-md-1"></div>
		</div>
			<center><br><br>
				<img src="images/electrical-installation.png" style="max-width:90%;"><br><br>
			</center>
		<div class="row ">
			<center>
				<p class="text-head" style="font-weight:bolder;"> Our Services</p>	
			</center>
				<br>
				<div class="col-md-1"></div>
			<div class="col-md-5">
				<center>
					<p class="text-para" style="font-weight:bold;font-size: 24px;">Electrical Contractor
					</p>
					<br>
					<p class="text-para">
						Whether you are building a brand-new home or commercial space or remodeling an existing one, you are going need to get a professional, licensed and insured electrical contractor
					</p>
				</center>
			</div>
			<div class="col-md-5">
				<center>
					<p class="text-para" style="font-weight:bold;font-size: 24px;">Electrical Inspections</p>
					<br>
					<p class="text-para">
						What kind of condition is your home or business’s electric infrastructure in? Just because your lights are on and your electronic devices receive power when they are plugged in doesn’t necessarily mean that everything is fine.
					</p>
				</center>
			</div>
			<div class="col-md-1"></div>
			
		</div><br><br>
		<div class="row ">
				
				<div class="col-md-1"></div>
			<div class="col-md-5">
				<center>
					<p class="text-para" style="font-weight:bold;font-size: 24px;">Home Automation
					</p>
					<br>
					<p class="text-para">
						Only recently has it become commonplace for homes in the area to be automated. Living in a smart home sure sounds like it’s closer to science fiction than reality, but that’s how far we have come.
					</p>
				</center>
			</div>
			<div class="col-md-5">
				<center>
					<p class="text-para" style="font-weight:bold;font-size: 24px;">Landscape Lighting</p>
					<br>
					<p class="text-para">
						You no doubt already know what a well designed and maintained landscape can do for your commercial or residential property, but are you getting all that you can out your landscape if it’s not properly lit?
					</p>
				</center>
			</div>
			<div class="col-md-1"></div>
			
		</div><br><br>
		<div class="row ">
				
				<div class="col-md-1"></div>
			<div class="col-md-5">
				<center>
					<p class="text-para" style="font-weight:bold;font-size: 24px;">Electrical Heating
					</p>
					<br>
					<p class="text-para">
						Modern electrical heating has become increasingly popular for homes and businesses in the area for a number of reasons. For starters, electrical heating is far more flexible than oil and gas alternatives.
					</p>
				</center><br><br>
			</div>
			<div class="col-md-5">
				<center>
					<p class="text-para" style="font-weight:bold;font-size: 24px;">Security Lighting</p>
					<br>
					<p class="text-para">
						Is your home or business adequately protected against intruders and vandals? If you don’t have a professionally installed security lighting system in place, you might want to think about it for a while before you answer the question.
					</p>
				</center>
			</div>
			<div class="col-md-1"></div>
			
		</div>
		<div class="el" style="">
		<div class="container-fluid" style="margin-top:0px;">
			<div class="row">
				
				<div class="col-md-6" ></div>

				<div class="col-md-6">
						<p class="text-head" style="font-weight:bolder;color:white;">Why Choose</p>	
					<br>
					<p class="text-para" style="color:white;"> 
						We offer industry leading service and all at a competitive price. We bring a passion to our work that is simply unrivaled in the local area, and whether you have a single family residential home, or a multi-story business complex, you can rest assured that you are going to receive the same individualized service you need to fully resolve any and all electrical issues you might be experiencing.
						<br><br>
						Our dedication to delivering exceptional quality results in each and every service we are called on to perform is a large part of what has helped us earn our reputation as the Birmingham area's leading electricians, and this isn't a reputation that we take lightly. For any and all of your electrical service needs, whether residential or commercial, you can always count on our team of professionals for industry-leading service and exceptional results.
					</p>
					
				</div>

			</div>
		</div>
		</div>
	</div>
<div id ="up" style="margin-right:20px;float:right;display: none">
		<a href="#"><img src="images/arrow.png" style="width:4%; right:20px;bottom:20px;position: fixed;z-index:50;" alt="scrollup" style="" /></a>
</div>	
	
	<div class="container-fluid" style="margin-top:0px;">
			<div class="row">
				
				<div class="col-md-6 " >
					<center>
						<img src="images/elect.png" style="max-width:90%;">
					</center>
				</div>

				<div class="col-md-6">
					<div class="form1">
						<center>
							<p style="text-align:left;"><b>Schedule Appointment</b></p>
							<br>
							<form action="mail.php" method="post">
							<input type="text" class="ip" style=" font-size:16px;font-weight:bold;" name="n1" placeholder="Name" />
							<input type="number" class="ip" style=" font-size:16px;font-weight:bold;" name="n2" placeholder="Number" />
							<input type="email" class="ip" style=" font-size:16px;font-weight:bold;" name="n3" placeholder="Email" />
							
							<input  name="n4" placeholder = "Your Message" class="ip" style=" font-size:16px;height:100px;font-weight:bold;" type = "text"  required>
							<br><br>
							<input type="submit" class="ip-btn" value="SUBMIT NOW" />
							<br><br>
							<br>
							</form>
						</center>
				</div>
					
				</div>

			</div>
		</div>

		
<center><img src="images/Layer 2.png" style="max-width:100%;margin-top:-10px;"></center>

	<div class="container-fluid ml mr">
		<div class="row">
			<div class="col-md-12">
						<p class="text-head" style="text-align:center;font-weight:bolder;">Do I Need an Electrician?</p><br>
						
							<p class="text-para">
								As a home or business owner, we have to face facts. There is going to come a time when your property's electrical system isn't functioning like it should be, and when that time comes, no matter how minor the issue at hand might see, the best thing you can do is to call in a professional Birmingham electrician as quickly as possible to get to the bottom of the issue. 
								<br><br>
								
								Whether your electrical issues stem from an internal issue, like aging or faulty wiring, an outdated electrical panel, or just outlets that aren't working, or an external one like damaged caused chewing pests or a passing storm, it is important to get them resolved in a fast and accurate manner before they have a chance to inflict any further damage to your property. 

							</p>
			
			</div>
		</div>
	</div>
	<br><br>
	<footer class="foot">
		<div class="container" id="contact">
			<div class="row">
				<div class="col-md-6">
					<center>
						<iframe src=https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d9140.883688921478!2d78.4404155575209!3d17.438337413851702!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1568220822116!5m2!1sen!2sin" class="frame"></iframe>
					</center>
				</div>
				<div class="col-md-6" style="color:white;">
					<div class="row">
						<div class="col-md-6">
							<br>
								<p class="text-para" style="color:#009fdb;"><b>Contact Us</b></p>

								<p>
							Electric Consultant<br>
							4833  XYZ Street<br>
							XYZ City, U.S.A<br>
							999-999-9999<br>
							www.emailid@gmail.com<br>
								</p>
							
						</div>
						<div class="col-md-6"><br>
								<p class="text-para" style="color:#009fdb;"><b>QUICK LINKS</b></p>
								<p><a href="#" style="color:white;">Home</a><br><br>
								<a href="#about" style="color:white;">About Us</a><br><br>
								<a href="#contact" style="color:white;">Contact Us</a></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
								<p class="text-para" style="color:#009fdb;"><b>OFFICE HOURS</b></p>
								<p>We offer a variety of office hours in order to meet
								<br> the needs of our patients.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</footer>
</div>
</body>
</html>