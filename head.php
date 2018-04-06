<?php $title='Heritage Seventh-Day Adventist Church - ' . $pagename; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title><?php echo($title); ?></title>

		<!-- Loading third party fonts -->
		<link href="../fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="../style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->



	</head>
	<body> <!--Closing body tag in footer -->
		<div class="site-content"> <!--Closing site-content div tag in footer-->
			<header class="site-header">
	<div class="container">
		<a href="../index.php" class="branding">
			<img src="../images/SDALogo.png" alt="" class="logo">
			<h1 class="site-title">Heritage Seventh-Day Adventist Church</h1>
		</a>
		<div class="main-navigation">
		<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
		<ul class="menu">
			<li class="menu-item current-menu-item"><a href='../index.php'>Home <small>Come home</small></a></li>
			<li class="menu-item"><a href="../sermons.php">Sermons <small>Hear the word</small></a></li>
			<li class="menu-item"><a href="../biblestudies.php">Bible Studies <small>Study the Word</small></a></li>
			<!--<li class="menu-item"><a href="events.html">Events <small>Join in</small></a></li>-->
			<li class="menu-item"><a href="../contact.php">Contact <small>Reach out</small></a></li>
		</ul>
	</div>
		<div class="mobile-navigation"></div>
	</div>
</header> <!-- .site-header -->
<?php
	if ($pagename != 'Home')
	{
		$pagehead = '<div class="page-head" data-bg-image="../images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">' . $pagename . '</h2>
				</div>
			</div>';
			echo $pagehead;
	}
?>