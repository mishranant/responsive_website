<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Contact | Srikant Srinivasan </title>

	<!-- Loading third party fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="css/style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<style type="text/css">
			.site-content{
				filter: blur(4px);
				-webkit-filter: blur(4px);
			}
			.notification{
				/*margin-left: 200px;*/
				/*margin-right: 200px;*/
				z-index:1;
				position: fixed;
				top:50%;
				left:auto;
				right:auto;
				text-align: center;
				font-family: sans-serif;
				font-weight: bold;
				border: 2px #333 solid;
				border-radius: 20px;
				padding:10px;
				background-color: #fff;
			}
			button {
				display: block;
				padding: 5px 5px;
				margin-top: 10px;
				font-size: 20px;
				cursor: pointer;
				text-align: center;
				text-decoration: none;
				margin-left: auto;
				margin-right: auto;
				outline: none;
				background-color: #69acc7;
				border: none;
				border-radius: 10px;
				box-shadow: 0 3px #999;
			}

			button:hover {background-color: #56a2c0}

			button:active {
				background-color: #3e8e41;
				box-shadow: 0 5px #666;
				transform: translateY(4px);
			}
		</style>
	</head>


	<body>
		
		<div class="site-content">
			<header class="site-header" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<a href="http://www.iitmandi.ac.in"><img src="images/iitmandi-logo.jpg" class="img-responsive"></a>
							<div class="col-md-offset-2">			
								<ul class="menu">
									<li class="home menu-item"><a href="index.html"><img src="images/home-icon.png" style="height: 17px; width: 20px;" alt="Home"></a></li>
									<li class="menu-item"><a href="about.html">PI</a></li>
									<li class="menu-item"><a href="group.html">Group</a></li>
									<li class="menu-item"><a href="projects.html">Our projects</a></li>
									<li class="menu-item"><a href="news.html">News</a></li>
									<li class="menu-item current-menu-item"><a href="contact.html">Contact</a></li>
								</ul>		
							</div>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="page-head" data-bg-image="images/page-head-4.jpg">
				<div class="container">
					<h2 class="page-title">Contact</h2>
					<small>Always ready to help!</small>
				</div>
			</div>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="widget">
								<h3 class="widget-title">Our address</h3>
								<address>
									<p>School of Computing and Electrical Engineering, Indian Institute of Technology, Mandi</p>
									<p>Kamand - 175005, Himachal Pradesh, India</p>
								</address>
								<p><strong>Office:</strong> +91 1905-267222</p>
								<a href="mailto:srikant@iitmandi.ac.in">srikant@iitmandi.ac.in</a>
							</div>
						</div>
					</div> <!-- .row -->
				</div> <!-- .container -->
			</footer>

			<script src="js/jquery-1.11.1.min.js"></script>
			<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
			<script src="js/plugins.js"></script>
			<script src="js/app.js"></script>
		</div>
		<div class="notification">
			<?php
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
			require_once 'phpmailer/PHPMailerAutoload.php';

			if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['message'])) {

    //check if any of the inputs are empty
    /*if (empty($_POST['name']) || empty($_POST['email']) ||empty($_POST['message'])) {
        $data = array('success' => false, 'message' => 'Please fill out the form completely.');
        echo json_encode($data);
        exit;
    }*/

    //create an instance of PHPMailer
    $mail = new PHPMailer();

    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['name'];
    		$mail->AddAddress('b16011@students.iitmandi.ac.in'); //recipient 
    		$mail->Subject = 'About SS Website';
    		$mail->Body = "Name: " . $_POST['name'] . "\r\n\r\nMessage: " . stripslashes($_POST['message']);

    		if (isset($_POST['ref'])) {
    			$mail->Body .= "\r\n\r\nRef: " . $_POST['ref'];
    		}

    		if(!$mail->send()) {
    			$data = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    			echo $data;
    			exit;
    		}

    		$data = 'Thanks! We have received your message.';
    		echo $data;

    	}

    	else {
    		$data = 'Please fill out the form completely.';
    		echo $data;
    	}
    	?>
    	
    	<button><a href="contact.html" style="color: #fff; font-weight: 500px;">Go Back</a></button>
    </div>
</body>

</html>