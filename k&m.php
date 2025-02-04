<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Define the recipient email address
    $to = "kmspotless24@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    
    // Prepare the email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Message:\n$message\n";
    
    // Set email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        // If the email is sent successfully, show a thank you message
        echo "Thank you for your message, we will get back to you soon!";
    } else {
        // If there's an error sending the email, show an error message
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
