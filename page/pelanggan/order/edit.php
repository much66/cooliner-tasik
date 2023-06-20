<?php 

    $kt = new Resto();
    $table = "tb_user";
    
    $data = $kt->selectWhere($table, "username", $_SESSION['username'])[0];
    $password = base64_decode($data['password']);

    $autokode = $kt->autokode($table,"kd_user","KT");
    if (isset($_POST['getUbah'])) {
        $kd_user = $kt->validateHtml($_POST['kd_user']);
        $name = $kt->validateHtml($_POST['name']);
        $email = $kt->validateHtml($_POST['email']);
        $username = $kt->validateHtml($_POST['username']);
        $username = strtolower(htmlspecialchars($username));
        $password = $kt->validateHtml($_POST['password']);
        $password = htmlspecialchars($password);
        $password = base64_encode($password);
        $level = $kt->validateHtml($_POST['level']);
        $avatar = $_files['avatar'];

        if($kd_user == "" || $name == "" || $email == "" || $username == "" || $password == "" || $level == ""){
            $response = ['response'=>'negative','alert'=>'Lengkapi Field'];
        }else{
            if($_FILES['avatar']['name'] == ""){
                $value = "kd_user='$kd_user', name='$name', email='$email', username='$username', password='$password' $level='$level'";
                $response = $kt->update($table, $value, "kd_user", $_GET['id'], "?page=indexLevel");
            }else{
                $response = $kt->validateImage();
                if($response['types'] == "true"){
                    $value = "kd_user='$kd_user', email='$email', username='$username', password='$password' $level='$level', avatar='$response[image]'";
                    $response = $kt->update($table, $value, "kd_kategori", $_GET['kd'], "?page=indexKategori");
                }else{
                    $response = ['response'=>'negative', 'alert'=>'Gambar Error'];
                }
            }
        }

    }

 ?>
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                       <div class="au-breadcrumb-left">
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="?page=dashboard">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item"><a href="?page=editKategori&edit&kd=<?= $dataB['kd_user'] ?>">Edit Data</a></li>
                            </ul>
                        </div>
                        <a href="?page=dashboard" class="btn btn-outline-warning btn-sm float-right">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-content" style="margin-top: -70px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="au-card-title" style="background-image:url('images/bg.jpg');">
                            <div class="bg-overlay" style="background-color: rgba(240,133,25,0.9);" ></div>
                            <h3>
                            <i class="zmdi zmdi-account-calendar"></i>Edit Data Diri</h3>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="card-body">
                                    <input type="hidden" style="font-weight: bold; color: red;" class="form-control" name="kd_user" value="<?php echo $data['kd_user']; ?>" readonly>
                                <div class="form-group">
                                    <label for="">Nama Lengkap </label>
                                    <input type="text" class="form-control form-control-md" name="name" value="<?= $data['name'] ?>" >
                                 </div>
                                 <div class="form-group">
                                    <label for="">Email </label>
                                    <input type="email" class="form-control form-control-md" name="email" value="<?= $data['email'] ?>" >
                                 </div>
                                 <div class="form-group">
                                    <label for="">Username </label>
                                    <input type="text" class="form-control form-control-md" name="username" value="<?= $data['username'] ?>" >
                                 </div>
                                 <div class="form-group">
                                    <label for="">Password </label>
                                    <input type="password" class="form-control form-control-md" name="password" value="<?= $password; ?>" >
                                 </div>
                                 <div class="form-group">
                                    <label for="">Avatar</label>
                                    <input type="file" name="foto" id="photo" data-allowed-file-extensions="png jpg jpeg" class="dropify" data-default-file="img/<?= $data['avatar'] ?>">
                                 </div>
                                 <input type="hidden" name="level" value="<?= $data['level']?>">
                            </div>
                            <div class="card-footer">
                                <div class="float-right" style="margin-bottom: 15px;">
                                    <button name="getUbah" class="btn btn-primary"><i class="fa fa-edit"></i> Ubah</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
