<?php
    var_dump($_POST);
    file_put_contents('emails.txt', $_POST["email"])
?>