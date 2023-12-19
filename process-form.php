if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "jakegconnor@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    if (mail($to, $subject, $emailContent, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Failed to send the email. Please try again later.";
    }
}