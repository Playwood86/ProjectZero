<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php include_once('head.php'); ?>

<body <?php body_class(); ?>>

<header class="main-header">
  <section class="container px-5 pt-3 bg-image">
    <div class="row">
    	<div class="col-4 d-flex justify-content-start">
    		<a href="<?php echo get_site_url(); ?>" class="header_logo"><img src="https://socialbrothers.nl/wp-content/themes/social_brothers/assets/SBlogo.svg"/></a>
    	</div>
			<div class="col d-flex justify-content-end">
				<nav class="blog-nav">
					<a class="blog-nav-item active" href="<?php echo get_site_url(); ?>">Home</a>
					<a class="blog-nav-item" href="<?php echo get_site_url(); ?>/blog">Blog</a>
				</nav>
			</div>
		</div>
		<div class="row">
      <div class="col d-flex justify-content-center">
        <div class="title-wrapper my-auto mt-3">
          <div class="title_container pt-4">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>