<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Design Maker</title>
</head>

<body>

<?php
// Update the database connection credentials accordingly
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sdesigns";

// Establish database connection
$conn = new mysqli("localhost","root","","tshirtdesignmaker");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve previous designs from the database
$result = $conn->query("SELECT * FROM design");

// Retrieve designs for the dropdown list
$dropdownResult = $conn->query("SELECT * FROM design");

?>

<!-- Dropdown list -->
<select id="designDropdown">
    <option value="">Select one of our designs ...</option>
    <?php while ($dropdownRow = $dropdownResult->fetch_assoc()) : ?>
        <!-- Use the URL of the logo as the value for each option -->
        <option value="<?= $dropdownRow["logo_url"] ?>">
        </option>
    <?php endwhile; ?>
</select>

<!-- Display Previous Designs -->
<?php if ($result->num_rows > 0) : ?>
    <h2>Previous Designs</h2>
    <table>
        <tr>
            <th>Logo</th>
            <th>T-shirt Image</th>
            <th>Logo Size</th>
            <th>Text Content</th>
            <th>Text Color</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><img src="<?= $row["logo_url"] ?>" width="100" height="100" /></td>
                <td><img src="<?= $row["tshirt_image_url"] ?>" width="100" height="100" /></td>
                <td><?= $row["logo_size"] ?></td>
                <td><?= $row["text_content"] ?></td>
                <td><?= $row["text_color"] ?></td>
                <td><?= $row["userID"] ?></td>

            </tr>
        <?php endwhile; ?>
    </table>
<?php else : ?>
    <p>No previous designs found.</p>
<?php endif; ?>

<!-- Additional HTML and JavaScript can be added as needed -->

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
