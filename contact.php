<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Konfigurasi nomor WhatsApp (gantikan dengan nomor WhatsApp Anda)
    $phone_number = "+6287719973503";
    
    // Format pesan untuk WhatsApp
    $whatsapp_message = "Name: " . $name . "%0AEmail: " . $email . "%0AMessage: " . $message;

    // Redirect ke WhatsApp
    $url = "https://api.whatsapp.com/send?phone=" . $phone_number . "&text=" . $whatsapp_message;
    header("Location: " . $url);
    exit();
}
?>
