<?php
include 'template/head.php';
//session_start();
include 'template/database.php';
include 'template/nav1.php';
?> 
  <?php
 
    if (!empty($_POST)) 

//В переменные запишем данные, полученные с формы

$fio=$_POST['fio'];


$sql="SELECT  FROM `patient` WHERE `fio`='$fio'";
$result=$mysqli->query($sql);

if($result->$fio==$fio) {
echo"Получите талон";
 
 
}
else if ($result->$fio!=0){
 
 echo "Пожалуйста, зарегистрируйтесь";
   
    }
    
    ?>
                    <form action='talon.php'method='POST'>
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