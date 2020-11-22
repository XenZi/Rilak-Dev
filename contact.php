<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];
    $phone=$_POST['phone'];
    $mailTo="rilakmateja@gmail.com";

    $email_subject = "Website Contact Form:  $name";
    $email_body = "Dobio si novu poruku sa kontakt forme tvog website-a.\n\n"."Evo su detalji:\n\nIme: $name\n\nEmail: $mailFrom\n\nPhone:$phone\n\nPoruka:\n$message";
    $headers = "From: info@rilak-dev.com";
    mail($mailTo,$email_subject,$email_body,$headers);
    header("Location: index.html?mailsend");
}