<?php
include 'template/head.php';
//session_start();
include 'template/database.php';
include 'template/nav_regisrtator.php';
?> 
  <?php
 
if (!empty($_POST)) {

  //В переменные запишем данные, полученные с формы

  $fio=$_POST['fio'];


  $sql="SELECT * FROM pacienti WHERE fio='$fio'";
  $result=$mysqli->query($sql);

  // Проверка наличия результатов
  if ($result->num_rows > 0) {
    // Извлечение первой строки
    $first_row = $result->fetch_assoc();
    
    // Использование данных первой строки
    //print_r($first_row);
    echo "<h1>Получите талон</h1>";
  } else {
    echo "<h1>Пожалуйста зарегистрируйтесь</h1>";
  }
} 
    ?>
                    <form action='talon.php'method='POST'style="text-align:center">
    <div class="form-element">
    <label class="form-label">Введите фамилию имя отчество</label><br>
<input type="text" class="form-control" name="fio" var="" required /><br><br>
</div> 
<!-- <form action='talon.php'method='POST'> -->
<div class="form-element">
<INPUT type="submit" class="btn btn-primary" value="Ввести">
</div>
</form> 
<br><br>
<?php
include 'template/footer.php';
?>