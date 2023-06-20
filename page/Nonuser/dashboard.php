<?php
    $db   = new Resto();
    $table = "tb_kategori";
    $data  = $db->select($table);
?>
<section class="p-b-55">
    <div class="row align-items-center my-5" style="height: 600px; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/bg8.png') no-repeat; background-size: cover;">
        <div class="col text-center">
            <h1 class="text-white" style="font-size: 60px;">Kuliner Tasikmalaya</h1>
            <p class="text-white" style="font-size: 25px;">Segala informasi mengenai kuliner di Kota Tasikmalaya ada di sini
            </div>
        </div>
    </section>
    <!-- END WELCOME-->
    <!-- PAGE CONTENT-->
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UImzyAINxGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <div class="card">
                        <div style="text-align: justify;" class="card-body">
                            <h2><center>Tentang Kuliner Tasik</center></h2>
                            <hr>
                            Tasikmalaya merupakan salah satu kota di Indonesia yang memiliki berbagai macam kuliner yang menggoyahkan lidah dan tidak heran juga banyak wisatawan yang sengaja mampir dan makan untuk mencicipi kuliner yang ada di tasikmalaya. Makanan khas tasikmalaya mempunyai ciri tersendiri jika dibandingkan dengan makanan - makanan lain di daerah jawa dan tidak jarang dijadikan oleh-oleh. <br> Seperti tutug oncom, rengginang, saroja, citruk, kupat tahu, kue aci, cilok goang, cimol bojot, seblak, kerupuk sangrai dan keripik tempe
                    </div>
                    </div>
                </div>
            </div>
            <br><br>
        <section class="p-t-20">
                    <div class="container">
                        <div class="row my-5 border-top border-bottom">
                            <div class="col-md-12 mt-5">
                                <div class="copyright">
                                <h1>Kategori</h1>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form class="au-form-icon--sm float-right" action="" method="post">
                        <input class="au-input--w300 au-input--style2" type="text" placeholder="Cari Kategori">
                        <button class="au-btn--submit2" type="submit">
                        <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                </div> 
            <br>
        </section>
    </div>
    <div class="container m-t-20" style="margin-top: 70px ;">
        <div class="row">
            <?php
            foreach ($data as $data2) {
            ?>
            <div class="col-md-4 mb-3" >
                <div class="card">
                    <img class="card-img-top" style="height: 220px;" src="img/<?=$data2['photo']?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$data2['name_kategori']?></h5>
                        <p class="card-text" style="text-align: justify;"><?=$data2['description']?></p>
                    </div>
                    <div class="card-footer">
                        <a href="?page=order_menu&kd=<?=$data2['kd_kategori']?>"  class="btn btn-outline-warning">Lihat daftar penjual</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>