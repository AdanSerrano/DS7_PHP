<?php
include 'components/modelo.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}


if (isset($_POST['submit'])) {
    $email = $_POST['email'] . trim('');
    $pass = $_POST['pass'] . trim('');
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `users` WHERE email= '$email' and password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        header("location: index.php");
        exit();
    } else {
        $message[] = "Email o contraseña incorrecto";
    }
    $conn->close();
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
    <title>Green tea - Login Page</title>
</head>

<body>
    <div class="main-container">
        <section class="form-container">
            <h2 style="text-align: center;">Ingresar</h2>
            <form action="./login.php" method="post">
                <div class="input-field">
                    <p>Correo Electronico <sup>*</sup></p>
                    <input type="email" name="email" required placeholder="Coloca tu correo electronico" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Contraseña <sup>*</sup></p>
                    <input type="password" name="pass" required placeholder="Coloca tu contraseña " maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <?php if (isset($message)) { ?>
                    <div class="alert alert-danger" role="alert" style="width: 100%;  display:flex; align-items:center; justify-content:center;">
                        <?php foreach ($message as $error) { ?>
                            <p style="color: red; padding: 1rem 0rem;"><?php echo $error ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
                <input type="submit" name="submit" value="Ingresar" class="btn">
            </form>
            <br>
            <div class="btn">
                <a href="register.php">register</a>
            </div>
        </section>
    </div>
</body>

</html>