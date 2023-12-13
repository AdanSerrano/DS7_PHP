<?php
//el usuario se loguea
include 'components/modelo.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_user = $row->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
    $select_user->execute([$email, $pass]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        header("location: index.php"); // Redirección aquí, después de autenticar al usuario
        exit(); // Asegúrate de salir después de la redirección
    } else {
        $message[] = "Email or password incorrect";
    }
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
            <h2 style="text-align: center;">login</h2>
            <form action="login.php" method="post">
                <div class="input-field">
                    <p>Your Email <sup>*</sup></p>
                    <input type="email" name="email" required placeholder="Enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Your Password <sup>*</sup></p>
                    <input type="password" name="pass" required placeholder="Enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <?php if (isset($message)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php foreach ($message as $error) { ?>
                            <p><?php echo $error ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
                <input type="submit" name="submit" value="Login" class="btn">
            </form>
            <br>
            <div class="btn">
                <a href="register.php">register</a>
            </div>
        </section>
    </div>
</body>

</html>