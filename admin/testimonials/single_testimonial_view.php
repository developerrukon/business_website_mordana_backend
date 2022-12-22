<?php
    require_once "../inc/header.php";
    require_once "select_single_testimonial.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">View Testimonial</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">View Testimonial</h1>
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
                                                <tbody>

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
                                                            <a href="all_testimonials_view.php?id=<?= $testimonial['id'] ?>" class="btn btn-primary">All testimonials</button>
                                                            <a href="edit_testimonial_view.php?id=<?= $testimonial['id'] ?>" class="btn btn-success mx-2">Edit</button>
                                                            <a href="delete_testimonial.php?id=<?= $testimonial['id'] ?>" class="btn btn-warning">Delete</button>
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
