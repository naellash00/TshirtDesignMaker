<?php
// save.php

include('conn.php');

// Extract data from the received POST data
$userID = $_POST['user_id'] ?? '';
$logoURL = $_POST['logo_url'] ?? '';
$logoSize = $_POST['logo_size'] ?? '';
$tscolorURL = $_POST['tscolor_url'] ?? '';
$words = $_POST['words'] ?? '';
$wordsColor = $_POST['words_color'] ?? '';
$designName = $_POST['design_name'] ?? '';

// Check if required data is present
if (isset('user_id', 'logo_url', 'logo_size', 'tscolor_url',' words', 'words_color', 'design_name')) {
    // Save file URLs to the database using prepared statement
    $stmt = $conn->prepare("INSERT INTO prevdesigns (user_id, logo_url, logo_size, tscolor_url, words, words_color, design_name) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $userID, $logoURL, $logoSize, $tscolorURL, $words, $wordsColor, $designName);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Design saved successfully!";
    } else {
        echo "Failed to save design.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Missing required data.";
}

// Close the database connection
$conn->close();
?>
