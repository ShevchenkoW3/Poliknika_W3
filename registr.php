<?php
global $mysqli;
include 'template/head.php';
include 'template/database.php';
include 'template/nav.php';
?>
<?php
if (!empty($_POST)) {
//В переменные запишем данные, полученные с формы
    $role = $_POST['role'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $otdelenia = $_POST['otdelenia'];
    $fio = $_POST['fio'];
    $position = $_POST['position'];

//В переменную $sql запишем запрос на добавление записи в таблицу ГРУППА	
    $sql = "INSERT INTO users(role, login, password) VALUES ('$role', '$login', '$password')";
//Выполнить запрос

    if ($mysqli->query($sql)) {
        $getuser = "SELECT id_user FROM users WHERE login = '$login' AND password ='$password'";
        $result = $mysqli->query($getuser);
        $user = mysqli_fetch_assoc($result);
        $userId = $user['id_user'];

        $regPersonal = "INSERT INTO personal(id_user, otdelenia, fio, position) VALUES ('$userId', '$otdelenia', '$fio', '$position')";
        $mysqli->query($regPersonal);
        header("Location: login.php");
    } else {
        echo "Ошибка: " . $mysqli->error;
    }
}
?>
    <form method="POST">
        <div class="container mb-5">
            <div class="row">
                <div class="mb-3">
                    <label for="role" class="form-label">Роль</label>
                    <select type="text" class="form-control" id="role" name="role">
                        <option value="Регистратор">Регистратор</option>
                        <option value="Врач">Врач</option>
                        <option value="Главный врач">Главный врач</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="login" name="login">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="fio" name="fio">
                </div>
                <label for="otdelenia" class="form-label">Отделение</label>
                <div class="mb-3">
                    <select type="text" class="form-control" id="otdelenia" name="otdelenia">
                        <option value="Терапевтическое">Терапевтическое</option>
                        <option value="Хирургическое отделение">Хирургическое отделение</option>
                        <option value="Неврологическое отделение">Неврологическое отделение</option>
                        <option value="Детская консультация">Детская консультация</option>
                        <option value="Женская консультация">Женская консультация</option>
                        <option value="Дермато-венероло-гическое отделение">Дермато-венероло-гическое отделение</option>
                    </select>
                </div>
                <label for="position" class="form-label">Должность</label>
                <div class="mb-3">
                    <select type="text" class="form-control" id="position" name="position">
                        <option value="Врач-терапевт">Врач-терапевт</option>
                        <option value="Врач-хирург">Врач-хирург</option>
                        <option value="Врач-невролог">Врач-невролог</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </div>
        </div>
    </form>
<?php
include 'template/footer.php';
