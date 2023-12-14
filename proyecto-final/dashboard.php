<?php
include 'components/modelo.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_REQUEST['logout'])) {
    session_destroy();
    header("location: login.php");
}

if ($user_id == '') {
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
    <?php include_once 'components/header_dashboard.php' ?>

    <main class="main">
        <main class="main-container">
            <section class="form-container">
                <div class="title">
                    <img src="img/download.png" alt="Green tea logo">
                    <h1>Bienvenido al dashboard</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam
                        tenetur</p>
                </div>

            </section>
        </main>
        <!-- home slide end -->
        <?php include_once 'components/footer.php' ?>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include_once 'components/alert.php' ?>
</body>

</html>