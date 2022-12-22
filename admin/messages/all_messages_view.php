<?php
    require_once "select_all_messages.php";
    require_once "../inc/header.php";

?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">All Message</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">All Message</h1>
                           <?php
                           
                                // if(isset($_SESSION['message_message'])){
                                //     echo $_SESSION['message_message'];
                                // }
                                // unset($_SESSION['message_message']);
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
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <thead>
                                                <?php
                                                    if(isset($messages)){
                                                    foreach($messages as $message){
                                                ?>

                                                    <tr>
                                                        <td><?= $message['id'] ?></td>
                                                        <td><?= $message['name'] ?></td>
                                                        <td><?= $message['email'] ?></td>
                                                        <td><?= $message['subject'] ?></td>
                                                        <td><?= substr($message['description'],0,30) ?></td>
                                        
                                                        <td>
                                                            <small class="badge bg-<?= $message['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $message['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="single_message_view.php?id=<?= $message['id']?>" class="btn btn-info">View</a>
                                                            <a href="delete_message.php?id=<?= $message['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $message['id']?>" class="my-1 btn btn-<?= $message['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $message['status'] == 1 ? "Deactive" : "Active" ?>
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
