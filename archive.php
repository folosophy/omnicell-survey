<?php /* Template Name: Posts Archive */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php bloginfo('name'); echo ' | '; the_title() ?></title>
<?php wp_head(); ?>
</head>

<html>
<body>
<?php get_header(); ?>
<?php while (have_posts()) : the_post() ?>

 

<?php endwhile ?>
<?php get_footer(); ?>
