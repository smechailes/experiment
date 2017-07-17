<?php include "head.php";?>
$from= "smechailes@gmail.com";
$Headers = "";
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-type: text/html; Charset= iso-859-1 \r\n";
$header .="From ".$from." \r\n";
$to = "setok321@gmail.com";
$subject = "test-mail";
$message ="<h1>hello</h1>";
$mail = mail($to, $subject, $message, $header);
echo (int)$mail;

<?php include "foot.php";?>