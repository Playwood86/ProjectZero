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

?>