<?php
// get the header.php File
get_header();
?>

<div class="primary-col">
  <main class="site-main">
    <?php
/*
    if we have posts:
      then while we have posts:
        for each post:
          get the template part for content-(post type)
      else, get the template part for content-none
*/
    ?>
  </main>
</div>
<div class="secondary-col">
  <?php get_sidebar(); ?>
</div>
<?php get_footer();
