<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and header section
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<?php
  $blogname = get_bloginfo( 'name' );
?>

<body <?php body_class(); ?>>
  <header id="bodyHeader">
    <a href="<?php bloginfo( 'wpurl' ); ?>">
      <?php echo $blogname ?>
    </a>
  </header>