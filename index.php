<?php


include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';





?>

<?php include_once './parts/header.php'; ?>

<div class="container" dir="rtl">

<p align="center">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTob0t_bcFVeyeZHOLTyokXYXfqtqMRhO_cjw&s">
</p>

  <h1 class="display-4 fst-italic"><p align="center"><font size="8">
    شارك في فرصة ربح جوائز قيمة
    </font> </p></h1>
  <p class="lead my-3">

    <p align="center">
    <font size="8">
    باقي على السحب
  </font> </p></p> 

  

  <font size="6" color="red">

  <p align="center" id="#counter"></p>
  </font>



<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark text-right">
<div class="col-md-7 px-0"> 

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" dir="rtl">
 <h3><p align="left">تسجيل دخول</p></h3><br>   

        <div class="mb-3">
            <label for="firstName" class="form-label">الاسم الاول</label>
            <input type="text" name="firstName" id="firstName" class="form-control"  value = "<?php echo $firstName ?>">
            <div id="emailHelp" class="form-text"><?php echo $errors['firstNameError'] ?></div>
        </div>
       
        <div class="mb-3">
            <label for="lastName" class="form-label">الاسم الاخير</label>
            <input type="text" name="lastName" id="lastName" class="form-control"  value = "<?php echo $lastName ?>">
            <div id="emailHelp" class="form-text"><?php echo $errors['lastNameError'] ?></div>
        </div>
       
        <div class="mb-3">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input type="text" name="email" id="email" class="form-control"  value = "<?php echo $email ?>">
            <div id="emailHelp" class="form-text"><?php echo $errors['emailError'] ?></div>
        </div>
       
        <button type="submit" id="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button></p>
  </form>
</div>

    </div>

<div class="loader-con">
    <div id="loader">
      <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>
   <!-- Button trigger modal -->
    <div class="text-center">
            <button id="winner" class=" btn btn-primary btn-lg mb-3" >
                اضغط لأظهار الرابح
            </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
          <h5 class="modal-title" id="modalLabel">الرابح معنا</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 

      <?php foreach($users as $user) : ?>
          <h1 class=" display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName'])  . ' ' .  htmlspecialchars($user['lastName']) ?></h1>
      <?php endforeach; ?>

  

      </div>
    </div>
  </div>
</div>



<?php include_once './parts/footer.php'; ?>
