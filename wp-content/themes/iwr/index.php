<?php get_header(); ?>

<div class="jumbotron text-center">
		<h1>I Would Rather</h1>
		<p>I review movies that I hate.</p>
</div>

<?php if ( have_posts() ) { ?>

<?php while ( have_posts() ) {

	the_post();
?>
	
	<div class="row text-center blog-post">
		<div class="col-sm-12">
			<h1><?php echo the_title(); ?></h1>
		</div>
		<div class="col-sm-12">
			<p><?php echo the_content(); ?></p>
			<span><?php echo the_date('F,j,Y'); ?></span>
		</div>
	</div>

	
	


<?php } ?>

<?php } else { ?>
	

<?php } ?>

<?php get_footer(); ?>