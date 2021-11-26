<?php

/* 
Template Name: Services
*/
?>

<?php get_header('secondary'); ?>

<?php
echo ((!empty($errorMessage)) ? $errorMessage : '');
get_template_part('template-parts/services/services', 'page');
?>

<?php get_footer(); ?>