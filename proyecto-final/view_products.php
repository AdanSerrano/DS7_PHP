<?php
include 'components/modelo.php';
require_once("components/products.php");
session_start();

$obj_products = new Products();
$products = $obj_products->listarProducts();

$nfilas = count($products);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Coffe - home page</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <style>
        <?php include 'styles.css';
        ?>
    </style>
</head>

<body>
    <?php include_once 'components/header.php'; ?>
    <main class="main">
        <section class="banner">
            <h1>Products</h1>
        </section>
        <section class="title2">
            <a href="home.php">home </a><span>/ our shop</span>
        </section>

        <button type="submit" name="add_to_cart"></button>
        <section class="products">
            <section class="box-container">
                <?php
                if ($nfilas > 0) {
                    foreach ($products as $resultado) {
                        echo "<div class='content'>";
                        echo "<img class='img' src='img/" . $resultado['image'] . "' alt=''>";
                        echo "<h3>" . $resultado['name'] . "</h3>";
                        echo "<p class='price'>" . $resultado['price'] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No hay noticias registradas";
                }
                ?>
            </section>
        </section>
        <?php include_once 'components/footer.php'; ?>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include_once 'components/alert.php'; ?>
</body>

</html>