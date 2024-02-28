<?php

if(isset($_POST['submit'])) {
    $mailto = "bzgames.info@gmail.com";
    $fromEmail = $_POST['email'];
    $subject = "Sign up for wait list";
    $subject2 = "Waitlist confirmation";

    $message = "Client Email";

    $confirmationMessage = "Thanks for signing up for the Cloud Bound waiting list.  You will be notified when the game is released!" . "/n/n"
    . "Regards," . "/n"
    . "Braedan";

    $headers = "From:  " . $fromEmail;
    $headers2 = "From:  " . $mailto;

    $result1 = mail($mailto, $subject, $message, $headers);
    $result2 = mail($fromEmail, $subject2, $confirmationMessage, $headers2);

    if ($result1 && $result2) {
        $success = "Your message was sent successfully!";
    } else {
        $failed = "Sorry!  Message was not sent, try again later.";
    }
}