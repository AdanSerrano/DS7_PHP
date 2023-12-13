<?php
include 'components/modelo.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_REQUEST['submit'])) {
    $id = unique_id() . trim('');
    $name = $_REQUEST['name'] . trim('');
    $email = $_REQUEST['email'] . trim('');
    $pass = $_REQUEST['pass'] . trim('');
    $cpass = $_REQUEST['cpass'] . trim('');

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //el email no puede ser repetido

    $sql = "SELECT * FROM `users` WHERE email= '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $message[] = "Email ya registrado";
    } else {
        if ($pass != $cpass) {
            $message[] = "Las contraseñas no coinciden";
        } else {
            $sql = "INSERT INTO `users`(id, name, email, password) VALUES ('$id','$name','$email','$pass')";
            $result = $conn->query($sql);
            $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                header("location: index.php");
                exit();
            }
        }
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
    <title>Green tea - Page register</title>
</head>

<body>
    <main class="main-container">
        <section class="form-container">
            <div class="title">
                <img src="img/download.png" alt="Green tea logo">
                <h1>Registrarse Ahora</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam
                    tenetur</p>
            </div>
            <form action="register.php" method="post">
                <div class="input-field">
                    <p>Your Name <sup>*</sup></p>
                    <input type="text" name="name" required placeholder="Enter your name" maxlength="50">
                </div>
                <div class="input-field">
                    <p>Your Email <sup>*</sup></p>
                    <input type="email" name="email" required placeholder="Enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Your Password <sup>*</sup></p>
                    <input type="password" name="pass" required placeholder="Enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Confirm Password <sup>*</sup></p>
                    <input type="password" name="cpass" required placeholder="Enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>

                <?php if (isset($message)) { ?>
                    <div class="alert alert-danger" role="alert" style="width: 100%;  display:flex; align-items:center; justify-content:center;">
                        <?php foreach ($message as $error) { ?>
                            <p style="color: red; padding: 1rem 0rem;">
                                <?php echo $error; ?>
                            </p>
                        <?php } ?>
                    </div>
                <?php } ?>
                <input type="submit" name="submit" value="Register Now" class="btn" style="margin-bottom: 3rem;">
                <p>Already have an account? <a href="login.php" class="btn">Login Now</a></p>
            </form>
        </section>
    </main>
</body>

</html>