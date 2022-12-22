<?php
    require_once "../inc/header.php";
    require_once "select_all_services.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">All Service</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">All Services</h1>
                           <?php

                                // if(isset($_SESSION['message'])){
                                //     echo $_SESSION['message'];
                                // }
                                // unset($_SESSION['message']);
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
                                                        <th>Image</th>
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
                                                    if(isset($services_details)){
                                                    foreach($services_details as $service){
                                                ?>

                                                    <tr>
                                                        <td><?= $service['id'] ?></td>
                                                        <td>
                                                            <img src="../../uploads/service_details/<?= $service['image'] ?>" width="60"/>
                                                        </td>
                                                        <td><?= $service['title']?></td>
                                                        <td><?= substr(html_entity_decode($service['description']),0,80) ?></td>
                                                        <td><?= $service['btn_text']?></td>
                                                        <td><?= $service['btn_url']?></td>
                                                        <td>
                                                            <small class="badge bg-<?= $service['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $service['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="single_service_view.php?id=<?= $service['id']?>" class="btn btn-info  my-1">View</a>
                                                            <a href="edit_service_view.php?id=<?= $service['id']?>" class="btn btn-success mx-1 my-2">Edit</a>
                                                            <a href="delete_service.php?id=<?= $service['id']?>" class="btn btn-danger  my-1" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $service['id']?>" class=" my-1 btn btn-<?= $service['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $service['status'] == 1 ? "Deactive" : "Active" ?>
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
