<?php

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$fromEmail = 'admin@zcportfolio.com';

$subject = 'Contact Request From';

$body = "Name: $name \n" .
    "Email: $email\n" .
    "Message: $message\n";


$toEmail = "zach@raincitysolutions.com";

$headers = "From: $fromEmail \r\n";

$headers .= "Reply-To: $email \r\n";

mail($toEmail, $subject, $body, $headers);

?>
    <!-- Javascript -->
<script>
    confirm('Thanks for contacting me!');
</script>

<?php

header("location: ../index.php");

?>