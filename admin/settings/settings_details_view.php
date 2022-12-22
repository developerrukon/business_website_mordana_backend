<?php
    require_once "../inc/header.php";
    require_once "select_single_why_us.php";
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

                                            <table class="table mb-0 thead-border-top-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>1.Id</td>
                                                        <td><?= $why_us['id'] ?></td>
                                                    </tr>                                       
                                                    <tr>
                                                        <td>2.Title One</td>
                                                        <td><?= $why_us['title_one'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.Description One</td>
                                                        <td><?= $why_us['description_one'] ?></td>
                                                    </tr>   
                                                    
                                                    <tr>
                                                        <td>4.Icon One</td>
                                                        <td><?= $why_us['icon_one'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.Title Two</td>
                                                        <td><?= $why_us['title_two'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.Description Two</td>
                                                        <td><?= $why_us['description_two'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.Icon Two</td>
                                                        <td><?= $why_us['icon_two'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8.Video Image</td>
                                                        <td><?= $why_us['image'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>9.Video Url</td>
                                                        <td><?= $why_us['video_url'] ?></td>
                                                    </tr>
                                                    <tr>
                                                    <td>10.Action</td>
                                                        <td>
                                                            <small class="badge bg-<?= $why_us['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $why_us['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="why_us_view.php" class="btn btn-info my-1">Back</button>
                
                                                            </button>
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
