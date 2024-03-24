<?php
global $mysqli;
include 'template/head.php';
include 'template/database.php';
include 'template/nav_doctor.php';
?>
<?php
if (isset($_GET['id_priem'])) {
    $id_priem = $_GET['id_priem'];
    $sql = "SELECT * FROM zapisi_na_priem WHERE id_priem = '$id_priem'";
    $result = $mysqli->query($sql);

    $dataClient = [];
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $id_pacient = $row['id_pacient'];

        $sqlClient = "SELECT * FROM pacienti WHERE id_pacient = '$id_pacient'";
        $resultClient = $mysqli->query($sqlClient);
        $rowClient = $resultClient->fetch_assoc();

        $dataClient[$id_pacient] = $rowClient;
    } else {
        echo "<h2>Запись № $id_priem  не найден.</h2>";
    }
} else {
    echo "<h2>Ошибка: Запись не выбрана.</h2>";
}

if (!empty($_POST)) {
    $complaint = $_POST['complaint'];
    $diagnosis = $_POST['diagnosis'];
    $prescriptions = $_POST['prescriptions'];
    $sick_leave = $_POST['sick_leave'];

    $sql = "UPDATE zapisi_na_priem SET complaint = '$complaint', diagnosis = '$diagnosis', prescriptions = '$prescriptions', sick_leave = '$sick_leave' WHERE id_priem = '$id_priem' ";

    if ($mysqli->query($sql)) {
        header("Location: account.php");
    } else {
        echo "Ошибка: " . $mysqli->error;
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="margin: 50px 0">Детальная информация о записи №<?php echo $row['id_priem']; ?></h2>
                <ul style="margin-bottom: 45px">
                    <li>ФИО пациента: <?php echo $dataClient[$row['id_pacient']]['fio']; ?></li>
                    <li>Пол: <?php echo $dataClient[$row['id_pacient']]['gender']; ?></li>
                    <li>Дата рождения: <?php echo $dataClient[$row['id_pacient']]['date_of_birth']; ?></li>
                    <li>Номер полиса: <?php echo $dataClient[$row['id_pacient']]['policy_number']; ?></li>
                    <li>Номер паспорта: <?php echo $dataClient[$row['id_pacient']]['passport_number']; ?></li>
                    <li>Номер телефона: <?php echo $dataClient[$row['id_pacient']]['phone_number']; ?></li>
                    <li>Адрес: <?php echo $dataClient[$row['id_pacient']]['address']; ?></li>
                    <li>Группа инвалидности: <?php echo $dataClient[$row['id_pacient']]['disability_group']; ?></li>
                    <li>Противопоказания: <?php echo $dataClient[$row['id_pacient']]['contraindications']; ?></li>
                    <li>Дата приема: <?php echo $row['date_of_appointment']; ?></li>
                    <li>Время приема: <?php echo $row['time_of_appointment']; ?></li>
                </ul>
                <form method="POST">
                    <div style="display: flex; align-items: start; max-width 800px; width: 100%; justify-content: space-between; margin-bottom: 45px">
                        <label for="complaint">Жалоба</label>
                        <textarea name="complaint" id="complaint" cols="60" rows="3" style="width: 100%; margin-left: 45px; outline: none;"><?php echo $row['complaint']; ?></textarea>
                    </div>
                    <div style="display: flex; align-items: start; max-width 800px; width: 100%; justify-content: space-between; margin-bottom: 45px">
                        <label for="diagnosis">Диагноз</label>
                        <textarea name="diagnosis" id="diagnosis" cols="60" rows="3" style="width: 100%; margin-left: 45px; outline: none;"><?php echo $row['diagnosis']; ?></textarea>
                    </div>
                    <div style="display: flex; align-items: start; max-width 800px; width: 100%; justify-content: space-between; margin-bottom: 45px">
                        <label for="prescriptions">Рецепты</label>
                        <textarea name="prescriptions" id="prescriptions" cols="60" rows="3" style="width: 100%; margin-left: 45px; outline: none;"><?php echo $row['prescriptions']; ?></textarea>
                    </div>
                    <div style="display: flex; align-items: start; max-width 800px; width: 100%; justify-content: space-between; margin-bottom: 45px">
                        <label for="sick_leave">Бол. отпуск</label>
                        <textarea name="sick_leave" id="sick_leave" cols="60" rows="3" style="width: 100%; margin-left: 35px; outline: none;"><?php echo $row['sick_leave']; ?></textarea>
                    </div>
                    <div class="mb-3" style="display: flex; justify-content: end">
                        <button type="submit" class="btn btn-primary" style="width: 155px">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include 'template/footer.php';