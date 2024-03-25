<?php
include 'template/head.php';
//session_start();
include 'template/database.php';
include 'template/nav_regisrtator.php';
?> 
  <?php
    if (!empty($_POST)) 
{
//В переменные запишем данные, полученные с формы

$fio=$_POST['fio'];
$age=$_POST['age'];
$pol=$_POST['pol'];
$passport=$_POST['passport'];
$adress=$_POST['adress'];



$sql="INSERT INTO patient(fio, age, pol, passport, adress) VALUES ('$fio','$age', '$pol', '$passport', '$adress')";

$result= $mysqli->query($sql);
header('location:index.php');
}



?>

  <div class="zag"style="text-align:center;padding-top:30px;">
  <h1> Страница регистратора </h1><br>
                
                
 


  <form action='talon.php'method='POST'>
<div class="form-element">
<INPUT type="submit" class="btn btn-primary" value="Получить талон" style='align-items: center;'><br><br>
</div>
</form> 
<form action='registr.php'method='POST'>
<div class="form-element">
<INPUT type="submit" class="btn btn-primary" value="Зарегистрировать" style='align-items: center;'><br><br>
</div>
</form> 
           </div>
           </div>
         
           <?php
           
$mysqli->close();

?>






<?php

include 'template/footer.php';
?>