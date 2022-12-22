<?php
    require_once "../inc/header.php";
    require_once "select_single_feature.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Add Feature</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">Single Feature</h1>
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
                                                        <td>
                                                            <img src="../../uploads/features/<?= $feature['image'] ?>" width="60"/>
                                                        </td>
                                                        <th>
                                                            <small class="badge bg-<?= $feature['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $feature['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><?= $feature['id'] ?></td>
                                                        <td><?= $feature['title'] ?></td>
                                                        <td><?= html_entity_decode($feature['description'])?></td>
                                                        <td><?= $feature['image'] ?></td>
                                                        <td>
                                                            <a href="all_features_view.php?id=<?= $feature['id'] ?>" class="btn btn-primary my-1">All Banners</button>
                                                            <a href="edit_feature_view.php?id=<?= $feature['id'] ?>" class="btn btn-success my-1 mx-2">Edit</button>
                                                            <a href="delete_feature.php?id=<?= $feature['id'] ?>" class="btn btn-warning my-1">Delete</button>
                                        
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
