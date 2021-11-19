<?php

/* 
Template Name: Contact Us
*/

?>

<?php get_header('secondary'); ?>
<?php
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $email = $_POST['email'];
  $note = $_POST['note'];
  $selected_area = filter_input(
    INPUT_POST,
    'areas_of_concern',
    FILTER_SANITIZE_STRING,
    FILTER_REQUIRE_ARRAY
  );
  $concerned_area = null;
  if(!$selected_area){
    foreach($selected_area as $concern_area){
      $concerned_area = $concern_area;
    }
  }
  $username = $_SESSION['USER_NAME'] = $user;
  $html = "User: - $user <br/>
          Email: - $email <br/>
          Areas of concern: - $concerned_area <br/>
          Note: $note <br/>
  ";
  
  $to = get_option('admin_email');
  $subject = "Tekup solution";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
  //dbjrfwlxtdrxbsck

  $sent = wp_mail($to, $subject, strip_tags($note), $headers);
        if($sent) {
          echo "<script>alert('done');</script>";
        }
        else  {
          echo "Error occur";
        }
}
?>
<?php
  get_template_part('template-parts/contact/contact', 'page');
?>

<?php get_footer(); ?>