<?php

/* 
Template Name: Contact Us
*/

use PHPMailer\PHPMailer\PHPMailer;

?>

<?php get_header('secondary'); ?>
<?php
// if(isset($_POST['submit'])){
//   $user = $_POST['user'];
//   $email = $_POST['email'];
//   $note = $_POST['note'];
//   $selected_area = filter_input(
//     INPUT_POST,
//     'areas_of_concern',
//     FILTER_SANITIZE_STRING,
//     FILTER_REQUIRE_ARRAY
//   );
//   $concerned_area = null;
//   if(!$selected_area){
//     foreach($selected_area as $concern_area){
//       $concerned_area = $concern_area;
//     }
//   }

//   $username = $_SESSION['USER_NAME'] = $user;
//   $html = "User: - $user <br/>
//           Email: - $email <br/>
//           Areas of concern: - $concerned_area <br/>
//           Note: $note <br/>
//   ";
  
//   include('phpmailer/phpMailerAutoload.php');
//   $mail = new PHPMailer(true);
//   $mail->isSMTP();
//   $mail->Host="smtp.gmail.com";
//   $mail->Port = 587;
//   $mail->SMTPSecure="tls";
//   $mail->SMTPAuth=true;
//   $mail->Username="khua.ho22@student.passerellesnumeriques.org";
//   $mail->Password="dghiotypwrrvqntd";
//   $mail->setFrom("khua.ho22@student.passerellesnumeriques.org");
//   $mail->addAddress('hokhua3@gmail.com');

//   $mail->isHTML(true);
//   $mail->Subject="Thanks for contacting to our Tekup Solution Company";
//   $mail->Body=$html;
//   $mail->SMTPOptions=array('tls'=>array(
// 		'verify_peer'=>false,
// 		'verify_peer_name'=>false,
// 		'allow_self_signed'=>false
// 	));
//   if($mail->send()){
// 		echo "<script>alert('done');</script>";
// 	}else{
// 		echo "Error occur";
// 	}
// }
?>
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
  
  include('phpmailer/phpMailerAutoload.php');
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPSecure="tls";
  $mail->SMTPAuth=true;
  $mail->Username="khua.ho22@student.passerellesnumeriques.org";
  $mail->Password="dghiotypwrrvqntd";
  $mail->setFrom("khua.ho22@student.passerellesnumeriques.org");
  $mail->addAddress('hokhua3@gmail.com');

  $mail->isHTML(true);
  $mail->Subject="Thanks for contacting to our Tekup Solution Company";
  $mail->Body=$html;
  $mail->SMTPOptions=array('tls'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
  if($mail->send()){
		echo "<script>alert('done');</script>";
	}else{
		echo "Error occur";
	}
}
  get_template_part('template-parts/contact/contact', 'page');
?>

<?php get_footer(); ?>