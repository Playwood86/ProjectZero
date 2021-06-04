<?php
/**
 * Add stylesheet to the page
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Preloading_content#Browser_compatibility
 */
add_action('wp_enqueue_scripts', function () { ?>
  <script defer src="<?php echo get_stylesheet_directory_uri() ?>/script/javascript.js" type="module"></script>

  <script async>
    const head = document.getElementsByTagName('head')[0];
    const link = document.createElement('link');
    link.id = 'mycss';
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '<?php echo get_stylesheet_directory_uri() ?>/style/style.css';
    link.media = 'all';
    head.appendChild(link);
  </script>
  <noscript>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style/style.css">
  </noscript>

<?php
});

// Disable gutenberg editor for posts
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
	return false;
}

function header_styles()
{
	wp_enqueue_style(
		'bootstrap',
		get_stylesheet_directory_uri() . '/vendor/bootstrap-4.6.0/css/bootstrap.min.css'
	);
	wp_enqueue_style(
		'bootstrap-grid',
		get_stylesheet_directory_uri() . '/vendor/bootstrap-4.6.0/css/bootstrap-grid.min.css'
	);
	wp_enqueue_style(
		'bootstrap-grid',
		get_stylesheet_directory_uri() . '/vendor/bootstrap-4.6.0/css/bootstrap-reboot.min.css'
	);
};

add_action('wp_enqueue_scripts', 'header_styles');
add_image_size( 'homepage-thumb', 200, 72, array( 'center', 'center' ) );
add_image_size( 'singlepage-thumb', 928, 300, array( 'center', 'center' ) );

add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}
?>

<?php add_shortcode( 'themedomain_frontend_post', 'themedomain_frontend_post' );
	function themedomain_frontend_post() {
		themedomain_post_if_submitted(); ?>
		<form id="new_post_form" class="new_post_form" name="new_post" method="post" enctype="multipart/form-data">
			<h3>Plaats een blog bericht</h3>

			<div class="row">
				<div class="col">
					<p><label for="title">Berichtnaam</label><br/>
						<input type="text" id="title" value="" tabindex="1" size="20" name="title" placeholder="Geen titel" class="input-field"/>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col pt-3">
					<p><label for="categorie">Categorie</label><br/>
						<?php wp_dropdown_categories( 'show_option_none=Geen categorie&tab_index=4&taxonomy=category' ); ?>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col pt-3">
					<p><label for="postimage">Header afbeelding</label>
					<div class="post-image-container">
						<i class="fas fa-camera"> </i>
						<input type="file" name="post_image" id="post_image" class="inputfile" aria-required="true"/>
						<label for="post_image">Kies bestand</label>
					</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col pt-4">
					<p><label for="bericht">Bericht</label><br/>
					<textarea name="content" class="input-field"></textarea>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col d-flex justify-content-center pt-3">
					<input type="submit" value="Bericht aanmaken" id="submit" name="submit" class="btn-primary"/>
				</div>
			</div>
		</form>
	<?php
} ?>

<?php
function themedomain_post_if_submitted() {
    // Stop running function if form wasn't submitted
    if ( !isset($_POST['title']) ) {
        return;
    }

    // Add the content of the form to $post as an array
    $post = array(
        'post_title'    => $_POST['title'],
        'post_content'  => $_POST['content'],
        'post_category' => array($_POST['cat']),
        'post_status'   => 'publish',   // Could be: publish
        'post_type' 	=> 'post' // Could be: 'page' or your CPT
    );
	$post_id = wp_insert_post($post);

	// For Featured Image
	if( !function_exists('wp_generate_attachment_metadata')){
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	}
	if($_FILES) {
		foreach( $_FILES as $file => $array ) {
			if($_FILES[$file]['error'] !== UPLOAD_ERR_OK){
				return "upload error : " . $_FILES[$file]['error'];
			}
			$attach_id = media_handle_upload( $file, $post_id );
		}
	}
	if($attach_id > 0) {
		update_post_meta( $post_id,'_thumbnail_id', $attach_id );
	}

    echo 'Blog post is nu aangemaakt!';
} ?>