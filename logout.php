<?php
    session_start();
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['id_personal'] = $personal['id_personal'];
    $_SESSION['fio'] = $personal['fio'];
    $_SESSION['otdelenia'] = $personal['otdelenia'];
    $_SESSION['position'] = $personal['position'];
//Очищаем данные сессии
unset($_SESSION['id_user']);
unset($_SESSION['login']);
unset($_SESSION['role']);
unset($_SESSION['id_personal']);
unset($_SESSION['fio']);
unset($_SESSION['otdelenia']);
unset($_SESSION['position']);
header("Location: index.php");
?>