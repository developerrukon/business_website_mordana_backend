<?php

require_once "select_single_service.php";
require_once "edit_service.php";
require_once "../inc/header.php";

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
            <h1 class="m-0"><i class="fa fa-pen text-primary"></i>Edit Service</h1>
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

    <!-- card card-for start-->
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Default Forms</strong></p>
                <p class="text-muted">Moderna supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form method="POST">

                    <div class="form-group">
                        <label>title:</label>
                        <input type="text" name="title" class="form-control" value="<?= $service['title'] ?>" />
                        <?php
                        if (isset($error['title_err'])) {
                            echo $error['title_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <textarea name="description" class="form-control" rows="8"><?= $service['description'] ?></textarea>
                        <?php
                        if (isset($error['descrip_err'])) {
                            echo $error['descrip_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Icon:</label>
                        <input type="text" name="icon" class="form-control" value="<?= $service['icon'] ?>" />
                        <p>Edit icon for ex: bx bx-fingerprint <a href="https://icons.getbootstrap.com/icons/fingerprint/">helf</a></p>
                        <?php
                        if (isset($error['icon_err'])) {
                            echo $error['icon_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Icon Color:</label>
                        <input type="text" name="icon_color" class="form-control" value="<?= $service['icon_color'] ?>" />
                        <p>Edit icon color for ex: icon-box-pink <a href="https://icons8.com/icons/set/pink-color">helf</a></p>
                        <?php
                        if (isset($error['icon_color_err'])) {
                            echo $error['icon_color_err'];
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