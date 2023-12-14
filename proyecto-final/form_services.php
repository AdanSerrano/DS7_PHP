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

// si el usuario no a iniciado sesion lo redirecciona al login
if ($user_id == '') {
    header("location: login.php");
}

if (isset($_REQUEST['submit'])) {
    $id = unique_id() . trim('');
    $name = $_REQUEST['name'] . trim('');
    $description = $_REQUEST['description'] . trim('');
    $image = $_REQUEST['image'] . trim('');

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `services`(id, name, description, image) VALUES ('$id','$name','$description','$image')";
    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");
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
                    <h1>Ingresa un nuevo producto</h1>
                </div>
                <form action="form_services.php" method="post">
                    <div class="input-field">
                        <p>Nombre<sup>*</sup></p>
                        <input type="text" name="name" required placeholder="Nombre" maxlength="50">
                    </div>
                    <div class="input-field">
                        <p>Descripcion<sup>*</sup></p>
                        <input type="text" name="description" required placeholder="Description" maxlength="50">
                    </div>
                    <div class="input-field">
                        <p>Imagen<sup>*</sup></p>
                        <input type="text" name="image" required placeholder="imagen" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                    </div>
                    <input type="submit" name="submit" value="ingresar producto" class="btn" style="margin-bottom: 3rem;">
                </form>
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