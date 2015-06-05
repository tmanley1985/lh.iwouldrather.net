<?php get_header(); ?>

<?php if ( have_posts() ) { ?>

<?php while ( have_posts() ) {

	the_post();
	
?>

<?php } ?>

<?php } else { ?>
	

<?php } ?>

<?php get_footer(); ?>