<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
 get_header(); ?>

<!-- One -->
 <?php $post = get_post(177); ?>
		<?php if($post)?>
        	
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2><?php echo $post->post_title;?></h2>
						<p><?php echo $post->post_content;?></p>
					</header>
                
				<?php $posts = get_posts( 'cat=23&sort_order=asc' ); ?>
                
					<div class="row 150%">
                    <?php $i=1;
					foreach($posts as $key => $value){
						$class= ' color6 fa-rocket';
						if($i==1){$class= 'color1 fa-cloud';}elseif($i==2){$class= 'color9 fa-desktop';}
						
						?>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded <?php echo $class;?>"></i>
								<h3><?php echo $value->post_title;?></h3>
								<p><?php echo $value->post_content;?></p>
							</section>
						</div>
                        <?php $i++;}?>
					</div>
				</div>
			</section>

		<!-- Two -->
         <?php $post = get_post(185); ?>
		<?php if($post)?>
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2><?php echo $post->post_title;?></h2>
						<p><?php echo $post->post_content;?></p>
					</header>
                  
					<section class="profiles">
                   <?php $post1 = get_posts('cat=24&sort_order=asc'); ?>  
						<div class="row">
                        <?php foreach($post1 as $key => $value){
							$class1= '3u 6u(medium) 12u$(xsmall) profile';
						?>
							<section class="<?php echo $class1;?>">
                                <?php echo get_the_post_thumbnail( $value->ID); ?>
								<h4><?php echo $value->post_title;?></h4>
								<p><?php echo $value->post_content;?></p>
							</section>
                            <?php }?>
						</div>
                        
					</section>
                    
            <footer>
             <?php $post2 = get_post(195); ?>
		<?php if($post2)?>
        	<?php $custom_fields = get_post_custom($post2-> ID);?>
			<p><?php echo $post2->post_content;?>
            </p>
			<ul class="actions">
				<li>
				<a href="<?php echo $custom_fields['footer-btn'][0]; ?>" class="button big">Lorem ipsum dolor sit</a>
				</li>
			</ul>
		</footer>
	</div>
</section>

		<!-- Three -->
         <?php $post6 = get_post(228); ?>
			<?php if($post6)
            $class6 = 'wrapper style3 special'; ?>
			<section id="three" class="<?php echo $class6?>">
				<div class="container">
					<header class="major">
						<h2><?php echo $post6->post_title;?></h2>
						<p><?php echo $post6->post_content;?></p>
                       
					</header>
				</div>
               
				<div class="container 50%">                    
					<form action="#" method="post">
						<div class="<?php echo $class5; ?>">
							
								 <?php echo do_shortcode( '[contact-form-7 id="226" title="Contact form 1"]' ); ?>
							</div>
							<!--<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
								</ul>
							</div>-->
						</div>
					</form>
                   
				</div>
			</section>
      
                    
                    
<?php get_footer(); ?>               
