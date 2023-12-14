<?php
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

<header class="header">
    <div class="flex">
        <a href="index.php" class="logo"><img src="img/logo.jpg"></a>
        <nav class="navbar">
            <a href="index.php" class="logo">Home</a>
            <a href="form_products.php" class="logo">Productos</a>
            <a href="form_services.php" class="logo">Servicios</a>
            <a href="view_users.php" class="logo">Usuarios</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn">

            </i>

            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>Username: <span><?php echo $_SESSION['user_name'] ?></span></p>
            <p>Email: <span><?php echo $_SESSION['user_email'] ?></span></p>
            <?php
            if (!isset($_SESSION['user_id'])) { ?>
                <a href="login.php" class="btn">login</a>
                <a href="register.php" class="btn">register</a>
            <?php } ?>
            <form method="post">
                <?php
                if (isset($_SESSION['user_id'])) { ?>
                    <button type="submit" name="logout" class="logout-btn">log out</button>
                <?php } ?>
            </form>
        </div>
    </div>
</header>