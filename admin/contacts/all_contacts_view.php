<?php
    require_once "../inc/header.php";
    require_once "select_all_contacts.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">All Contacts</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">All Contacts</h1>
                           <?php

                                // if(isset($_SESSION['contact_mess'])){
                                //     echo $_SESSION['contact_mess'];
                                // }
                                // unset($_SESSION['contact_mess']);
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
                                                    if(isset($contacts)){
                                                    foreach($contacts as $contact){
                                                ?>

                                                    <tr>
                                                        <td><?= $contact['id'] ?></td>
                                                        <td><?= $contact['title'] ?></td>
                                                        <td><?= substr(html_entity_decode($contact['description']),0,25) ?></td>
                                                         <td>
                                                            <small class="badge bg-<?= $contact['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $contact['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                                                        <td><?= $contact['icon'] ?></td>
                                                        <td><?= $contact['icon_color'] ?></td>
                                          
                                                        <td>
                                                            <a href="single_contact_view.php?id=<?= $contact['id']?>" class="btn btn-info my-1">View</a>
                                                            <a href="edit_contact_view.php?id=<?= $contact['id']?>" class="btn btn-success my-1 mx-2">Edit</a>
                                                            <a href="delete_contact.php?id=<?= $contact['id']?>" class="btn btn-danger my-1" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $contact['id']?>" class=" my-1 btn btn-<?= $contact['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $contact['status'] == 1 ? "Deactive" : "Active" ?>
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
