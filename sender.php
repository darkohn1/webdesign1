<?php
    $toEmail = "admin@phppot_samples.com";
   
    $content = '<html><body>';
    $content .= '<p>Name: '.$_POST['userName'].'</p>';
    $content .= '<p>Email: '.$_POST['userEmail'].'</p>';
    $content .= '<p>Content: '.$_POST['content'].'</p>';
    $content .= '<p>Phone: '.$_POST['phone'].'</p>';
    $content .= '</body></html>';

    $headers = "From: ".strip_tags($_POST['userName'])."\r\n";
    $headers .= "Reply-To: ".strip_tags($_POST['userEmail'])."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if(mail($toEmail, $_POST["subject"],$content , $headers)) {
            
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>