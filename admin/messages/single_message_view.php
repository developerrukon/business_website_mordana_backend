<?php
    require_once "../inc/header.php";
    require_once "select_single_message.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">View Message</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">View Message</h1>
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
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                    <td><?= $message['id'] ?></td>
                                                        <td><?= $message['name'] ?></td>
                                                        <td><?= $message['email'] ?></td>
                                                        <td><?= $message['subject'] ?></td>
                                                        <td><?= $message['description']?></td>
                                                        <td>
                                                            <small class="badge bg-<?= $message['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $message['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="all_messages_view.php" class="btn btn-primary mx-2">All View</button>
                                                            <a href="delete_message.php?id=<?= $message['id'] ?>" class="btn btn-warning">Delete</button>
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
