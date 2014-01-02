<?php
$to = "info@nigeriadialogue.org";
extract($_POST);
$from = $email;
$message = "Name: $name\r\n
Email Address: $email\r\n
Phone Number: $phone\r\n
Address: $address\r\n
Number of people: $people\r\n";

 
// Send the message
$ok = @mail($to, "Gala Night Registration", $message,  "From: $email, $name");

// -- Send Another Message to SENDER
$message2 = "<html>
<head>
<title></title>
<style>
a:hover { color: red }
</style>
</head>
<body link='#0000FF' vlink='#0000FF' alink='#0000FF'>
<br><a href=''><img src='http://icebergng.com/nigeria_dialogue_beta/gala/images/nigeria_dialogue_logo.png'></a>
<p><font face='Verdana' size='2'>Hello $name,<br><br>
Your Registration for the Nigeria Dialogue Gala Night has been recieved and is currently being processed.<br><br>
You will be contacted shortly.<br><br>
Thank you for showing interest in Nigeria Dialogue.<p><br><br><hr>
Nigeria Dialogue Support Team.<br><br>
<b>Telephone:</b>  <br>
<b>E-mail:</b> info@nigeriadialogue.com<br>
<b>website:</b> www.nigeriadialogue.com
</font></p><p>
<hr>
</body>
</html>";

$to = $HTTP_POST_VARS['email'];
$subject = "Re: Message to Nigeria Dialogue";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "To: ". $to ."\r\n";
$headers .= "From: info@nigeriadialogue.com <Nigeria Dialogue Support Team>\r\n";

@mail($email, $subject, $message2, $headers);


// -- Goto Another Page
header("location:register2.html");

?>
