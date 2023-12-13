<?php
require_once 'components/modelo.php';
require_once("components/products.php");
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}

$obj_services = new Products();
$services = $obj_services->listarServicios();

$nfilasServices = count($services);

$obj_products = new Products();
$products = $obj_products->listarProducts();

$nfilasProducts = count($products);
?>

<style>
    <?php include 'styles.css';
    ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Coffe - home page</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
    <?php include_once 'components/header.php' ?>
    <main class="main">
        <section class="home-section">
            <div class="slider">
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>lorem impsum dolor si</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                    <div class="hero-dev-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>


            </div>
            <!-- <div class="left-arrow"><i class=" bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class=" bx bxs-right-arrow"></i></div> -->
        </section>
        <section class="thumb">
            <div class="box-container">
                <?php
                if ($nfilasServices > 0) {
                    foreach ($services as $resultado) {
                        echo "<div class='box'>";
                        echo "<img class='img' src='img/" . $resultado['image'] . "' alt=''>";
                        echo "<h3>" . $resultado['name'] . "</h3>";
                        echo "<p>" . $resultado['description'] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No hay noticias registradas";
                }
                ?>
            </div>
        </section>

        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/about-us.jpg">
                </div>
                <div class="box">
                    <img src="img/download.png">
                    <span>healthy tea</span>
                    <h1>save up to 50% off</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adialiquip cincididunt ut labore et dolore magna
                    </p>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="title">
                <img src="img/download.png">
                <h>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.jpg">
                <div class="row-detail">
                    <img src="img/basil.jpg">
                    <div class="top-footer">
                        <h1>a cup of green tea makes you healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <?php
                if ($nfilasProducts > 0) {
                    foreach ($products as $resultado) {
                        echo "<div class='box'>";
                        echo "<img src='img/" . $resultado['image'] . "' alt=''>";
                        echo "<div class='detail'>";
                        echo "<a href='view_products.php' class='btn'> shop Now</a>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No hay noticias registradas";
                }
                ?>
            </div>
        </section>

        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="img/6.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn"> shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/7.jpg" alt="">
                    <div class="detail">
                        <span>new in taste</span>
                        <h1>coffe house</h1>
                        <a href="view_products.php" class="btn"> shop now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="box-container-services">
                <img src="img/icon2.png" alt="">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every orders</p>
                </div>
            </div>
            <div class="box-container-services">
                <img src="img/icon1.png" alt="">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every orders</p>
                </div>
            </div>
            <div class="box-container-services">
                <img src="img/icon0.png" alt="">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every orders</p>
                </div>
            </div>
            <div class="box-container-services">
                <img src="img/icon.png" alt="">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every orders</p>
                </div>
            </div>
        </section>

        <section class="brand">
            <div class="box-container-services">
                <div class="box">
                    <img src="img/brand (1).jpg">
                </div>
            </div>
            <div class="box-container-services">
                <div class="box">
                    <img src="img/brand (2).jpg">
                </div>
            </div>
            <div class="box-container-services">
                <div class="box">
                    <img src="img/brand (3).jpg">
                </div>
            </div>
            <div class="box-container-services">
                <div class="box">
                    <img src="img/brand (4).jpg">
                </div>
            </div>
            <div class="box-container-services">
                <div class="box">
                    <img src="img/brand (5).jpg">
                </div>
            </div>

        </section>
        <!-- home slide end -->
        <?php include_once 'components/footer.php' ?>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include_once 'components/alert.php' ?>
</body>

</html>