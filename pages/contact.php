<?php
include("../template/header.php")
?>

<div class="container mx-auto p-8 bg-gray-100">
    <h1 class="text-4xl font-bold mb-6">Contact Us</h1>

    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // In a real-world scenario, you would perform additional validation and processing here

    // Send email
    $to = "contact@boommint.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-type: text/html; charset=utf-8\r\n";

    $mailBody = "<p><strong>Name:</strong> $name</p>";
    $mailBody .= "<p><strong>Email:</strong> $email</p>";
    $mailBody .= "<p><strong>Message:</strong> $message</p>";

    // Use mail() function to send the email
    mail($to, $subject, $mailBody, $headers);

    // Display a confirmation message using JavaScript
    echo "<script>";
    echo "document.getElementById('confirmation-message').innerHTML = '<p class=\"mb-4 font-bold\">Thank you, $name! Your message has been received.</p><p>We have sent an email to contact@boommint.com with the details.</p>';";
    echo "</script>";
}
?>



    <!-- Contact Form -->
    <form action="" method="post" class="max-w-md mx-auto">
        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Your Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Your Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <!-- Message Input -->
        <div class="mb-6">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Your Message</label>
            <textarea id="message" name="message" rows="4" class="w-full border rounded px-3 py-2 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send Message</button>
    </form>

    <!-- Confirmation Message Container -->
    <div id="confirmation-message" class="mt-4"></div>
</div>

<!-- JavaScript for displaying confirmation message -->
<script>
    // JavaScript code to dynamically display the confirmation message
    // This script assumes the confirmation message container has the id 'confirmation-message'
    document.addEventListener('DOMContentLoaded', function () {
        <?php
            // Display confirmation message using JavaScript if set by PHP
            if (isset($name)) {
                echo "document.getElementById('confirmation-message').innerHTML = '<p class=\"mb-4 font-bold\">Thank you, $name! Your message has been received.</p><p>We have sent an email to contact@boommint.com with the details.</p>';";
            }
        ?>
    });
</script>


<?php
include("../template/footer.php")
?>