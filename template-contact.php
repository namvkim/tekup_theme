<?php
/* 
Template Name: Contact Us
*/
?>
<?php get_header('secondary'); ?>

<?php
echo ((!empty($errorMessage)) ? $errorMessage : '');
get_template_part('template-parts/contact/contact', 'page');
?>

<?php get_footer(); ?>