<?php
require_once "../inc/header.php";
require_once "select_single_why_us.php";
 include_once "edit_why_us.php";

?>
<!-- header controler start-->
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard text-primary"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-pen text-primary"></i>Edit Service</li>
                </ol>
            </nav>
            <h1 class="m-0"><i class="fa fa-pen text-primary"></i>Edit Why-Us</h1>
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
                <p class="text-muted">Moderna supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
<!-- input form start-->               
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Title One:</label>
                        <input type="text" name="title_one" class="form-control" value="<?= $why_us['title_one'] ?>" />
                        <?php
                        if (isset($error['title_one_err'])) {
                            echo $error['title_one_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Description One:</label>
                        <input type="text" name="description_one" class="form-control" value="<?= $why_us['description_one'] ?>" />
                        <?php
                        if (isset($error['description_one_err'])) {
                            echo $error['description_one_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Icon One:</label>
                        <input type="text" name="icon_one" class="form-control" value="<?= $why_us['icon_one'] ?>" />
                        <p>edit icon for ex: bx bx-gift <a href="https://icon-sets.iconify.design/bx/gift/">helf</a></p>

                        <?php
                        if (isset($error['icon_one_err'])) {
                            echo $error['icon_one_err'];
                        }
                        ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Title Two:</label>
                        <input type="text" name="title_two" class="form-control" value="<?= $why_us['title_two'] ?>" />                        <?php
                        if (isset($error['title_two_err'])) {
                            echo $error['title_two_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Description Two:</label>
                        <input type="text" name="description_two" class="form-control" value="<?= $why_us['description_two'] ?>" />
                        <?php
                        if (isset($error['description_two_err'])) {
                            echo $error['description_two_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Icon Two:</label>
                        <input type="text" name="icon_two" class="form-control" value="<?= $why_us['icon_two'] ?>" />
                        <p>edit icon for ex: bx bx-gift <a href="https://icon-sets.iconify.design/bx/gift/">helf</a></p>

                        <?php
                        if (isset($error['icon_two_err'])) {
                            echo $error['icon_two_err'];
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" name="image" class="form-control" />
                        <img src="../../uploads/why-us/<?= $why_us['image'] ?>" width="60">
                        <?php
                        if (isset($error['image_err'])) {
                            echo $error['image_err'];
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Video Url:</label>
                        <input type="text" name="video_url" class="form-control" value="<?= $why_us['video_url'] ?>" />
                        <?php
                        if (isset($error['video_url_err'])) {
                            echo $error['video_url_err'];
                        }
                        ?>
                    </div>
                   
                   

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
<!-- input form start--> 
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