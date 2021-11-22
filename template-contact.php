<?php
/* 
Template Name: Contact Us
*/
?>
<?php get_header('secondary'); ?>

<?php
echo ((!empty($errorMessage)) ? $errorMessage : '');
get_template_part('template-parts/contact/contact', 'page');
// echo do_shortcode('[contact-form-7 id="8" title="Contact Us"]');
?>

<?php get_footer(); ?>