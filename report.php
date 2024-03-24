<?php
global $mysqli;
include 'template/head.php';
include 'template/nav_head_doctor.php';



?>
<head>
    <style>
        table.sptb{text-decoration: none;border-collapse:collapse;width:100%;text-align:center;}
        table.sptb th{font-weight:normal;font-size:14px; color:#000000;background-color:#ffffff;}
        table.sptb td{font-size:13px;color:#000000;}
        table.sptb td,table.iksweb th{white-space:pre-wrap;padding:10px 5px;line-height:13px;vertical-align: middle;border: 1px solid #c9c9c9;}
        table.sptb tr:hover{background-color:#f9fafb}
        table.sptb tr:hover td{color:#000000;cursor:default;}
        .tb-header {
            font-size: 20px;
            font-weight: 600;
        }
    </style>
    <title>Reports</title>
</head>
<body>
<div class="container" style="margin: 50px auto 0;">
    <span style="font-size: 20px; font-weight: 600; margin-left: 25px">с _ по _</span>
    <table class="sptb" style="margin-top: 25px; margin-bottom: 50px">
        <tbody>
        <tr>
            <td colspan="2" rowspan="3">Наименование специальностей</td>
            <td colspan="9">Посещений</td>
        </tr>
        <tr>
            <td colspan="3">Всего по поликлинике</td>
            <td colspan="3">Х.Р</td>
            <td colspan="3">Бюджет и ОМС</td>
        </tr>
        <tr>
            <td>план за месяц</td>
            <td>факт</td>
            <td>процент выполнения плана</td>
            <td>план за месяц</td>
            <td>факт</td>
            <td>процент выполнения плана</td>
            <td>план за месяц</td>
            <td>факт</td>
            <td>процент выполнения плана</td>
        </tr>
        <tr>
            <td colspan="2">1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Терапевтическое отделение:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-терапевт:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-профпатолог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-аллерголог-иммунолог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-гастроэнтеролог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-кардиолог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-инфеционист:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-терапевт:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
<!--        com-->

        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Хирургическое отделение:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-хирург:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-уролог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-отоларинголог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-офтальмолог</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-травматолог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-сердечно-сосудистый:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
<!--        col-->
        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Неврологическое отделение:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-невролог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-нарколог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-психиатр:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <!--        col-->
        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Детская консультация:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-педиатр:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-невролог детский:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-эндокринолог:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2">Врач-сердечно-сосудистый хирург:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Женская консультация:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Дермато-венероло-гическое отделение:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align: start">
            <td colspan="2" class="tb-header">Итого по поликлинике:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
<?php include 'template/footer.php'; ?>