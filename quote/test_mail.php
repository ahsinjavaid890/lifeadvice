<?php
include_once 'includes/db_connect.php';
include_once 'mailer.php';

$email = 'shyamupwork@gmail.com';
$subject = 'Test Mail By Server lifeadvice';
$message = 'This is test mail content lifeadvice\n';
$message = 'Thanks';

$m = mailQuote($email, $subject, $message);
echo "okokok";