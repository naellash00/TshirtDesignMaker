<?php
// save.php

include('conn.php');
// Extract data from the received POST data
$userID = $_POST['userID'] ?? '';
$tshirtImageURL = $_POST['tshirtImageURL'] ?? '';
$logoSize = $_POST['logoSize'] ?? '';
$textContent = $_POST['textContent'] ?? '';
$textColor = $_POST['textColor'] ?? '';
$logoURL = $_POST['logoURL'] ?? '';


// Save file URLs to the database
$stmt = $conn->prepare("INSERT INTO design(userID, tshirt_image_url, logo_size, text_content, text_color ,logo_url) VALUES (?, ?, ?, ?, ? ,?)");
$stmt->bind_param("ssssss", $userID, $tshirtImageURL, $logoSize, $textContent, $textColor, $logoURL);

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
