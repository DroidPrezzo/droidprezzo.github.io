<?php
if(isset($_POST['submit'])) {
    $name_field = $_POST['name'];
$title_field = $_POST['title'];
$message_field = $_POST['message'];
$email_field = $_POST['email'];
$to = "info@prohealthtips.com.ng";

$contactTxt = fopen('message-from-contact.txt', 'a')
or die('Please try again later! Unable to show your message at this time');
$content="message from"$name_field\n"Email:" $email_field\n"Title:" $title_field\n"Message:" $message_field;
fwrite($contactTxt, $content);
fclose($contactTxt);
echo"Your Message has been received! I'll get back to you shortly"
mail($to, $title_field, $content);
}
else {
echo "blarg!"}





?>
