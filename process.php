<?php

    $to = "";
    $from = $_REQUEST['Name'];
    $subject = $_REQUEST['Subject'];
    $name = $_REQUEST['Name'];
    $headers = "From: $From";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email";
    $fields{"subject"} = "Subject";
    $fields{"message"} = "Message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
