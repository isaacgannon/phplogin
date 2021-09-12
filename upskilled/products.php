<?php 
  SESSION_START();
  if (isset($_POST['add_to_cart']) || isset($_POST['id']) || isset($_POST['name']) || isset($_POST['price']) ||  isset($_POST['quantity']) ){
    if (isset($_SESSION['cart'])){
      $session_array_id = array_column($_SESSION['cart'], "id");
      if (!in_array($_GET['id'], $session_array_id)){
        $session_array = array(
          "id"=> $_GET['id'],
          "name"=> $_POST['name'],
          "price"=> $_POST['price'],
          "quantity"=> $_POST["quantity"]
        );
        $_SESSION['cart'][] = $session_array;
      } else {
        foreach($_SESSION['cart'] as $key => $product){
          if($product['id'] == $_GET['id']) {
            $_SESSION['cart'][$key]['quantity'] = $_POST["quantity"];
          }
        }
      }
    }else{
      $session_array = array(
        "id"=> $_GET['id'],
        "name"=> $_POST['name'],
        "price"=> $_POST['price'],
        "quantity"=> $_POST["quantity"]
      );
      $_SESSION['cart'][] = $session_array;
    }
  }
  if (isset($_GET['action'])){
    foreach($_SESSION['cart'] as $key => $product){
      if($product['id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
      }
    }
  }
   // $session_array = arr/ay(
  include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>I Want Flowers</title>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css" media="screen">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Products.php" class="nav-link active" aria-current="page">Products</a></li>
                    <li class="nav-item"><a href="locations.php" class="nav-link">Store Location</a></li>
                    <li class="nav-item"><a href="Contact.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                </ul>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h2 class="text-center">Poducts</h2>
                <div class="col-md-12">
                    <div class="row">

                        <?php
                            $sql = "SELECT * FROM `flowers`;";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)){ ?>
                            <div class="col-md-4">
                                <form method="post" action="products.php?id=<?=$row["id"]?>">
                                    <img src="https://cdn.pixabay.com/photo/2017/06/14/01/04/pink-2400703_960_720.jpg"style='height: 150px;'>
                                    <h5 class="text-center"><?= $row['name']; ?></h5>
                                    <h5 class="text-center">$<?= $row['price']; ?></h5>
                                    <input type="hidden" name="name" value="<?=$row['name'] ?>">
                                    <input type="hidden" name="price" value="<?=$row['price'] ?>">
                                    <input type="number" name="quantity" value="1" class="form-control">
                                    <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="add to cart">
                                </form>
                            </div>
                            <?php }

                            if(false === $result)
                            {
                                echo mysqli_error($conn);
                                exit;
                            }
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
            <h2 class="text-center">Cart</h2>
                <?php
                $output = "";

                $output .= "
                <table class='table table-bordered table-striped'>
                <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Item Quantity</th>
                <th>Total Price</th>
                <th>action</th>
                ";

                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $output .= "
                        <tr>
                        <td>".$value["id"]."</td>
                        <td>".$value['name']."</td>
                        <td>".$value['price']."</td>
                        <td>".$value['quantity']."</td>
                        <td>$".number_format($value['price'] * $value['quantity'])."</td>
                        <td>
                        <a href='products.php?action=remove&id=".$value['id']."'>
                        <button class='btn btn-danger btn-block'>Remove</button>
                        </a>
                        </td>
                        

                        ";
                    }
                }
                echo $output;
                ?>
                <a href='checkout.php'>Purchase the contents of your cart here</a>
               
        </div>
        
    </div>
</html>