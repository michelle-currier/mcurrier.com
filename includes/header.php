		<meta name="description" content="Freelance web designer, website redesign, website updates, front-end web developer, frontend design, michelle currier, m. currier designs, contract web design">
		<meta name="author" content="Michelle Currier">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<!-- a littel fouc trick --> 
		<style>html{visibility: hidden;opacity:0;transition: 4s ease;}    </style>
		<link href="css/nomalize.css" type="text/css" rel="stylesheet">
		<link href="css/skeleton.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,800" rel="stylesheet">
		<!-- tabs stuff -->
		<link rel="stylesheet" href="css/skeleton-tabs.css">
		
		<!-- slider stuff -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="includes/responsiveslides.min.js"></script>
		<!-- form validation -->
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js" type="text/javascript"></script>
		<script src="https://use.fontawesome.com/beca7e284f.js"></script>
		
<!--
		___   ___    
	   |   \ /   |     
	   | |\   /| |  
       | | \_/ | | currier designs }
       
	-->
</head>
<body>
	<div class="container">
		<div class="navigation">
			<nav>
				<ul>
					<li><a href="index.php" <?=echoSelectedClassIfRequestMatches("index")?>>About</a></li>
					<!--<li><a href="services.php" <?=echoSelectedClassIfRequestMatches("services")?>>Services</a></li>-->
					<li><a href="projects.php" <?=echoSelectedClassIfRequestMatches("projects")?>>Projects</a></li>
					<li><a href="resume.php" <?=echoSelectedClassIfRequestMatches("resume")?>>Resume</a></li>
					<li><a href="portfolio.php" <?=echoSelectedClassIfRequestMatches("portfolio")?>>Portfolio</a></li>
					<li><a href="contact.php" <?=echoSelectedClassIfRequestMatches("contact")?>>Contact</a></li>	
				</ul>
			</nav>
		</div>						
	<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="selected"';
}
?>
		
	
			