<?php
include 'template/head.php';
include 'template/database.php';
session_start();
if (!empty($_SESSION)){
    if($_SESSION['role'] == 'Регистратор'){
        include 'template/nav_registrator.php';
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

<div class="zag"style="text-align:center;padding-top:30px;">
  <h1 style="color:black">  Поликлиника 11 </h1><br>
  <img src="img/5.jpg" style="margin-bottom:40px" >
  </div>
  













  <?php
include 'template/footer.php';
?>
