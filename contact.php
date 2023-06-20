<html lang="en">
    <head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title> currier designs - Contact</title>
<?php include 'includes/header.php'; ?>
		<div class="row">
			<div class="twelve columns">
				<h1 class="green">m. currier designs</h1>
				<hr>	    
			</div>
		</div>
	<div class="row">
		<div class="twelve columns">
			<h4 class="green">Schedule a design consultation.</h4>
		</div>
	</div>
	<div class="row">
		<div class="six columns">
			<form id="demo-form" action="post.php" method="post" name="contactus">
		
				
				<label for="name">Name:</label> <input type="text" name="name" class="form-control"/>
				
				<label for="email">Email:</label> <input type="email" name="email" class="form-control" required=""/>
				<label for="phone">Phone:</label> <input type="tel" name="phone" class="form-control"/><br>
				<label for="comment">Message:</label><textarea name="comment" class="full-width"></textarea><br>
				
				
				<button type="submit" class="button">Submit</button>
			</form>	
			
			
		</div>
		<div class="six columns">
			<p></p>
		</div>
	</div>	
		<script src="includes/form-validation.js" type="text/javascript"></script>
<?php include 'includes/footer.php'; ?>