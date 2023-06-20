<?php
    $mn      = new Resto();
    $table   = "tb_menu";
    $data    = $mn->edit($table, "kategori_id", $_GET['kd']);
    $getName = $mn->selectWhere("tb_kategori", "kd_kategori", $_GET['kd']);
    var_dump($getName)
?>