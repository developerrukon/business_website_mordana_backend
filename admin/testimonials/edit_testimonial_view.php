<?php
    include_once "edit_testimonial.php";
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
                           <h1 class="m-0">Edit Testimonial</h1>
                        </div>
                        
                     </div>
                  </div>
                  <div class="container-fluid page__container">
<!-- header controler end-->

<!-- card card-for start-->
                  <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Default Forms</strong></p>
                                        <p class="text-muted">FlowDash supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <?php
                                                // if(isset($_SESSION['message'] )){
                                                //     echo $_SESSION['message'] ;
                                                // }
                                                // unset($_SESSION['message'] );
                                            ?>
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" name="name" class="form-control" value="<?= $testimonial['name'] ?>" />
                                                <?php
                                                    if(isset($error['name_err'])){
                                                        echo $error['name_err'];
                                                    }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label>title:</label>
                                                <input type="text" name="title" class="form-control" value="<?= $testimonial['title'] ?>" />
                                                <?php
                                                    if(isset($error['title_err'])){
                                                        echo $error['title_err'];
                                                    }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Description :</label>
                                                <textarea name="description" class="form-control"rows="8" ><?= $testimonial['description']?></textarea>
                                                <?php
                                                    if(isset($error['descrip_err'])){
                                                        echo $error['descrip_err'];
                                                    }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Image:</label>
                                                <input type="file" name="image" class="form-control"/>
                                                <img src="../../uploads/testimonials/<?= $testimonial['image']?>" width="40"/>
                                                <?php
                                                    if(isset($error['image_err'])){
                                                        echo $error['image_err'];
                                                    }
                                                ?>
                                            </div>

                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
<!-- card card-for end-->

                
<!-- footer controler start-->

                  </div>
<?php
    require_once "../inc/footer.php";
?>
<!-- footer controler end-->
