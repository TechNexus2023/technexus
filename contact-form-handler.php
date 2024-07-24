<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['Email']);
    $phone = htmlspecialchars($_POST['Phone']);
    $message = htmlspecialchars($_POST['message']);

    // Handle the form data, e.g., save to database or send email
    // For demonstration, we'll just echo the values
    echo "Name: $name\n";
    echo "Email: $email\n";
    echo "Phone: $phone\n";
    echo "Message: $message\n";
}
?>
