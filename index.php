<?php include_once './parts/header.php' ?>
        <div class="position-relative   text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
                <img src="images/tea.png" alt="" class="tea">
                <h1 class="display-4 fw-normal">اربح كوبايه شاى بالنعناع</h1>
                <p class="lead fw-normal">باقى على فتح التسجيل</p>
                <h3 id="countdown"></h3>
                <a class="btn btn-outline-secondary" href="#">شارك بالسحب على كوباية شاي بالنعناع </a>
            </div>
            <div class="container">
            <h3>عشان تخش السحب: </h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">تابع البث المباشر</li>
                    <li class="list-group-item">سيتم اختيار اسم واحد من قاعده البيانات بشكل عشوائى</li>
                    <li class="list-group-item">الرابح هيحصل على كوبايه شاى بالنعناع</li>
        
                </ul>
            </div>
        </div>


    <div class="container">
        <div class="position-relative  text-center ">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h3>بالرجاء ادخال المعلومات</h3>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">الاسم الاول</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $first_name?>" id="firstName">
                        <div  class="form-text error"><?php echo $errors['firstNameError']?></div>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">الاسم الاخير</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $second_name?>" id="lastName">
                        <div class="form-text error"><?php echo $errors['lastNameError']?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">الأيميل الكترونى</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $email?>" id="email">
                        <div  class="form-text error"><?php echo $errors['emailError']?></div>
                    </div>
                    <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    

    <div class="loader-con">

        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>

    </div>
    

    <!-- Button trigger modal -->
    <div id="winner" class="d-grid gap-2 col-12 mx-auto my-5">

        <button type="button" class="btn btn-primary" >
        مين المحظوظ
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mo" tabindex="-1" aria-labelledby="moLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="moLabel">الكسبان بكوبايه الشاي</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <?php  foreach($users as $user) :  ?>
            <h1 class='display-3 text-center modal-title' id="moLabel"><?php echo htmlspecialchars($user["fname"])." ".
                 htmlspecialchars($user["lname"])."<br>"?> </h1>    
            <?php endforeach?>

        </div>
        </div>
    </div>
    </div>









<!-- مش محتاجينه 

    <div id="cards"  class="row mb-5 pb-5">
       
    
        
            <div class="col-sm-6">
                <div class='card my-2 bg-light'>
                    <div class='card-body'>
                        <h5 class="card-title"></h5>
                        <p class="card-text"><?php echo htmlspecialchars($user['email'])?></p>
                    </div>
                </div>
            </div>
        
    </div> -->
<?php include_once './parts/footer.php' ?>