
<html lang="en">
    <head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title> currier designs - Projects</title>
		<?php include 'includes/header.php'; ?>
		<div class="row">
			<div class="twelve columns">
				<h1 class="green">m. currier designs</h1>
				<hr>	    
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
			<h4>UX Portfolio</h4>
			</div>
		</div>
		<div class="row">
				<div class="twelve columns">
				<ul class="tab-nav">
					<li>
						<a class="button active" href="#three">Dockett Redesign/Refactor</a>
					</li>
					<li>
						<a class="button" href="#one">Cristina's Cleaning Website</a>
					</li>
					<li>
						<a class="button" href="#two">Clay Creations Redesign</a>
					</li>
					<li>
						<a href="/localWp/index.html" target="_blank" class="button">Tutorial to build Wordpress locally</a>
				</ul>
				<div class="tab-content">
				<div class="tab-pane active" id="three">
						<h3 class="purple">Dockett</h3>
						<div class="row">
							<div class="one-half column">
								<div class="dockett1"></div>
							</div>
							<div class="one-half column">
								<h6>Background:</h6>
								<p>The current SaaS was in need of a redesign and had new functionality being added. I was tasked with refactoring the huge css file into more maintainable files with a less preprocessor. </p>
							</div>
						</div>
						
						
						<div class="row">
							<div class="one-half column">
								<h6>Process:</h6>
								<p>Prior to the second overhaul, I created a pattern library with material design concepts and gave it a slightly more open look and feel along with a new font for the headers. When rewriting the less files I used semantic naming conventions for future capabilities like color theming to be added with ease. I then implemented the new design for the SaaS called Dockett.</p>
								<p><a href="https://invis.io/B9OS9C3DMS4" target="_blank" title="Redesign for Dockett">Dockett inVision Mockups</a></p>
								<br>
							</div>
							<div class="one-half column">
								<div class="dockett2"></div>
							</div>
						</div>
						<div class="row">
							<div class="one-half column">
								<div class="dockett3"></div>
							</div>
							<div class="one-half column">
								<h6>Design:</h6>
								<p>I liked the clean look of the Ubuntu font but also wanted something more conservative for the headers. That's how I landed on Source Serif Pro for the headers. The original software had extremely tiny inputs I wanted to open things up enough for the eye to differentiant but needed to keep it tight to minimized scrolling. Also, the original had the label and inputs side by side which doesn’t lend well to readability so I stacked the labels and inputs.
								</p>
							</div>
						</div>
						<h6>Takeaways:</h6>
						<p>Refactoring large files should be broken up into more manageable parts. Save an old copy and start from scratch slowly adding only what is needed. Use semantic language instead of color names that can then easily get changed to not the actual color.</p>
							
							
					</div><!-- end of pane three -->
					<div class="tab-pane" id="one">
						<h3 class="purple">Cristina’s Cleaning Service</h3>
						<div class="row">
							<div class="one-half column">
								<h6>Background:</h6>
								<p>Cristina did not have a website for her business yet. I met with Nichole, her daughter to discuss the most user-friendly ways for people to schedule an estimate.  After reviewing some other cleaning sites and really targeting the immediate call to action we landed on this design.</p>
						
								<h6>Process:</h6>
								<p>In the initial discovery meetings, I found out that people would want to learn about three main things when searching for a cleaning service. </p>
								<ol>
									<li>How get in touch with the cleaning service - scheduling estimate, contact info</li>
									<li>Services they provide - lists, bio </li>
									<li>How well they provide these services - testimonials, about</li>
								</ol>
							</div>
						
							<div class="one-half column">
								<div class="cristina3"></div>
							</div>
						</div>
						<div class="row">
							<div class="one-half column">
								<div class="cristina1"></div>
							</div>
							<div class="one-half column">
								<p>After we defined users’ needs I created some sketches and then moved on to making a prototype in Sketch.  Another designer created the logo for Cristina.  Once we got that I decided on fonts and then applied them to the final design draft.
		The last challenge was learning exactly what data we needed to collect.  The main thing was making sure that people outside of the greater New Orleans Metro area didn’t request service.  I solved this by implementing a zip code drop down only offering the zips they would service.</p>
							</div>
						</div>	
						<div class="row">
							<div class="one-half column">
							<h6>Design:</h6>
							<p>For the actual build-out of the site the stack I landed on using was bootstrap, npm, express, and Mongo DB. The site is mostly static except for updating the testimonials.  Due to this, I decided to opt for a non-CMS build. </p>
							<h6>Takeaways:</h6>
							<p>Npm is a bit more difficult to work with than anticipated. Used materialize and things worked out great.</p>
							<h3><a href="http://cristinas.mcurrier.com/index.php">Check out the site</a></h3> 
							<p>I still need some content and pictures but it's ready for content!</p>
							</div>
							<div class="one-half column">
								<div class="cristina2"></div>
							</div>
						</div>
					</div><!-- end of pane one -->
					<div class="tab-pane" id="two">
						<h3 class="purple">Clay Creations</h3>
						<div class="row">
							<div class="one-half column">
								<h6>Background:</h6>
								<p>The current Clay Creations site was in much need of updating. The wordpress and php both needed to be brought up to current versions as well. Also, we needed to retake all of the images of the inventory so why not do a total redesign for them. Along with this, the client was not able to manage their site whenever they needed to change the inventory or the show dates.</p>
								<h6>Process:</h6>
								<ol>
									<li>Needed an up to date install of wordpress and the db.</li>
									<li>Easy PayPal integration.</li>
									<li>Update all the inventory images.</li>
									<li>Redesign the look of the site.</li>
								</ol>
							</div>
							<div class="one-half column">
								<div class="clay2"></div>
							</div>
						</div>
						<div class="row">
							<div class="one-half column">
								<div class="clay1"></div>
							</div>
							<div class="one-half column">
								<p>I started with a fresh up to date install of wordpress and the barebones theme of twentynineteen. Next, I wanted to find the most simple way for us to use the currently existing paypal structure and keep it simple for any layperson to still be able to update without too many issues. I went with PayPal Simple Cart its use of shortcodes is easy for the client and works like a charm.</p>
							</div>
						</div>
						<div class="row">
							<div class="one-half column">
								<h6>Design:</h6>
								<p>I wanted to keep the color scheme they use with the red and blue. But I wanted to add a bit of the look from the clay studio. To add that I changed the background to the clay splatters showing some of the methods they use in their studio.</p>
								<h6>Takeaways:</h6>
								<p>Keep your database updated. Use as few plug-ins as possible and ones that have lots of installs.</p>
							</div>
							<div class="one-half column">
								<div class="clay3"></div>
							</div>
						</div>

					</div><!-- end of pane two -->
					


					
				</div>
			</div>

		<div class="row">
			<div class="twelve columns">
			<hr>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
			<h4>Web Projects</h4>
			</div>
		</div>
		<div class="row">
			<div class="six columns">			
				<p>Here are a few examples of some websites that I have completed and worked on.</p>
				<h5><a href="http://Kruu.mcurrier.com" target="_blank" title="Kruu app">Kruu app</a></h5>
				<h5><a href="http://vspfinance.com/" target="_blank" title="Valley Strategic Partners">Valley Strategic Partners</a></h5>
				<!-- <h5 class="green"><a href="http://aquascape.mcurrier.com/" target="_blank" title="Aquascape LLC">Aquascape</a></h5> -->
				<h5><a href="http://gocirca.mcurrier.com/" target="_blank" title="GoCirca Landing Page">GoCirca Landging Page</a></h5>
				<h5><a href="http://costumegasm.mcurrier.com/" target="_blank" title="Costumegasm Mermaid Tails">Costumegasm Mermaid Tails</a></h5>
				<h5><a href="https://eyeluster.photography/" target="_blank" title="Eye Luster Photography">Eye Luster Photography</a><h5>
				<h5><a href="http://thepixelwire.com" target="_blank" title="the Pixel Wire">the Pixel Wire</a></h5>
				<!-- <h5><a href="http://conference.hitpath.com" target="_blank" title="HitPath Conference">HitPath Conference</a></h5> -->
				<!-- <h5><a href="http://djnicerack.com" target="_blank" title="dj Nice Rack">dj Nice Rack</a></h5> -->
				<h5><a href="http://essence.mcurrier.com/" target="_blank" title="Essence the Project">Essence the Project</a></h5>
				<!-- <h5><a href="http://thequarterly.online/" target="_blank" title="the Quarterly Online">the Quarterly Online</a></h5>	 -->
				<h5><a href="http://claycreationsllc.com" target="_blank" title="Clay Creations">Clay Creations</a></h5>
				<!-- <h5><a href="https://www.djnicerack.com/wearehacienda.com/index.php" target="_blank" title="Hacienda">Hacienda</a></h5>
				<h5><a href="http://luke.djnicerack.com" title="Luke Skoza" target="_blank">Luke Skoza</a></h5> -->
				<h5><a href="http://ellibre.mcurrier.com" target="_blank" title="¡El Libre!">¡El Libre!</a></h5>	
			</div>
			<div class="six columns">
				
				<p>inVision mockups or redesigns</p>
				<h5><a href="http://mcurrier.com/images/CCS_prototype.jpg" target="_blank" title="Mockups for a bidding Saas">Christina's Cleaning Service</a></h5><p>Prototype for website.</p>
				<h5><a href="https://invis.io/96PN83IABE7" target="_blank" title="Mockups for a bidding Saas">Bidding Saas</a></h5><p>Rush simple prototypes for a yet to be named construction project bidding SaaS.</p>
				<h5><a href="https://invis.io/B9OS9C3DMS4" target="_blank" title="Redesign for Dockett">Dockett</a></h5><p>Redesign that I created in combo with material design components.</p>
				<h5><a href="https://invis.io/4KOS8ZOV5ZR" target="_blank" title="Fortress HSA app">Fortress HSA App</a></h5><p>The design flats that I used for creating less from scratch for the during app creation.</p>

			</div> 
		</div>
		
		
			<script src="includes/skeleton-tabs.js"></script>
<?php include 'includes/footer.php'; ?>