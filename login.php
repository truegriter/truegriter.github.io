<?php
// Define the correct username and password
$correctUsername = 'your_username';
$correctPassword = 'your_password';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided credentials are correct
    if ($username === $correctUsername && $password === $correctPassword) {
        // Redirect to a success page or perform some action
        header('Location: success.html');
        exit();
    } else {
        echo '<p>Invalid username or password. Please try again.</p>';
    }
}
?>
