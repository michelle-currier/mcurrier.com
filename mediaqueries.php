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
            <div class="six columns">
                <h4><a href="https://css-tricks.com/snippets/css/media-queries-for-standard-devices/" target="_blank">CSS-TRICKS Media Query</a></h4>
                <h4><a href="https://gist.github.com/bartholomej/8415655" target="_blank">Simple Cheatsheet (github)</a></h4>
            </div>
            
            <div class="six columns">
                <a href="https://color.adobe.com/create/color-wheel/">Kuler - a color palette creator</a>
            </div>
        
        </div>
        <div class="row">
            <div class="twelve columns">
                <pre>
                <code style="-webkit-user-select: all;">
                /*------------------------------------------
                Responsive Grid Media Queries - 1280, 1024, 768, 480
                1280-1024   - desktop (default grid)
                1024-768    - tablet landscape
                768-480     - tablet 
                480-less    - phone landscape & smaller
                --------------------------------------------*/
                @media all and (min-width: 1024px) and (max-width: 1280px) { }
                
                @media all and (min-width: 768px) and (max-width: 1024px) { }
                
                @media all and (min-width: 480px) and (max-width: 768px) { }
                
                @media all and (max-width: 480px) { } 
                </code>
                </pre>
            </div>
        </div>
        

<?php include 'includes/footer.php'; ?>