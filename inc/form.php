<?php
    $first_name  = $_POST["fname"] ?? '';
    $second_name = $_POST["lname"] ?? '';
    $email       = $_POST["email"] ?? '';

    $errors=[
        'firstNameError' => '',
        'lastNameError' => '',
        'emailError' => ''
    ];
    if(isset($_POST['submit'])){
       
        if(empty($first_name)){
            $errors['firstNameError'] = 'بالرجاء ادخال الاسم الاول';
        }
        if(empty($second_name)){
            $errors['lastNameError'] = 'بالرجاء ادخال الاسم الاخير';
        }
        if(empty($email)){
            $errors['emailError'] = 'بالرجاء ادخال الايميل';
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['emailError'] = 'بالرجاء ادخال الايميل بشكل صحيح';
        }

        if(!array_filter($errors)){
            $first_name = mysqli_real_escape_string($conn,$_POST["fname"]);
            $second_name = mysqli_real_escape_string($conn, $_POST["lname"]);
            $email = mysqli_real_escape_string($conn,$_POST["email"]);

            $sql = "INSERT INTO users(fname,lname,email) 
                    VALUES ('$first_name','$second_name','$email')";
            if(mysqli_query($conn,$sql)){
                header("Location: ".$_SERVER['PHP_SELF']);
            }else{
                echo "Error: ". mysqli_error($conn);
            }
        }

    }
?>