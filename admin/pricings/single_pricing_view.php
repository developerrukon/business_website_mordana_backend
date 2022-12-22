<?php
    require_once "../inc/header.php";
    require_once "select_single_pricing.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">View Pricing</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">View Pricing</h1>
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
                                                        <th>Pricing Number</th>
                                                        <th>Pricing Heading</th>
                                                        <th>Description</th>
                                                        <th>Button Text</th>
                                                        <th>Button Url</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <tr>
                                                     <td><?= $pricing['id'] ?></td>
                                                        <td><?= $pricing['title'] ?></td>
                                                        <td><?= $pricing['pricing_number'] ?></td>
                                                        <td><?= $pricing['pricing_heading'] ?></td>
                                                        <td><?= html_entity_decode($pricing['description']) ?></td>
                                    
                                                        <td><?= $pricing['btn_text'] ?></td>
                                                        <td><?= $pricing['btn_url'] ?></td>
                                                        <td>
                 
                                                            <small class="badge bg-<?= $pricing['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $pricing['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="all_pricings_view.php?id=<?= $pricing['id']?>" class="btn btn-info my-1">All View</a>
                                                            <a href="edit_pricing_view.php?id=<?= $pricing['id']?>" class="btn btn-success my-1 mx-2">Edit</a>
                                                            <a href="delete_pricing.php?id=<?= $pricing['id']?>" class="btn btn-danger my-1" onclick="return confirm('Are you sure.!')">Delete</a>
                                                         
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
