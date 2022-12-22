<?php
    require_once "../inc/header.php";
    require_once "select_single_about.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">About Details</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">About Details</h1>
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
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><?= $about['id'] ?></td>
                                                        <td><?= $about['title'] ?></td>
                                                        <td><?= html_entity_decode($about['description'])?></td>
                                                        <td>
                                                            <img src="../../uploads/about/<?= $about['image'] ?>" width="60"/>
                                                        </td>
                                                        <th>
                                                            <small class="badge bg-<?= $about['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $about['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </th>
                                                        <td>
                                                            <a href="edit_about_view.php" class="btn btn-success my-1 mx-2">Edit</button>
                                                            <a href="delete_about.php" class="btn btn-danger my-1">Delete</button>
                                                            <a href="status.php" class="my-1 btn btn-<?= $about['status'] == 1 ? "warning" : "primary" ?> my-1 mx-2">
                                                                <?= $about['status'] == 1 ? "Deactive" : "Active" ?>
                                                            </a>
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
