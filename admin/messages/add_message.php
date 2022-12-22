<?php
$error = [];
if(isset($_POST['submit'])){
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $subject = trim(htmlentities($_POST['subject']));
    $description = trim(htmlentities($_POST['description']));

// name validation
    if(empty($name)){
        $error['name_err'] = "<p class='text-danger'>enter you name.!</p>";
    }elseif(strlen($name) > 50){
        $error['name_err'] = "<p  class='text-danger'>Max character name 50.!</p>";
    }

// email validation
    if(empty($email)){
        $error['email_err'] = "<p  class='text-danger'>enter you email.!</p>";
    }elseif(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email_err'] = "<p  class='text-danger'>enter valid not email.!</p>";
    }
// sbuject validation
    if(empty($subject)){
        $error['subject_err'] = "<p class='text-danger'>enter you subject.!</p>";
    }elseif(strlen($subject) > 50){
        $error['subject_err'] = "<p  class='text-danger'>Max character subject 50.!</p>";
    }

//description validation

    if(strlen($description) > 200){
        $error['description_err'] = "<p  class='text-danger'>Max description 200!</p>";
    }

//insert query
    if(empty($error)){

        $query = "INSERT INTO messages(name, email, subject, description) VALUES ('$name','$email','$subject','$description')";
        mysqli_query($connect,$query);    

    }

}
