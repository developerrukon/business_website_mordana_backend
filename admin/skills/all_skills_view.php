<?php
    require_once "../inc/header.php";
    require_once "select_all_skills.php";
?>
<!-- header controler start-->
                  <div class="container-fluid page__heading-container">
                     <div class="page__heading d-flex align-items-end">
                        <div class="flex">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Add Skill</li>
                              </ol>
                           </nav>
                           <h1 class="m-0">All Skills</h1>
                           <?php

                                if(isset($_SESSION['skill_mess'])){
                                    echo $_SESSION['skill_mess'];
                                }
                                unset($_SESSION['skill_mess']);
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
                                                        <th>Skill Number</th>
                                                        <th>Skill Percent</th>
                                                        <th>Skill Color</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    if(isset($skills)){
                                                    foreach($skills as $skill){
                                                ?>

                                                    <tr>
                                                        <td><?= $skill['id'] ?></td>
                                                        <td><?= $skill['title'] ?></td>
                                                        <td><?= $skill['skill_number'] ?></td>
                                                        <td><?= $skill['skill_percent'] ?></td>
                                                        <td><?= $skill['skill_color'] ?></td>
                                                        <td>
                                                            <small class="badge bg-<?= $skill['status'] == 1 ? "primary" : "warning" ?> text-light">
                                                                <?= $skill['status'] == 1 ? "Active" : "Deactive" ?>
                                                            </small>
                                                            
                                                        </td>
                            
                                                        <td>
                                                            <a href="single_skill_view.php?id=<?= $skill['id']?>" class="btn btn-info">View</a>
                                                            <a href="edit_skill_view.php?id=<?= $skill['id']?>" class="btn btn-success mx-2">Edit</a>
                                                            <a href="delete_skill.php?id=<?= $skill['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure.!')">Delete</a>
                                                            <a href="status.php?id=<?= $skill['id']?>" class="btn btn-<?= $skill['status'] == 1 ? "warning" : "primary" ?> mx-2">
                                                                <?= $skill['status'] == 1 ? "Deactive" : "Active" ?>
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
