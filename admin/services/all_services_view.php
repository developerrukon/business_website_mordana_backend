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
                                 <li class="breadcrumb-item active" aria-current="page">All Services</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">All Services</h1>
                           <?php

                                if(isset($_SESSION['service_mess'])){
                                    echo $_SESSION['service_mess'];
                                }
                                unset($_SESSION['service_mess']);
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
                                                        <th>Icon</th>
                                                        <th>Icon Color</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    if(isset($services)){
                                                    foreach($services as $service){
                                                ?>

                                                    <tr>
                                                        <td><?= $service['id'] ?></td>
                                                        <td><?= $service['title'] ?></td>
                                                        <td><?= substr($service['description'],0,25) ?></td>
                  <td>
                                                            <small class="badge bg-<?= $service['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $service['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td><?= $service['icon'] ?></td>
                                                        <td><?= $service['icon_color'] ?></td>
                                          
                                                        <td>
                                                            <a href="single_service_view.php?id=<?= $service['id']?>" class="btn btn-info">View</a>
                                                            <a href="edit_service_view.php?id=<?= $service['id']?>" class="btn btn-success mx-2">Edit</a>
                                                            <a href="delete_service.php?id=<?= $service['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $service['id']?>" class="btn btn-<?= $service['status'] == 1 ? "warning" : "primary" ?> mx-2">
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
