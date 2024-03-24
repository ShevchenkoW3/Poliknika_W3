<?php
global $mysqli;
include 'template/head.php';
session_start();
if (!empty($_SESSION)){
    if($_SESSION['role'] == 'Регистратор'){
        include 'template/nav_regisrtator.php';
    }
    elseif(($_SESSION['role'] == 'Врач')){
        include 'template/nav_doctor.php';
    }
	elseif(($_SESSION['role'] == 'Главный врач')){
        include 'template/nav_head_doctor.php';
    }
}
else{
    include 'template/nav.php';
}

include 'template/database.php';
?>
<?php
session_start();
$role = $_SESSION['role'];
$id = $_SESSION['id_user'];
$id_personal = $_SESSION['id_personal'];
$login = $_SESSION['login'];
$fio = $_SESSION['fio'];
$otdelenia = $_SESSION['otdelenia'];
$position = $_SESSION['position'];


$sql = "SELECT * FROM zapisi_na_priem WHERE id_personal = '$id_personal'";
$result = $mysqli->query($sql);

$status = false;

if ($role === 'Главный врач') {
    $status = true;
}

$data = [];
$dataClient = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
    $id_pacient = $row['id_pacient'];

    $sqlClient = "SELECT * FROM pacienti WHERE id_pacient = '$id_pacient'";
    $resultClient = $mysqli->query($sqlClient);
    $rowClient = $resultClient->fetch_assoc();

    $dataClient[$id_pacient] = $rowClient;
}
?>
    <div class="container">
        <div class="row">
            <div class="col" style="margin: 55px 0">
                <h2>Личный кабинет: <?php echo $fio; ?></h2>
                <h4>ID врача: <?php echo $id; ?> </h4>
                <h5>Логин: <?php echo $login; ?> </h5>
                <h5>Отделение: <?php echo $otdelenia; ?></h5>
                <h5>Должность: <?php echo $position; ?> </h5>

                <?php if ($status === true) : ?>
                    <a href="report.php" class="btn btn-primary" style="margin: 35px 0">Просмотреть отчет</a>
                <?php endif; ?>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Номер талона</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">Пол</th>
                        <th scope="col">Дата рождения</th>
                        <th scope="col">Номер полиса</th>
                        <th scope="col">Дата приема</th>
                        <th scope="col">Время</th>
                        <th scope="col">Детали</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?php echo $row['id_talon']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['fio']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['gender']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['date_of_birth']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['policy_number']; ?></td>
                            <td><?php echo $row['date_of_appointment']; ?></td>
                            <td><?php echo $row['time_of_appointment']; ?></td>
                            <td><a href="detail.php?id_priem=<?php echo $row['id_priem']; ?>" class="btn btn-primary">Подробнее</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



                  