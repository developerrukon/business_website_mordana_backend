<?php
    require_once "../inc/header.php";
    include_once "select_single_why_us.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Why Us</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">Why Us</h1>
                           <?php

                                if(isset($_SESSION['message'])){
                                    echo $_SESSION['message'];
                                }
                                unset($_SESSION['message']);
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
                                                        <th>Title One</th>
                                                        <th>Description One</th>
                                                        <th>Icon One</th>
                                                        <th>Title Two</th>
                                                        <th>Description Two</th>
                                                        <th>Icon Two</th>
                                                        <th>Video Image</th>
                                                        <th>Video Url</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                
                                                        <td><?= $why_us['id'] ?></td>
                                                        <td>
                                                            <img src="../../uploads/why-us/<?= $why_us['image'] ?>" width="60"/>
                                                        </td>
                                                        <td><?= $why_us['title_one'] ?></td>
                                                        <td><?= substr($why_us['description_one'],0,30) ?></td>
                                                        <td><?= $why_us['icon_one'] ?></td>
                                                        <td><?= $why_us['title_two'] ?></td>
                                                        <td><?= substr($why_us['description_two'],0,30) ?></td>
                                                        <td><?= $why_us['icon_two'] ?></td>
                                                        <td><?= $why_us['image'] ?></td>
                                                        <td><?= substr($why_us['video_url'],0, 30)?></td>
                                                        
                                                        <td>
                                                            <small class="badge bg-<?= $why_us['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $why_us['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="why_us_details_view.php" class="btn btn-info my-1">View</a>
                                                            <a href="edit_why_us_view.php" class="btn btn-success my-1 mx-2">Edit</a>
                                                            <a href="delete_why_us.php" class="btn btn-danger my-1" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php" class="my-1 btn btn-<?= $why_us['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $why_us['status'] == 1 ? "Deactive" : "Active" ?>
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
