<?php
    $mn      = new Resto();
    $table   = "tb_menu";
    $data    = $mn->edit($table, "kategori_id", $_GET['kd']);
    $getName = $mn->edit("tb_kategori", "kd_kategori", $_GET['kd']);
?>
<div class="container">
    <div class="row" style="margin-top: 110px;">
        <div class="col-md-6">
            <h1>Daftar Penjual <?= $getName[0]['name_kategori']?></h1>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <form class="au-form-icon--sm float-right" action="" method="post">
                <input class="au-input--w300 au-input--style2" type="text" placeholder="Cari Menu">
                <button class="au-btn--submit2" type="submit">
                <i class="zmdi zmdi-search"></i>
                </button>
            </form>
        </div>
    </div>
    <br>
    <a href="?page=dashboard" class="btn btn-warning float-right">Kembali ke kategori</a>
    <br><br>
    <div class="row" style="margin-top: 40px ;">
        <?php
        foreach ($data as $dataB) {
        ?>
        <div class="col-auto mb-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="height: 220px;" src="img/<?=$dataB['photo']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$dataB['name_menu']?></h5>
                    <p class="card-text" style="color: red;">Rp. <?=$dataB['harga']?></p>
                </div>
                <div class="card-footer">
                    <a href="?page=rating&kategori=<?=$dataB['kategori_id']?>&kd=<?=$dataB['kd_menu']?>" class="btn btn-outline-warning">Lihat Detail</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>