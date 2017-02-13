<?php




/**
 * Actions hooks
 */
// add code before the main content and after the header (hook found in header.php)
function sl_before_content_setup(){
  // start of the main content container
?>
  <section class="site-content">
<?php
}
add_action('sl_before_content', 'sl_before_content_setup');

// add code after the main content and before the footer (hook found in footer.php)
function sl_after_content_setup(){
  // end of the main content container
?>
  </section> <!-- .site-content -->
<?php
}
add_action('sl_after_content', 'sl_after_content_setup');
