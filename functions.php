<?php

/**
 * theme-tekup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme-tekup
 */

use PHPMailer\PHPMailer\PHPMailer;

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

if (!function_exists('theme_tekup_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function theme_tekup_setup()
  {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme-tekup, use a find and replace
		 * to change 'theme-tekup' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('theme-tekup', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    add_theme_support('menus');
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
      array(
        'menu-1' => esc_html__('Primary', 'theme-tekup'),
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
      )
    );


    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
      'custom-background',
      apply_filters(
        'theme_tekup_custom_background_args',
        array(
          'default-color' => 'ffffff',
          'default-image' => '',
        )
      )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
endif;
add_action('after_setup_theme', 'theme_tekup_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_tekup_content_width()
{
  $GLOBALS['content_width'] = apply_filters('theme_tekup_content_width', 640);
}
add_action('after_setup_theme', 'theme_tekup_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_tekup_widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'theme-tekup'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'theme-tekup'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'theme_tekup_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function theme_tekup_scripts()
{
  wp_enqueue_style('theme-tekup-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_style_add_data('theme-tekup-style', 'rtl', 'replace');

  wp_enqueue_script('theme-tekup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'theme_tekup_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

function load_css()
{
  wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
  wp_enqueue_style('style');

  wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
  wp_enqueue_style('owl-carousel');

    // wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    // wp_enqueue_style('owl-theme');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load JavaScript
function load_js()
{

  wp_register_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false, true);
  wp_enqueue_script('script');

  wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', false, true);
  wp_enqueue_script('owl-carousel');
}

add_action('wp_enqueue_scripts', 'load_js');


add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($phpmailer)
{
  $phpmailer->isSMTP();
  $phpmailer->Host       = 'smtp.gmail.com';
  $phpmailer->SMTPAuth   = true;
  $phpmailer->Port       = 465;
  $phpmailer->SMTPSecure = 'ssl';
  $phpmailer->Username   = get_option('admin_email');
  $phpmailer->Password   = 'lftilyxilhaeynke';
  $phpmailer->From       = 'tekup@gmail.com';
  $phpmailer->FromName   = 'Tekup Solutions';
}

$errors = [];
$message = '';
$errorMessage = '';

if (!empty($_POST)) {
  $name = sanitize_text_field($_POST['user']);
  $email = sanitize_text_field($_POST['email']);
  $message = sanitize_text_field($_POST['note']);

  $selected_area = (filter_input(
    INPUT_POST,
    'areas_of_concern',
    FILTER_SANITIZE_STRING,
    FILTER_REQUIRE_ARRAY
  ));



  $concerned_area = '';
  if (is_array($selected_area) || is_object($selected_area)) {
    foreach ($selected_area as $concern_area) {
      $concerned_area = $concern_area;
    }
  }

  if (empty($name)) {
    $errors[] = 'Name is empty';
  }

  if (empty($email)) {
    $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid';
  }
  if (empty($message)) {
    $errors[] = 'Message is empty';
  }


  if (empty($errors)) {
    $toEmail = 'hoa.le22@student.passerellesnumeriques.org';
    $emailSubject = 'Tekup Solution';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Area of concerned: {$concerned_area}", "Message: $message"];
    $body = join(PHP_EOL, $bodyParagraphs);
    if (wp_mail($toEmail, $emailSubject, $body, $headers)) {
      $message = "<p style='color: green;'>Thank you " . $name . " send email successful</p>";
      echo "<script>alert('$message');</script>";
    } else {
      $errorMessage = 'Oops, something went wrong. Please try again later';
    }
  } else {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
  }
}
