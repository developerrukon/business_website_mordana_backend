<?php
    require_once "../inc/header.php";
    require_once "select_single_banner.php";
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
                           <h1 class="m-0">Single Banner</h1>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><?= $banner['id'] ?></td>
                                                        <td><?= $banner['title'] ?></td>
                                                        <td><?= $banner['description']?></td>
                                                        <td><?= $banner['btn_text'] ?></td>
                                                        <td><?= $banner['btn_url'] ?></td>
                                                        <td>
                                                            <a href="all_banners_view.php?id=<?= $banner['id'] ?>" class="btn btn-primary">All Banners</button>
                                                            <a href="edit_banner_view.php?id=<?= $banner['id'] ?>" class="btn btn-success mx-2">Edit</button>
                                                            <a href="delete_banner.php?id=<?= $banner['id'] ?>" class="btn btn-warning">Delete</button>
                                                        </td>
                                                    </tr>

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
