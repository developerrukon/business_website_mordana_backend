<?php
include_once "../inc/header.php";
include_once "user.php";

?>
<!-- header controler start-->
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
                </ol>
            </nav>
            <h1 class="m-0"><i class="fa fa-user"></i> My Profile</h1>
        </div>

    </div>
</div>
<div class="container-fluid page__container">
    <!-- header controler end-->


    <!-- all table start-->
    <div class="card card-form">
        <div class="row no-gutters">

            <div class="col-lg-12 card-form__body">

                <div class="table-responsive border-bottom">

                    <table class="table mb-0 thead-border-top-0 table table-bordered">
                        <tbody>
                        <img src="<?= admin_url() ?>../images/<?= ($user['photo']) ?>" class="rounded" width="100" alt="Frontted">

                            <tr>
                                <td>Name:</td>
                                <td><?= $user['name'] ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><a><?= $user['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>
                                <small class="badge bg-<?= $user['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $user['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                  
                                </td>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- all table end -->


    <!-- footer controler start-->

</div>
<?php
require_once "../inc/footer.php";
?>
<!-- footer controler end-->