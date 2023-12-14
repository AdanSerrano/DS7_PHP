<?php
include 'components/modelo.php';
require_once("components/query.php");
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

$obj_users = new Products();
$users = $obj_users->listarUsuarios();

$nfilas = count($users);
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
    <?php include_once 'components/header_dashboard.php'; ?>
    <main class="main">
        <section class="banner">
            <h1>Products</h1>
        </section>
        <section class="title2">
            <a href="home.php">home </a><span>/ our shop</span>
        </section>

        <button type="submit" name="add_to_cart"></button>
        <section class="products">
            <section class="box-container" style='display: flex; flex-direction: column;justify-content:start; align-items:start; '>
                <?php
                if ($nfilas > 0) {
                    foreach ($users as $resultado) {
                        echo "<div class='content' style='width: 100%; display:flex; flex-direction: column; align-items:start;'>";
                        echo "<h3>" . $resultado['name'] . "</h3>";
                        echo "<p class='price'>" . $resultado['email'] . "</p>";
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