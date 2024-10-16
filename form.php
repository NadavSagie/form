<?php
// פרטים של השולח (החלף בפרטים שלך)
$to = "your_email@example.com";
$subject = "New Registration";

// קבלת נתונים מהטופס
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// יצירת תוכן המייל
$message_body = "
Name: $name
Email: $email
Message: $message
";

// הגדרות SMTP (החלף בפרטים של ספק הדואר שלך)
$host = 'smtp.example.com';
$port = 587;
$username = 'your_email@example.com';
$password = 'your_password';

// יצירת אובייקט Mailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = $host;
$mail->Port = $port;
$mail->SMTPAuth = true;
$mail->Username = $username;
$mail->Password = $password;
// ... הגדרות נוספות בהתאם לספק הדואר שלך

// הגדרת הנמען והתוכן
$mail->setFrom('your_email@example.com', 'Your Name');
$mail.