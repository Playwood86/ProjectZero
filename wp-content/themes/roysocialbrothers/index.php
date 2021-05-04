<?php get_header(); ?>

<section class="container" style="border: 1px solid black;padding-left: 42px;padding-right:42px;">
  <div class="row">
		<div class="col">
			<div style="background-color:#F4F4F4;">
				1
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				2
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				3
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				4
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				5
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				6
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				7
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				8
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				9
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				10
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				11
			</div>
		</div>
		<div class="col">
			<div style="background-color:#F4F4F4;">
				12
			</div>
		</div>
	</div>
</section>

<section class="container">
  <div class="row">
		<div class="col-sm-6">
			<div style="background-color:red;">
				Col
			</div>
		</div>
		<div class="col-sm-6">
			<div style="background-color:red;">
				Col
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<div class="col blog-main">

				<?php
				if ( have_posts() ) {
						while ( have_posts() ) : the_post();
				?>
				<div class="blog-post">
						<h2 class="blog-post-title"><?php the_title(); ?></h2>
						<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
						<?php the_content(); ?>
				</div><!-- /.blog-post -->
				<?php
						endwhile;
				}
				?>

				<nav>
						<ul class="pager">
								<li><?php next_posts_link('Previous'); ?></li>
								<li><?php previous_posts_link('Next'); ?></li>
						</ul>
				</nav>

		</div><!-- /.blog-main -->
	</div>
</section>

<?php get_footer(); ?>