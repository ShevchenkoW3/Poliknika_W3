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


  $sql="SELECT * FROM `patient` WHERE `fio`='$fio'";
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
    <label style="color:blue">Введите фамилию имя отчество</label><br>
<input type="text" name="fio" var="" required /> 
<form action='talon.php'method='POST'>
<div class="form-element">
<INPUT type="submit" value="Ввести" style='width: 200px; height: 30px; margin-left: 20px ; border-color:black ;  border-radius: 5px;margin:5px;font-family:  Gothic Medium ;font-size: 20px; color:black; background-color:white; align-items: center;'  >
</div>
</form> 
</div> <br><br>
<?php
include 'template/footer.php';
?>