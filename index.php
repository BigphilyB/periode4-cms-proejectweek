
<?php get_header();?>
	<header>
		<section class="container header">
			<div class="row no-gutters">
				<div class="col-12 header">
					<!-- BEGIN NAVBAR -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">FITNESS</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<?php
wp_nav_menu(
 array(
   'theme_location'=>'mijn_custom_menu',
   'menu_class'=>'navbar-nav'
 )
);
?>
						</div>
					</nav>
					<!-- EINDE NAVBAR -->
					<img src='<?php echo bloginfo('template_url');?>/imgs/couple-exercising2.jpg' class='img-fluid img-fit' alt="Couple exercising">
					<div class="header-text">
						<h1>Fitness in a can</h1>
						<h3>Yes you can</h3>
					</div>
				</div>
			</div>
		</section>
	</header>


	<main class="container defaultpage">

		<section class="row">
			<div class="offset-1 col-7">
			<?php
 if(have_posts()){
   while(have_posts()){
     the_post();
     the_title('<h2>','</h2>');
     the_content();
   }
 }
?>
			</div>
			
<?php get_sidebar(); ?>
			
			
		</section>
		
		
		
				
				
	</main>



	<?php get_footer();?>
