<?php
    if (isset($_POST["login"]) && isset($_POST["password"])){
        $login = $_POST["login"];
        $password = md5($_POST["password"]);
        $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        $result = mysqli_query($db, $sql);
        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
            $result = mysqli_query($db, $sql);
        }
        $_SESSION["login"] = $login;
    } else {
        if (isset($_SESSION["login"])){
            $login = $_SESSION["login"];
        }
    }
    if (isset($login)) {?>
        <p>Вы вошли как <b><?php echo $login;?></b></p>
        <p><a href="logout.php">Выйти</a></p>
    <?php } else {?>
        <form method="post">
            <p>Логин</p>
            <p><input type="text" name="login"></p>
            <p>Пароль</p>
            <p><input type="password" name="password"></p>
            <p><input type="submit" value="Войти"></p>
        </form>
    <?php } ?>