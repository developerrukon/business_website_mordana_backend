<?php

require_once "select_single_fact.php";
require_once "edit_fact.php";
require_once "../inc/header.php";

?>
<!-- header controler start-->
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard text-primary"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-pen text-primary"></i>Edit Facts</li>
                </ol>
            </nav>
            <h1 class="m-0"><i class="fa fa-pen text-primary"></i>Edit Facts</h1>
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
                        <input type="text" name="title" class="form-control" value="<?= $fact['title'] ?>" />
                        <?php
                        if (isset($error['title_err'])) {
                            echo $error['title_err'];
                        }
                        ?>
                    </div>
    
                    <div class="form-group">
                        <label>Fact Number:</label>
                        <input type="text" name="fact_number" class="form-control" value="<?= $fact['fact_number'] ?>" />
                        <?php
                        if (isset($error['fact_err'])) {
                            echo $error['fact_err'];
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