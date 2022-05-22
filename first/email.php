<?php
    $message = "Line1\nLine2\nLine3";

    $message = wordwrap($message, 70, "\r\n");

    mail('osamahu95@gmail.com', 'My Subject', $message);
?>