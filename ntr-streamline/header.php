<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
  <body class="<?php body_class(); ?>">
    <div class="site-wrapper">
      <header class="site-header"><?php get_template_part('site', 'banner'); ?></header>

        <?php do_action('sl_before_content();'); ?>

      <section class="site-content"> <?php // this could be included in the action ?>
