<?php
/*
 * Template Name: Blog
 */
?>

<?php get_header(); ?>

<section class="container px-5">
  <div class="row">
  	<div class="col py-4">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'singlepage-thumb'); ?>
			<h1 class="page_title mt-4"><?php the_title(); ?></h1>
			<?php
				$categories = wp_get_object_terms( get_the_ID(), 'category' );
			?>
			<?php if(!empty($categories)): ?>
				<span class='category'><?php echo esc_html( $categories[0]->name );?> </span>
			<?php endif; ?>
			<?php the_date('j F Y'); ?>
			<p><?php the_content(); ?></p>
    </div>
	</div>
</section>

<?php get_footer(); ?>