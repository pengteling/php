<?

$to = "33460202@qq.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "33460202@qq.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
