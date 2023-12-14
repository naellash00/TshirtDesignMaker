
<?php
// save.php


// Update the database connection credentials accordingly
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tshirtdesignmaker";

// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'tshirtdesignmaker');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Extract data from the received POST data
// البيانات التي تريد إدخالها
$logoURL = $_POST['logo_url'] ?? '';
$logoSize = $_POST['logo_size'] ?? '';
$tscolorURL = $_POST['tscolor_url'] ?? '';
$words = $_POST['words'] ?? '';
$wordsColor = $_POST['words_color'] ?? '';
$designID = $_POST['design_id'] ?? '';
$priProduct = $_POST['priproduct'] ?? '';
$quantity = $_POST['quantity'] ?? '';
$userID = $_POST['user_id'] ?? '';




// Save file URLs to the database
$stmt = $conn->prepare("INSERT INTO prevdesigns (logo_url, logo_size, tscolor_url, words, words_color, design_id, priproduct, quantity, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $logoURL, $logoSize, $tscolorURL, $words, $wordsColor, $designID, $priProduct, $quantity, $userID);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Design saved successfully!";
} else {
    echo "Failed to save design.";
}



// Close the statement and database connection
$stmt->close();
$conn->close();
?>
