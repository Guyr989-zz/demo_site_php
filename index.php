<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>QuerySolutions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<!-- MAIN CONTAINER -->
	<div class="main_container container">
<!-- TOP NAV -->
		<div class="container">
			<nav class="navbar navbar-light">
				<a class="navbar-brand" href="#">PRODUCTS</a>
				<a class="navbar-brand" href="#">PARTNERS</a>
				<a class="navbar-brand" href="#">START EXAMPLES</a>
				<a class="navbar-brand" href="#">MEDIA</a>
				<a class="navbar-brand" href="#">ABOUT</a>
				<a class="navbar-brand" href="#">CONTACT</a>
			</nav>
		</div>
		<!-- TOP PIC -->
		<div class="top_pic">
			<img src="Images/top-pic.jpg" alt="top_pic" style="width:100%;">
			<div class="centerd">ABOUT</div>
		</div>
		<div class="container">
			<!-- Bread Crumb -->
			<nav class="breadcrumb_nav" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">About</li>
				</ol>
			</nav>
			<!-- SOCIAL LOGOS -->
			<div class="socialNetworks">
				</div>
				<div class="about">
					<h1>ABOUT</h1>
					<p>Start provides users with what matters most to them when they wake up their phone. Start is a customizable Android that
						helps device manufacturers, mobile operators and media companies to engage with their users, gain new insights and differentiate
						themselves while providing higher value to their users</p>
					</div>
				</div>
				<!-- Slider -->
				<div class="slider_wrapper">
					<div class="slider_content">
						<h1>LEADERSHIP
							<span class="bold">TEAM</span>
						</h1>
						<a href="/" class="management">MANAGEMENT</a>
						<a href="/" class="bod">BOARD OF DIRECTORS</a>
					</div>
					<div class="slider responsive">
						<div>
							<img src="images/dude-pic1.jpg" alt="" />
						</div>
						<div>
							<img src="images/dude-pic2.jpg" alt="" />
						</div>
						<div>
							<img src="images/dude-pic3.jpg" alt="" />
						</div>
						<div>
							<img src="images/dude-pic4.jpg" alt="" />
						</div>
						<div>
							<img src="images/idiot1.jpg" alt="" />
						</div>
						<div>
							<img src="images/idiot3.jpg" alt="" />
						</div>
						<div>
							<img src="images/idiot4.jpg" alt="" />
						</div>
						<div>
							<img src="images/idiot6.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- control arrows NOT WORKING -->
				<!-- <div class="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</div>
				<div class="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</div>
			</div> -->
			
			<!-- MID PIC -->
			<div class="mid_pic">
				<h1>MAKE A DIFFERENCE WITH A CELLTICK CAREER</h1>
				<p>Are you looking to change the way hundreds of millions of people use their mobile device?
					<br> Are you looking to work for an innovative company that provides value to consumers all around the world?</p>
					
					<button class="btn btn-primary">JOIN US</button>
				</div>
				<!-- MID TABLE -->
				<div clss="mid_table">
					<table>
						<tr>
							<td>
								<img src="Images/phone-pic.jpg" alt="phone-pic" style="width:100%;">
							</td>
							<td>
								<h2 class="bold">LIFE AT</h2>
								<br>
								<p>Start provides users with what matters most to them when they wake up their phone. Start is a customizable Android that
									helps device manufacturers, mobile operators and media companies to engage with their users, gain new insights and
									differentiate themselves while providing higher value to thier users
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<h2>CORPORATE</h2>
								<h2>
									<span class="bold">SOCIAL RESPONSIBILTY</span>
								</h2>
								<br>
								<p>Start provides users with what matters most to them when they wake up their phone. Start is a customizable Android that
									helps device manufacturers, mobile operators and media companies to engage with their users, gain new insights and
									differentiate themselves while providing higher value to thier users
								</p>
							</td>
							<td>
								<img src="Images/phone-pic.jpg" alt="" style="width:100%;">
							</td>
						</tr>
					</table>
				</div>
				<!-- FORM CONTAINER -->
				<div class="form_container container-fluid">
					<!-- LEFT SECTION -->
					<div class="contact_section">
						<div class="contact_section_text">
							<p>MASS ALERT SYSTEM</p>
							<p>MASS ALERT SOLUTIONS(MAS) IS BASED ON CELL</p>
						</div>
						<!-- RIGHT SECTION -->
						<div class="contact_section_form">
							<button class="btn btn-primary more">CONTACT US</button>
							<form class="form-horizontal" action="contactform.php" style="display:none" role="form">
								<div class="form-group">
									<label class="control-label col-sm-4" for="fieldone">Full name:</label>
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" id="fieldone" placeholder="Enter name ...">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4" for="fieldtwo">Email:</label>
									<div class="col-sm-10">
										<input type="email" name="mail" class="form-control" id="fieldtwo" placeholder="Enter email ...">
									</div>
								</div>
								<div id="moreField">
									<div class="form-group">
										<label class="control-label col-sm-4" for="fieldone">Massage:</label>
										<div class="col-sm-10">
											<textarea name="message" class="form-control" col="5" placeholder="Massage us.."></textarea>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" style="float:right;" value="Submit">SEND</button>
										<button class="btn btn-primary reset" style="float:right; margin-right:10px;">RESET</button>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<!-- FOOTER -->
				<footer>
					<div class="footer_linkes container">
						<table>
							<tr>
								<th>
									POPULAR
								</th>
								<th></th>
								<th>
									INFORMATION
								</th>
								<th></th>
								<th>
									STAY CONNECTED
								</th>
								
							</tr>
							<tr>
								<td>
									<a href="https://www.sephora.com/shop/hair-products">Products</a>
								</td>
								<td>
									<a href="https://www.earthcam.com">Live Screen</a>
								</td>
								<td>
									<a href="https://www.where-am-i.co/">Start Map</a>
								</td>
								<td>
									<a href="https://www.where-am-i.co/">Start Map</a>
								</td>
								<td>
									<div class="social_networks">
										<a class="facebook_icon" href="#"></a>
										<a class="tweeter_icon" href="#"></a>
										<a class="youtube_icon" href="#"></a>
										<a class="pinterest_icon" href="#"></a>
										<a class="googlePlus_icon" href="#"></a>
										<a class="instegram_icon" href="#"></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<a href="https://delphiparser.com/2017/06/06/kick-start-your-legacy-modernization/">Start</a>
								</td>
								<td>
									<a href="https://www.celltick.com/products/mass-alert/">Mass Alert</a>
								</td>
								<td>
									<a href="http://www.donaldjtrump.com/">Terms</a>
								</td>
								<td>
									<a href="http://www.dictionary.com/browse/condition">Conditions</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="https://ruinmysearchhistory.com/">Start Screen</a>
								</td>
								<td>
									<a href="https://www.willyoupressthebutton.com/">Start Screen</a>
								</td>
								<td>
									<a href="https://www.thrillist.com/eat/nation/worst-customers-ever-service-industry-stories">Customers</a>
								</td>
								<td>
									<a href="https://www.buzzfeed.com/jamiejones/do-fish-need-feeding?utm_term=.kh2knK5D5#.ycXZbex1x">Customers</a>
								</td>
								<td>&copy;2000-2015 Celitick All Rights Reserved</td>
							</tr>
						</table>
					</div>
				</footer>
			</div>
				
				<!-- SCRIPTS -->
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
				<script src="js/index.js"></script>
				
			</body>
			

				</html>