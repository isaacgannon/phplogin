<?php 
  include_once 'db.php';  
  if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>I Want Flowers</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="Products.php" class="nav-link " >Products</a></li>
            <li class="nav-item"><a href="locations.php" class="nav-link">Store Location</a></li>
            <li class="nav-item"><a href="Contact.php" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
          
          </ul>
        </header>
      </div>
      <img src="https://cdn.pixabay.com/photo/2017/02/15/20/33/floral-2069810_960_720.png">
      <h3  style="text-align: center;">I want Flowers</h3>
      <p style="text-align: center;">I want flowes is a flower seller based in australia. We grow flowers and deliver them if you need. Please feel free to check out our store or contact us. </p>

    <!-- TODO: Here goes your content! -->

    
    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div style="text-align: center;">© 2020 Copyright:
        <a href="xyz"> Isaac Gannon</a>
      </div>
    
  </body>
</html>