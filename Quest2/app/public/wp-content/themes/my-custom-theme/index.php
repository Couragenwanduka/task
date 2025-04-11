<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_header(); ?>

<!-- Hero Section -->
<?php get_template_part('template-parts/hero'); ?>
<?php get_template_part('template-parts/feature'); ?>
<?php get_template_part('template-parts/about'); ?>
<?php get_template_part('template-parts/service'); ?>
<?php get_template_part('template-parts/footer'); ?>




<?php wp_footer(); ?>
</body>
</html>
