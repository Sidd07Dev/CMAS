<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Include PHPMailer autoloader
require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer();

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com'; // SMTP server address
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'support@cmas.co.in'; // SMTP username
    $mail->Password = 'Support@123'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    $html_card = '
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for email */
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            color: #333;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        @media (max-width: 576px) {
            .card {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   
                    <div class="card-header text-center">
                        <!-- <img src="https://www.shailabalawomenscollege.com/wp-content/uploads/2017/06/logo-sbwac.png" alt="Company Logo" class="img-fluid mb-3" style="max-width: 200px;"> -->
                        <img class="card-img-top" src="https://www.shailabalawomenscollege.com/wp-content/uploads/2017/06/logo-sbwac.png" alt="Card image cap">
                        <h4>Your New Account Information</h4>
                    </div>
                    <div class="card-body">
                        <p>Dear [User Name],</p>
                        <p>We are pleased to inform you that your account has been successfully created. Below are your login credentials:</p>
                        <ul class="list-group">
                            <li class="list-group-item">User ID: [User UID]</li>
                            <li class="list-group-item">Password: [User Password]</li>
                        </ul>
                        <p>Please keep this information secure and do not share it with anyone else. If you have any questions or need further assistance, feel free to contact our support team at <a href="mailto:support@cmas.co.in">support@cmas.co.in</a>.</p>
                        
                        <p>Best regards,<br>cmas.co.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


    ';

    // Sender and recipient settings
    $mail->setFrom('support@cmas.co.in', 'CMAS'); // Set custom 'From' address
    $mail->addAddress('happisidhanta@gmail.com', 'Recipient Name');

    // Email content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Account Creation';
    $mail->Body = $html_card;

    // Send email
    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email sending failed.';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
