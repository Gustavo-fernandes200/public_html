<?php
if(isset($_POST['send'])){
    $to = '';
    $subject = '';
    $message = '';
    $headers = '';

    if(mail($to,$subject,$message,$headers)){
        echo'';
    }else{
        echo'';
    }
}
?>