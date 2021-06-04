<?php get_header(); ?>

<section class="container px-5">
  <div class="row">
		<div class="col-lg-6 my-5 bg-white">
			<div class="row">
				<div class="col-sm-12 my-4">
					<?php echo do_shortcode('[themedomain_frontend_post]'); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-6 my-5 bg-white">
			<div class="row">
      <?php
      $args = array(
      'post_type'=> 'post',
      'post_status' => 'publish',
      'order'    => 'DESC',
      'posts_per_page' => 4 // -1 this will retrive all the post that is published
      );
      $posts = get_posts($args);
      if ( $posts) : ?>
      <?php foreach ( $posts as $post ) : ?>
			<div class="col-md-6 my-4 blog-main">
			 <a href=<?php echo get_the_permalink(); ?> title="<?php the_title(); ?>">
				<div class="blog-post h-100">
					<div class="blog-meta-container">
					 <?php the_post_thumbnail('homepage-thumb'); ?>
						<div class="blog-post-meta">
							<div class="row">
								<div class="col d-flex justify-content-start meta-date">
									<?php echo get_the_date( 'd-m-Y' ); ?>
								</div>
								<div class="col d-flex justify-content-end meta-category">
									<?php the_category( ' ' ); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-content">
						<h2 class="blog-post-title"><?php the_title(); ?></h2>
						<span class="blog-post-content"><?php the_content(); ?></span>
					</div>
				</div>
			</div>
			</a>
			<?php endforeach; ?>
			<?php endif; wp_reset_postdata(); ?>
			</div>
			<div class="row">
				<div class="col d-flex justify-content-center pt-3 pb-5">
					<form action="<?php echo get_site_url(); ?>/blog">
							<input type="submit" value="Meer laden" id="submit" name="submit" class="btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>