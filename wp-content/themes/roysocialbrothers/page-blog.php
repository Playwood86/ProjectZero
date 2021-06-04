<?php
/*
 * Template Name: Blog
 */
?>

<?php get_header(); ?>

<section class="container px-5">
  <div class="row">
		<div class="col-lg-12 my-5 bg-white">
			<div class="row">
      <?php
      $args = array(
      'post_type'=> 'post',
      'post_status' => 'publish',
      'order'    => 'DESC',
      'posts_per_page' => -1 // this will retrive all the post that is published
      );
      $posts = get_posts($args);
      if ( $posts) : ?>
      <?php foreach ( $posts as $post ) : ?>
			<div class="col-md-3 mt-4 blog-main">
			 <a href=<?php echo get_the_permalink(); ?> title="<?php the_title(); ?>">
				<div class="blog-post h-100">
					<div class="blog-meta-container">
					 <?php the_post_thumbnail('homepage-thumb'); ?>
						<div class="blog-post-meta">
							<div class="row">
								<div class="col d-flex justify-content-start meta-date">
									<?php the_date('j F Y'); ?>
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
				<div class="col d-flex justify-content-center pt-3 pb-5 pager">
					<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
					$args = array(
						'post_type' => 'post',
						'posts_per_page'         => '6',
						'paged'                  => $paged
					);
					query_posts( $args );
					$posts= get_posts( $args );
					if ($posts) {
						?>
						<?php
							foreach ( $posts as $post ) {
								get_template_part( 'template-parts/content', get_post_format() );
							}
							the_posts_pagination( array(
							'mid_size'=>3,
							'prev_text' => _( '« Vorige pagina'),
							'next_text' => _( 'Volgende pagina »'),
						) );
					}
					else{
						echo '<p>No post found..</p>';
					}
					?>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>