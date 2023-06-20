<?php
    $le    = new Resto();
    $table = "tb_user";
    $data  = $le->selectWhere($table, "level", "Pelanggan");
    
    if(isset($_GET['delete'])){
        $response = $kg->delete("tb_user", "kd_user", $_GET['kd'], "?page=indexLevel");
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
                                    <a href="?page">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item"><a href="?page=indexLevel">Level</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-content" style="margin-top: -60px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="au-card-title" style="background-image:url('images/bg8.png');">
                            <div class="bg-overlay bg-overlay--blue"></div>
                            <h3>
                            <i class="zmdi zmdi-account"></i>Data User</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data as $ds) {
                                        ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$ds['name']?></td>
                                            <td><?= $ds['email']?></td>
                                            <td><?= $ds['username']?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit" href="?page=editKuliner&edit&id=<?=$ds['kd_user']?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                    <a title="Delete" href="" id="btdelete<?= $no; ?>" class="btn btn-danger delete-btn"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <script src="vendor/jquery-3.2.1.min.js"></script>
                                        <script>
                                            $('#btdelete<?php echo $no; ?>').click(function(e){
                                                  e.preventDefault();
                                                    swal({
                                                    title: "Hapus",
                                                    text: "Yakin Hapus?",
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonText: "Yes",
                                                    cancelButtonText: "Cancel",
                                                    closeOnConfirm: false,
                                                    closeOnCancel: true
                                                  }, function(isConfirm) {
                                                    if (isConfirm) {
                                                        window.location.href="?page=indexLevel&delete&kd=<?php echo $dataB['kd_user'] ?>";
                                                    }
                                                  });
                                                });
                                        </script>
                                        <?php $no++;}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>