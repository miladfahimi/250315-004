<?php get_header(); ?>
<?php get_template_part('template-parts/hero'); ?>
<?php get_template_part('template-parts/favorite-categories'); ?>
<?php get_template_part('template-parts/promotions', null, array('location' => 'First'));?>
<?php get_template_part('template-parts/brands-hardcode');?>
<!-- <?php get_template_part('template-parts/brands');?> -->
<?php get_template_part('template-parts/discounts');?>
<?php get_template_part('template-parts/promotions', null, array('location' => 'second'));?>
<?php get_template_part('template-parts/newest');?>
<?php get_template_part('template-parts/ultimate');?>
<?php get_template_part('template-parts/best-sale', null, array('location' => 'best-sales'));?>
<?php get_template_part('template-parts/shoes', null, array('location' => 'shoes'));?>
<?php get_template_part('template-parts/promotions', null, array('location' => 'third'));?>
<?php get_template_part('template-parts/strings');?>
<?php get_template_part('template-parts/promotions', null, array('location' => 'First'));?>
<?php get_template_part('template-parts/best-player');?>

<?php get_template_part('template-parts/promotions', null, array('location' => 'third'));?>




<?php get_footer(); ?>