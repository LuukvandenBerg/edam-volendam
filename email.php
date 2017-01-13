<?php
 
if(isset($_POST['email'])) {
 
    
 
    $email_to = "21897@ma-web.nl";
 
    $email_subject = "Vraag Van Klomp Tot Kunst";
     
 
    function died($error) {
 
        echo "Sorry, maar het formulier is niet compleet!.<br />";
 
        echo "Deze fouten verschijnen hier onder:<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Het zou fijn zijn als u deze fouten verbeterd!<br /><br />";
 
        die();
 
    }
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('Sorry, maar het formulier is niet compleet.');       
 
    }
 
     
 
    $first_name = $_POST['first_name'];
 
    $last_name = $_POST['last_name'];
 
    $email_from = $_POST['email'];
 
    $telephone = $_POST['telephone'];
 
    $comments = $_POST['comments'];
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'Sorry, maar uw e-mail adres klopt niet.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'Sorry, maar uw voornaam klopt niet.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'Sorry, maar uw achternaam klopt niet.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'Sorry, maar uw vraag klopt niet.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Details:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Voornaam: ".clean_string($first_name)."\n";
 
    $email_message .= "Achternaam: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telefoonnummer: ".clean_string($telephone)."\n";
 
    $email_message .= "Vraag: ".clean_string($comments)."\n";
 
     
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
	
	echo "<script>
		alert('Het bericht is verzonden, wij proberen zo snel mogelijk contact met u op te nemen. U word nu teruggeleid naar de homepage.');
		window.location.href='http://21897.hosts.ma-cloud.nl/bewijzenmap/jaar2/periode2/Edam_Volendam/Website/';
		</script>";
	
	
}
?>