<?php
if(isset($_POST['submit'])) {
    $name_field = $_POST['name'];
$title_field = $_POST['title'];
$message_field = $_POST['message'];
$email_field = $_POST['email'];
$to = "info@prohealthtips.com.ng";

echo"Your Message has been received! I'll get back to you shortly";
mail($to, $title_field, $content);
}
else {
echo "blarg!";
}





?>
