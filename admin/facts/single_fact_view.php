<?php
    require_once "../inc/header.php";
    require_once "select_single_fact.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">View Fact</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">View Fact</h1>
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
                                                        <th>Facts Number</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <tr>
                                                        <td><?= $fact['id'] ?></td>
                                                        <td><?= $fact['title'] ?></td>
                                                        <td><?= $fact['fact_number'] ?></td>
                                                        <td>
                                                            <small class="badge bg-<?= $fact['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $fact['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="all_facts_view.php" class="btn btn-info">All Facts</a>
                                                            <a href="edit_fact_view.php?id=<?= $fact['id']?>" class="btn btn-success mx-2">Edit</a>
                                                            <a href="delete_fact.php?id=<?= $fact['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure.!')">Delete</a>
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
