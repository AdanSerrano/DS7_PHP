<?php
include 'components/modelo.php';
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
        <div class="banner">
            <h1>About us</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home</a> / <span>About</span>
        </div>
        <section class="about-category">
            <div class="box">
                <img src="img/3.jpg" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>Green Coffe</h1>
                    <a href="view_products.php" class="btn"> shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/3.jpg" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>Green Coffe</h1>
                    <a href="view_products.php" class="btn"> shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/about.png" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>Green Coffe</h1>
                    <a href="view_products.php" class="btn"> shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/1.webp" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>Green Coffe</h1>
                    <a href="view_products.php" class="btn"> shop Now</a>
                </div>
            </div>
        </section>

        <section class="title">
            <img src="img/download.png" alt="" class="logo">
            <h1>our services</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
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

        <section class="about">
            <div class="row">
                <img src="img/3.png" alt="">
            </div>
            <div class="detail">
                <h1>visit our beatiful showrom</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                <a href="view_products.php">shop now</a>
            </div>
        </section>

        <section class="testimonial-container">
            <div class="title">
                <img src="img/download.png" class="logo">
                <h1>what people
                    say
                    about us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam
                </p>
                <div class="container">
                    <div class="testimonial-item active">
                        <img src="img/01.jpg">
                        <h1>sara smith</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                    <div class="testimonial-item active">
                        <img src="img/02.jpg">
                        <h1>sara smith</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                    <div class="testimonial-item active">
                        <img src="img/03.jpg">
                        <h1>sara smith</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once 'components/footer.php' ?>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include_once 'components/alert.php' ?>
</body>

</html>