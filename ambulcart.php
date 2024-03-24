<?php
global $mysqli;
include 'template/head.php';
include 'template/database.php';
include 'template/nav_registrator.php';
?>
<?php
session_start();
$id = $_SESSION['id_karta'];
$id_pacient = $_SESSION['id_pacient'];
$number = $_SESSION['number'];
$date_created = $_SESSION['date_created'];


$sql = "SELECT * FROM ambulaturnie_karti WHERE id_pacient = '$id_pacient'";
$result = $mysqli->query($sql);

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
            <div class="col">
                <h2>Личный кабинет: <?php echo $fio; ?></h2>
                <h4>ID врача: <?php echo $id; ?> </h4>
                <h5>Логин: <?php echo $login; ?> </h5>
                <h5>Отделение: <?php echo $otdelenia; ?></h5>
                <h5>Должность: <?php echo $position; ?> </h5>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Номер карты</th>
                        <th scope="col">Номер пациента</th>
                        <th scope="col">Номер</th>
                        <th scope="col">Дата создания</th>
                        
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?php echo $row['id_karta']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['fio']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['gender']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['date_of_birth']; ?></td>
                            <td><?php echo $dataClient[$row['id_pacient']]['policy_number']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['date_created']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
<?php include 'template/footer.php'; ?>




                  