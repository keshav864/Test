<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty($name) || empty($email) || empty($message)) {
        echo "Error: Please fill out all required fields.";
    } else {
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
        
        $to = "your@example.com";
        $subject = "New Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        mail($to, $subject, $body);
    }
} else {
    echo "Error: Invalid request.";
}
?>
