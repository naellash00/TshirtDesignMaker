<?php

include ('form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
      <!-- Take the order number from the user and check -->
    <div class = "main">
    <h1>Shipment Tracking </h1><br>
    <i>please enter your order number</i> <br> <br>
    <form action="index.php" method = "POST">
        <input type="text" name = "orderNumber" id= "orderNumber"><br>
        <br>
        <input type="submit" name = "submit" id = "submit" value = "Track" ><br>
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
         <!-- if there is no errors show the bar -->
        <?php
        if (isset (($_POST ['submit']))){
            if(!isset($error)){
                include ('orderStatus.php');
            }
        }
        ?>

    </form>
    </div>
  </div>
</body>
</html>

