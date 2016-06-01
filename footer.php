<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
			
		<!-- Footer -->
			<footer id="footer">
            <?php $post5 = get_posts( 'cat=25&sort_order=asc' ); ?>
				<div class="container">
					<section class="links">
						<div class="row">
                        	<?php 
								foreach($post5 as $key => $value){
								$class3= '3u 6u(medium) 12u$(small)';
						?>
							<section class="<?php echo $class3;?>">
								<h3><?php echo $value->post_title;?></h3>
								<ul class="unstyled">
									<?php echo $value->post_content;?>
								</ul>
							</section>
                            <?php }?>
						</div>
					</section>
  	            <?php $post6 = get_post(212); ?>
				<?php if($post6)?>
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li><?php echo $post6->post_content;?></li>
							</ul>
						</div>
                        
                 <?php $post4 = get_posts( 'cat=26&sort_order=asc' ); ?>
                
					<div class="4u$ 12u$(medium)">
                    <?php $i=1;
					foreach($post4 as $key => $value){
						$class4= 'fa-linkedin';
						if($i==1){$class4= 'fa-google-plus';}elseif($i==2){$class4= 'fa-twitter';}elseif($i==3){$class4= 'fa-facebook';}
						
						?>       
						
							<ul class="icons">
								<li>
									<a class="icon rounded <?php echo $class4;?>"><span class="label"><?php echo $value->post_content;?></span></a>
								</li>
								<!--<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>-->
                                
							</ul>
                          
						</div>
					</div>
				</div>
			</footer>
            
         <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skel.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skel-layers.min.js"></script>
		<script type="text/javascript">
        
        /*
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

(function($) {

	skel.init({
		reset: 'full',
		breakpoints: {
			global: {
				href: '<?php bloginfo('template_url'); ?>/css/style.css',
				containers: 1400,
				grid: { gutters: ['2em', 0] }
			},
			xlarge: {
				media: '(max-width: 1680px)',
				href: '<?php bloginfo('template_url'); ?>/css/style-xlarge.css',
				containers: 1200
			},
			large: {
				media: '(max-width: 1280px)',
				href: '<?php bloginfo('template_url'); ?>/css/style-large.css',
				containers: 960,
				grid: { gutters: ['1.5em', 0] },
				viewport: { scalable: false }
			},
			medium: {
				media: '(max-width: 980px)',
				href: '<?php bloginfo('template_url'); ?>/css/style-medium.css',
				containers: '90%!'
			},
			small: {
				media: '(max-width: 736px)',
				href: '<?php bloginfo('template_url'); ?>/css/style-small.css',
				containers: '90%!',
				grid: { gutters: ['1.25em', 0] }
			},
			xsmall: {
				media: '(max-width: 480px)',
				href: '<?php bloginfo('template_url'); ?>/css/style-xsmall.css'
			}
		},
		plugins: {
			layers: {
				config: {
					mode: 'transform'
				},
				navButton: {
					breakpoints: 'medium',
					height: '4em',
					html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span>',
					position: 'top-left',
					side: 'top',
					width: '6em'
				},
				navPanel: {
					animation: 'overlayX',
					breakpoints: 'medium',
					clickToHide: true,
					height: '100%',
					hidden: true,
					html: '<div data-action="moveElement" data-args="nav"></div>',
					orientation: 'vertical',
					position: 'top-left',
					side: 'left',
					width: 250
				}
			}
		}
	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

	});

})(jQuery);
        </script>   
         

	</body>
</html>