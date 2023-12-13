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
        <section class="banner">
            <h1>contact us</h1>
        </section>
        <section class="title2">
            <a href="home. php">home </a><span>/ about</span>
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
        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="img/download.png" class="logo">
                    <h1>leave a message</h1>
                </div>
                <div class="input-field">
                    <p></p>your name <sup>*</sup>
                    </p>
                    <input type="text" name="name">
                </div>
                <div class="input-field">
                    <p>your email <sup>*</sup>
                    </p>
                    <input type="email" name="email">
                </div>
                <div class="input-field">
                    <p>your number <sup>*</sup></p> <input type="text" name="number">
                </div>
                <div class="input-field">
                    <p>your message <sup>*</sup></p>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
            <section class="address">
                <div class="title">
                    <img src="img/download.png" class="logo">
                    <h1>contact detail</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>address</h4>
                            <p>1092 Merigold Lane, Coral Way</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>Phone Number</h4>
                            <p>0093242342</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <p>example@example.com</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- home slide end -->
        <?php include_once 'components/footer.php' ?>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include_once 'components/alert.php' ?>
</body>

</html>