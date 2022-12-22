<?php
require_once "../inc/header.php";
include_once "user.php";
include_once "edit_profile.php";

?>
<!-- header controller start-->
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Feature</li>
                </ol>
            </nav>
            <h1 class="m-0"><i class="fa fa-pen text-primary"> </i> Edit Profile</h1>
        </div>
    </div>
</div>
<div class="container-fluid page__container">
    <!-- header controller end-->

    <!-- card card-for start-->
    <div class="card card-form">
        <div class="row">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Default Forms</strong></p>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form  method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>title:</label>
                        <input type="text" name="name" class="form-control" value="<?=$user['name']?>" />
                        <?php
                        if (isset($error['nameErr'])) {
                            echo $error['nameErr'];
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="<?=$user['email']?>" />
                        <?php
                        if (isset($error['emailErr'])) {
                            echo $error['emailErr'];
                        }
                        ?>
                    </div>
                  
                    <div class="form-group">
                        <label>Feature Image:</label>
                        <input type="file" name="photo" class="form-control"/>
                        <img src="../images/<?= $user['photo']?>" width="60"/>
                        <?php
                        if (isset($error['photoErr'])) {
                            echo $error['photoErr'];
                        }
                        ?>
                    </div>
    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- card card-for end-->


    <!-- footer controller start-->

</div>
<?php
require_once "../inc/footer.php";
?>
<!-- footer controller end-->