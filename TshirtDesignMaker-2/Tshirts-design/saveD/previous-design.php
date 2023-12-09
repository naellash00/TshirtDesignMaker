<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Design Maker</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
<!-- Navbar start -->
  <!-- first tag to Navbar -->
  <!--navbar-expand makes you responsive -->
  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #fde3e9;">
  <!-- Brand -->
    <a class="navbar-brand" href="index.php"><i class=""></i>&nbsp;&nbsp; T-shirt Design Maker </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a><!-- for Checkout page -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../shippmentTrack/index.php"><i class="bi bi-truck"></i> Tracking</a><!-- for track page -->
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../signup_and_login/index.php"><i class="bi bi-person-fill"></i>  Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a><!-- for cart page -->
        </li>
      </ul>
    </div>
  </nav>
    <!-- Navbar end -->
<?php

include('conn.php');
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
