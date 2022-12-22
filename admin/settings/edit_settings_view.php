<?php
require_once "select_single_settings.php";
require_once "../inc/header.php";
require_once "edit_settings.php";

?>
<!-- header controler start-->
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard text-primary"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-pen text-primary"></i>Update Settings</li>
                </ol>
            </nav>
            <h1 class="m-0"><i class="fa fa-pen text-primary"></i>Update Settings</h1>
        </div>

    </div>
</div>
<div class="container-fluid page__container">
    <!-- header controller end-->

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
                        <label>Website Name:</label>
                        <input type="text" name="website_name" class="form-control" value="<?= $settings['website_name'] ?>" />
                        <?php
                        if (isset($error['name_err'])) {
                            echo $error['name_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Logo:</label>
                        <input type="file" name="logo" class="form-control" value="<?= $settings['logo'] ?>" />
                        <img src="../../uploads/settings/<?= $settings['logo']?> " width="60" />
                       <?php
                        if (isset($error['logo_err'])) {
                            echo $error['logo_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Footer Text:</label>
                        <input type="text" name="footer_text" class="form-control" value="<?= $settings['footer_text'] ?>" />
                        <?php
                        if (isset($error['footer_err'])) {
                            echo $error['footer_err'];
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