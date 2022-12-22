<?php
    require_once "select_all_banners.php";
    require_once "../inc/header.php";

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
                           <h1 class="m-0">All Banner</h1>
                           <?php
                           
                                if(isset($_SESSION['banner_message'])){
                                    echo $_SESSION['banner_message'];
                                }
                                unset($_SESSION['banner_message']);
                           ?>
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

                                            <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Button Text</th>
                                                        <th>Button Url</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                <?php
                                                    if(isset($banners)){
                                                    foreach($banners as $banner){
                                                ?>

                                                    <tr>
                                                        <td><?= $banner['id'] ?></td>
                                                        <td><?= $banner['title'] ?></td>
                                                        <td><?= substr($banner['description'],0,25) ?></td>
                                                        <td><?= $banner['btn_text'] ?></td>
                                                        <td><?= substr($banner['btn_url'],0,25) ?></td>
                                                        <td>
                                                            <small class="badge bg-<?= $banner['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $banner['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="single_banner_view.php?id=<?= $banner['id']?>" class="btn btn-info">View</a>
                                                            <a href="edit_banner_view.php?id=<?= $banner['id']?>" class="btn btn-success mx-2">Edit</a>
                                                            <a href="delete_banner.php?id=<?= $banner['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $banner['id']?>" class="my-1 btn btn-<?= $banner['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $banner['status'] == 1 ? "Deactive" : "Active" ?>
                                                             </a>
                                                        </td>
                                                    </tr>
                                                    
                                                <?php

                                                    }
                                                }
                                                ?>
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
