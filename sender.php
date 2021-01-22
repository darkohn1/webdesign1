<?php
$errors = [];
$toEmail = 'darko@different.mk';

if (empty($_POST['email'])) {
    //dokolku poleto email e prazno
    $errors[] = 'Email is empty'; 
} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //dokolku vo poleto email ima ne-validna email adresa
    $errors[] = 'Email is invalid'; 
} else {
    //dokolku nitu eden od gornite uslovi ne se tocni
    //odnosno, ima nesto napisano vo poleto Email
    // ili dokolku napisanoto vo poleto Email e validna e-mail adresa
    $content = '<html><body>';
    $content .= '<p>Name: '.$_POST['name'].'</p>';
    $content .= '<p>Email: '.$_POST['email'].'</p>';
    $content .= '<p>Message: '.$_POST['message'].'</p>';
    $content .= '</body></html>';

    $headers = "From: ".strip_tags($_POST['name'])."\r\n";
    $headers .= "Reply-To: ".strip_tags($_POST['email'])."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ( mail($toEmail, 'Gambo contact form submission', $content, $headers) ) { 
        //SUCCESS
        echo 'Success';
    } else {
        //ERROR
        echo 'Error';
    }
}

print_r($errors);


?>