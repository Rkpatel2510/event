<?php


if(isset($_POST['submit']))
{
	
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "elixir_event";
            $conn = mysqli_connect( $servername ,$username ,$password, $database);
            
           // Check connection
           if($conn) {
               echo ""; 
           } 
           else {
               die("Error". mysqli_connect_error()); 
           } 

           
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Name     = $_REQUEST['Name'];
            $Email    = $_REQUEST['Email'];
            $Number   = $_REQUEST['Phone'];
            $Message  = $_REQUEST['Message'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact (`Name`, `Email`,`Number`, `Message`) VALUES ('$Name','$Email','$Number','$Message')";
		 $res = mysqli_query($conn, $sql);
        if($res){
            echo "" ;
            
        }
         else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         // Close connection
        mysqli_close($conn);

	// }

        }
       

?>



<html lang="en">
<head>
<title>Elixir Events</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=" Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<header>
	<div class="container">
		<!-- top header -->
		<section class="row top_header pt-3">
			<div class="col-lg-6 buttons ml-auto">
				<p><span class="fa fa-phone"></span> +91 9173361861</p>
				<a class="btn btn-info btn-lg-block w3ls-btn px-sm-4 px-3 text-capitalize mr-sm-2" href="login.php">Login</a>
				<a class="btn btn-info1 btn-lg-block w3ls-btn1 px-sm-4 px-3 text-capitalize" href="Registration.php">Register</a>
			</div>
		</section>
		<!-- top header -->
		<!-- nav -->
		<nav class="py-3">
        <div id="logo">
			<h1>
				<a class="navbar-brand" href="index.php"> <span class="fa fa-empire"></span>Elixir <span><span class="line"></span>Events</span>
				</a>
			</h1>
		</div>

        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-3 mr-2"><a href="index.php">Home</a></li>
                <li class="mr-lg-3 mr-2"><a href="about.php">About Us</a></li>
                <li class="mr-lg-3 mr-2"><a href="services.php">Services</a></li>
                <li class="mr-lg-3 mr-2"><a href="gallery.php">Gallery</a></li>
				<li class="mr-lg-3 mr-2"><a href="recent.php">Recent Events</a></li>
                <li class="mr-lg-3 mr-2 active"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->




 <!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    Contact Page
                </h2>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
   //breadcrumbs -->

<!-- contact -->
<section class="contact py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us </h3>
		<div class="address row">
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-map-marker"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Address</h6>
						<p> "SARDARDHAM", S.P.Ring Road, Vaisnodevi Circle, AhmedabadSS

						</p>
					</div>
				</div>

			</div>
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-envelope"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<a href="mailto:raxit2510@gmail.com"> raxit2510@gmail.com</a>
							
					</div>

				</div>
			</div>
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-phone"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Phone</h6>
						<p>+91 9173361861</p>
						
					</div>
				</div>
			</div>
		</div>
		<div class="form row py-5">
			<div class="col-lg-6 contact-form">
				<form  method="POST">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" Required > 
							<label>Full Name</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="email" name="Email" Required >
							<label>Email Address</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="tel" name="Phone" Required>
							<label>Phone Number</label>
							<span></span>
						</div>
						<div class="styled-input mt-5">
							<textarea name="Message" Required></textarea>
							<label class="text">Your Message</label>
							<span></span>
						</div>
					</div>
					
					<input type="submit" value="Submit" name="submit">
				</form>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<div class="bg-img">
					<div class="contact-layer">
						<h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
						<p><i class="fas mr-2 fa-mobile-alt"></i> +91 9173361861</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.906648471749!2d72.53382241416439!3d23.137087217846204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e82bdbd75fc05%3A0xae9cd0d313d6050!2sSardardham!5e0!3m2!1sen!2sin!4v1653628891422!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
</section>	
<!-- //contact -->

<!-- footer -->	
<footer>
	<div class="container py-5">
		<div class="row footer-gap">
			<div class="col-lg-4 col-sm-6">
				<h3 class="text-capitalize mb-3">Address</h3>
				<address class="mb-0">
					<p class=""><span class="fa fa-map-marker"></span> "SARDARDHAM", S.P. Ring Road <br>Vaisnodevi Circle, Ahmedbad</p>
					<p><span class="fa fa-clock-o"></span> Timings : 10 a.m to 6 p.m</p>
					<p><span class="fa fa-phone"></span> +91 9173361861</p>
					<p><span class="fa fa-envelope-open"></span> <a href="raxit2510@gmailcom">raxit2510@gmail.com</a></p>
				</address>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-0 mt-4 p-md-0">
				<h3 class="text-capitalize mb-4">Meanwhile On Instagram</h3>
				<div class="images">
					<a class="pr-2" href="#"> <img src="images/insta1.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta2.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta3.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta4.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta5.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta6.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta7.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta8.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta9.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta1.jpg" alt="" class="img-fluid"/> </a>
				</div>	
			</div>
			<div class="col-lg-3 offset-lg-1 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
				<h3 class="text-capitalize mb-3"> Follow us</h3>
				<p class="mb-4">Follow us on social media</p>
				<ul class="social mt-lg-0 mt-3">
					<li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mr-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="mr-1"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class=""><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li class="mr-1"><a href="#"><span class="fa fa-rss"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	
</footer>


<!-- footer -->


</body>
</html>