<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Design Maker</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>
    <!-- Navbar start -->
    
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #fde3e9;">
        <a class="navbar-brand" href="index.php"><i class=""></i>&nbsp;&nbsp; T-shirt Design Maker </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div style="display: flex; justify-content: flex-end;">
  <button class="button-design" onclick="saveDesign()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
      <path d="M11 2H9v3h2z" />
      <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5M3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
    </svg>
    Save Design
  </button>

  <button class="button-design" onclick="addToCart()">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
      <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 
      0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5
       0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
    </svg>
    Add To Cart
  </button>

  <button class="button-design" onclick="customizeTshirt()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
      <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z"/>
      <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0"/>
    </svg>
    Create
  </button>

        </div>
    </nav>
    <!-- Navbar end -->

    <div class="jumbotron bg-light">
  <div class="container m-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
        <div id="app">

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
                <input type="text" id="text" placeholder="Enter text">
            </div>

<div id="text-color-input" class="input-group">
                <label for="text-color">Text Color:</label>
                <input type="color" id="text-color" value="#ffffff">
            </div>
</div>

        <div id="buttons-container">
            <button class="button-design" onclick="previousDesign()">Previous Designs</button>
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
