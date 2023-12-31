<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Design Maker</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
  <!-- Navbar start -->
  <!-- first tag to Navbar -->
  <!--navbar-expand makes you responsive -->
  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #fde3e9;">
    <!-- Brand -->
    <a class="navbar-brand" href="../payment-code/index.php"><i class=""></i>&nbsp;&nbsp; T-shirt Design Maker </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../payment-code/checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a><!-- for Checkout page -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../shippmentTrack/index.php"><i class="bi bi-truck"></i> Tracking</a><!-- for track page -->
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../signup_and_login/index.php"><i class="bi bi-person-fill"></i> Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../payment-code/cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a><!-- for cart page -->
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->
<div class="container mt-5">

    <?php
    // اتصال بقاعدة البيانات
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tshirtdesignmaker";

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'tshirtdesignmaker');

    // فحص الاتصال
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // استعلام SQL لاسترجاع البيانات من قاعدة البيانات
    $sql = "SELECT * FROM prevdesigns";
    $result = $conn->query($sql);

    // عرض البيانات في تصميم Bootstrap
    if ($result->num_rows > 0) {
      echo '<div class="row row-cols-1 row-cols-md-3 g-4">'; // Start the row

      while ($row = $result->fetch_assoc()) {
          echo '
              <div class="col">
                  <div class="card">
                      <img src="' . $row["tscolor_url"] . '" class="card-img-top" alt="T-shirt">
                      <div class="card-body">
                          <h5 class="card-title">Design number: ' . $row["design_id"] . '</h5>
                          <p class="card-text">' . $row["words"] . '</p>
                      </div>
                  </div>
              </div>';
      }

      echo '</div>'; // End the row
  } else {
      echo "0 results";
  }

  // إغلاق الاتصال بقاعدة البيانات
  $conn->close();
  ?>
</div>

</body>

