<?php
global $mysqli;
include 'template/head.php';
include 'template/database.php';
include 'template/nav.php';
?>
<?php
if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login = '$login' AND password ='$password'";
    $result = $mysqli->query($sql);

    $user = mysqli_fetch_assoc($result);
    if (!empty ($user)) {
        session_start();
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['login'] = $user['login'];
        $_SESSION['role'] = $user['role'];

        $userId = $user['id_user'];
        $pers = "SELECT * FROM personal WHERE id_user = '$userId'";
        $res = $mysqli->query($pers);
        $personal = mysqli_fetch_assoc($res);
        $_SESSION['id_personal'] = $personal['id_personal'];
        $_SESSION['fio'] = $personal['fio'];
        $_SESSION['otdelenia'] = $personal['otdelenia'];
        $_SESSION['position'] = $personal['position'];

        header("Location: account.php");
    } else {
        $message = 'Неверный логин или пароль';
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post"><br>
                    <input type="text" placeholder="Логин" name="login"><br>
                    <input type="password" placeholder="Пароль" name="password"><br>
                    <button type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>


<?php
include 'template/footer.php';