<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T-shirt Design Maker</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'
   integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6p9k6GdldI5ELryoq9RSJoMEe5I6E5Pd' crossorigin='anonymous'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <style>
   
  </style>
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

  
  <div id="buttons-container">
  <button class="button-design" onclick="customizeTshirt()"> Create Design</button>
  <button class="button-design" onclick="sendDataToServer()">Save design</button>
  <button class="button-design" onclick="addToCart()"> Add to cart</button>
  <button class="button-design" onclick="previousDesign()">Previous Designs</button>
</div>

<div id="tshirt-container">
  <div id="text-overlay" class="overlay"></div>
  <div id="logo-overlay" class="overlay"></div>
  <img id="tshirt-img" src="Tshirts-images\WhiteT-shirt1.png" alt="T-shirt">
  <div id="canvas-container"></div>
</div>

<div id="color-selector">
  <label for="color">T-shirt Color:</label>
  <select id="color" onchange="changeTshirtColor()">
    <option value="white">White</option>
    <option value="yellow">Yellow</option>
    <option value="pink">Pink</option>
    <option value="blue">Blue</option>
    <option value="baby-pink">Baby Pink</option>
  </select>
</div>

<div id="size-input">
  <label for="tshirt-size">T-shirt Size:</label>
  <select id="tshirt-size">
    <option value="s">Small</option>
    <option value="m">Medium</option>
    <option value="l">Large</option>
    <option value="xl">X-Large</option>
  </select>
</div>

<div id="logo-input">
  <label for="logo">Add Logo:</label>
  <input type="file" id="logo" accept="image/*" onchange="loadLogo()">
</div>

<div id="logo-size-input">
  <label for="logo-size">Logo Size:</label>
  <input type="number" id="logo-size" value="90" min="85" max="100" step="1" onchange="resizeLogo()">
</div>

<div id="text-controls" class="input-group">
  <div id="text-input" class="input-group">
    <label for="text">Add Text:</label>
    <input type="text" id="text" placeholder="Enter Word in your T-shirt">
  </div>

  <div id="design_name" class="input-group">
    <label for="design_name">Design Name:</label>
    <input type="text" id="design_name" placeholder="Enter Design Name">
  </div>

  <div id="text-color-input" class="input-group">
    <label for="text-color">Text Color:</label>
    <input type="color" id="text-color" value="#ffffff">
  </div>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="js/main.js"></script>
</body>

</html>