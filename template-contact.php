<?php

/* 
Template Name: Contact Us
*/
?>
<?php get_header('secondary'); ?>
<?php
$errors = [];
$message = '';
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['user'];
    $email = $_POST['email'];
    $message = $_POST['note'];
    
    $selected_area = filter_input(
          INPUT_POST,
          'areas_of_concern',
          FILTER_SANITIZE_STRING,
          FILTER_REQUIRE_ARRAY
        );
       
        $concerned_area = '';
        if(is_array($selected_area) || is_object($selected_area)){
          foreach($selected_area as $concern_area){
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

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}","Area of concerned: {$concerned_area}", "Message: $message"];
        $body = join(PHP_EOL, $bodyParagraphs);
        if (wp_mail($toEmail, $emailSubject, $body, $headers)) {
            // header('Location: thank-you.html');
            $message = "<p style='color: green;'>Thank you ". $name ." send email successful</p>";
            echo "<script>alert('$message');</script>";
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}
?>

<?php
  echo((!empty($errorMessage)) ? $errorMessage : '');
  get_template_part('template-parts/contact/contact', 'page');
  // echo do_shortcode('[contact-form-7 id="8" title="Contact Us"]');
?>

<?php get_footer(); ?>