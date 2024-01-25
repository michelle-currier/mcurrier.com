<html lang="en">
    <head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>currier designs - Portfolio</title>
		<?php include 'includes/header.php'; ?>
		<div class="row">
			<div class="twelve columns">
				<h1 class="green">m. currier designs</h1>
				<hr>	    
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
                <h2>Graphics Portfolio</h2>
					<div class="slideContainer">
						<div class="slider-wrapper">
						<div class="inner-wrapper">
							<div class="slide"><img src="http://mcurrier.com/images/party_email.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/essentialCBDLogo.png"></div>
							<div class="slide"><img src="http://mcurrier.com/images/Iterations_Timeline.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/tracking_adv.jpg"></div>		
							<div class="slide"><img src="http://mcurrier.com/images/url_breakdown.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/hit_id.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/hmc_poster.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/get_social.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/affiliate_link.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/powderpuff.jpg"></div>							
							<div class="slide"><img src="http://mcurrier.com/images/savethedate2.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/bees_knees.png"></div>
							<div class="slide"><img src="http://mcurrier.com/images/tournament_email.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/flyer_email-10-22.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/snow-cuts.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/EtcAug14.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/bloom_daria_alldays.jpg"></div>
							<div class="slide"><img src="http://mcurrier.com/images/ig_deepcuts.jpg"></div>
						</div>
						</div>

						<div class="prev"></div>
						<div class="next"></div>
					</div>
                </div>
			</div>
	
        <script type="text/javascript">
        $(function() {
            var inWrap = $('.inner-wrapper');
            $('.prev').on('click', function() {
                inWrap.animate({left: '0%'}, 300, function(){
                    inWrap.css('left', '-100%');
                    $('.slide').first().before($('.slide').last());
                });
            });

            $('.next').on('click', function() {
                inWrap.animate({left: '-200%'}, 300, function(){
                    inWrap.css('left', '-100%');
                    $('.slide').last().after($('.slide').first());
                });
            });
        })

        </script>
<?php include 'includes/footer.php'; ?>