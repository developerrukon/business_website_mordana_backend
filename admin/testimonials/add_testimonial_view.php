<?php
require_once "add_testimonial.php";
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
            <h1 class="m-0"><i class="fa fa-user-plus text-primary"></i>Add Testimonial</h1>
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
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="<?php if (isset($name)) echo $name  ?>" />
                        <?php
                        if (isset($error['name_err'])) {
                            echo $error['name_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" value="<?php if (isset($title)) echo $title  ?>" />
                        <?php
                        if (isset($error['title_err'])) {
                            echo $error['title_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <textarea name="description" class="form-control" rows="5"><?php if (isset($description)) echo $description  ?></textarea>
                        <?php
                        if (isset($error['descrip_err'])) {
                            echo $error['descrip_err'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" name="image" class="form-control" />
                        <?php
                        if (isset($error['image_err'])) {
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