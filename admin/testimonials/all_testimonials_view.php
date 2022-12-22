<?php
    require_once "select_all_testimonials.php";
    require_once "../inc/header.php";

?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">All Testimonials</h1>
                           <?php
                           
                                if(isset($_SESSION['testimonial_message'])){
                                    echo $_SESSION['testimonial_message'];
                                }
                                unset($_SESSION['testimonial_message']);
                           ?>
                        </div>
                        <div class="flatpickr-wrapper ml-3">
                           <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                              <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 to 20/03/2018</a>
                              <input class="flatpickr-hidden-input" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                           </div>
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
                                                        <th>Name</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                <?php
                                                    if(isset($testimonials)){
                                                    foreach($testimonials as $testimonial){
                                                ?>

                                                    <tr>
                                                        <td><?= $testimonial['id'] ?></td>
                                                        <td>
                                                            <img src="../../uploads/testimonials/<?= $testimonial['image'] ?>" width="40"/>
                                                        </td>
                                                        <td><?= $testimonial['name'] ?></td>
                                                        <td><?= $testimonial['title']?></td>
                                                        <td><?= substr($testimonial['description'],0,25) ?></td>
                                                        <td>
                                                            <small class="badge bg-<?= $testimonial['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $testimonial['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="single_testimonial_view.php?id=<?= $testimonial['id']?>" class="btn btn-info">View</a>
                                                            <a href="edit_testimonial_view.php?id=<?= $testimonial['id']?>" class="btn btn-success mx-2">Edit</a>
                                                            <a href="delete_testimonial.php?id=<?= $testimonial['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $testimonial['id']?>" class="my-1 btn btn-<?= $testimonial['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $testimonial['status'] == 1 ? "Deactive" : "Active" ?>
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
