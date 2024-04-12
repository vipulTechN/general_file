<?php
session_start();
$email = $_SESSION['email'];
unset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="j5gfertm2w2518vsz08dmzoga1i9cn" />
    <meta http-equiv = "refresh" content = "2; url =https://arvindsmartspaces.site/arvind-forest-trails-villa-Sarjapur-rd-bangalore/" />
    <link href="css/" rel="stylesheet" type="text/css" media="all">
    <title>Thank you</title>
  <link rel="icon" href="img/favicon.ico">
    <style>
        .thank{
            font-size: 70px;
            text-align: center;
            padding: 50px;
            color: #2d4165;
        }
    </style>
</head>
<body style="background: whitesmoke;">
        <p class="thank">Thank you for Submitting..<br><span style="font-size:20px;"><?php echo "Email: " . $email;?></span></p>
        <div style="text-align: center;">
            <a href="/"><button class="btn btn-primary" style="font-size: 20px;">Visit Our Site</button></a>
        </div>
</body>
</html>
