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
    <a class="navbar-brand" href="index.php"><i class=""></i>&nbsp;&nbsp; T-shirt Design Maker </a>
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
          <a class="nav-link " href="../signup_and_login/index.php"><i class="bi bi-person-fill"></i>  Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../payment-code/cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a><!-- for cart page -->
        </li>
      </ul>
    </div>
  </nav>
    <!-- Navbar end -->
<body>

<div class="container mt-5">
    <?php
    include('conn.php');
    // إنشاء اتصال بقاعدة البيانات
    
    // استعلام SQL لاسترجاع بيانات التصاميم
    $sql = "SELECT * FROM prevdesigns";
    $result = $conn->query($sql);

    // عرض البيانات بتنسيق بطاقة Bootstrap
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
          <div class="card" style="width: 18rem;">
              <img src="' . $row['logo_url'] . '" class="card-img-top" alt="Design Image">
              <div class="card-body">
                  <h5 class="card-title">User ID: ' . $row['user_id'] . '</h5>
                  <p class="card-text">
                      <strong>Design Name:</strong> ' . $row['design_name'] . '<br>
                      <strong>Logo Size:</strong> ' . $row['logo_size'] . '<br>
                      <strong>Text Color URL:</strong> ' . $row['tscolor_url'] . '<br>
                      <strong>Words:</strong> ' . $row['words'] . '<br>
                      <strong>Words Color:</strong> ' . $row['words_color'] . '
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
      ';
      
        }
    } else {
        echo "لا توجد بيانات لعرضها.";
    }

    // قم بإغلاق اتصال قاعدة البيانات
    $conn->close();
    ?>
</div>

<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
