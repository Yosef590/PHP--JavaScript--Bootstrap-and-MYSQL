<?php
include './int/conn.php';
include './int/form.php';
include './int/select.php';
include './int/db_close.php';




?>


<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">اربح مع يوسف </h1>
            <p class="lead fw-normal">كيف حالكم</p>
            <h3 id="demo"></h3>
            <a class="btn btn-outline-secondary" href="#">بخير</a>
            </div>
             
        </div>
            <!-- <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul> -->
    

            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <h3>Enter your information</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName" value="<?php echo $firstName?>">
                <div id="emailHelp" class="form-text"><?php echo $Error['firstNameError']?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastName" value="<?php echo $lastName?>">
                <div id="emailHelp" class="form-text"><?php echo $Error['lastNameError']?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email?>">
                <div id="emailHelp" class="form-text"><?php echo $Error['emailError']?></div>
            </div>
           
            <button type="submit" class="btn btn-primary"  name="submit">send</button>
            </form>
            </div>
            <div class="loader-con">
            <div id="loader">
	            <canvas id="circularLoader" width="200" height="200"></canvas>
            </div>
            </div>
            <!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5"  id="cards">
<button id="winner" type="button" class="btn btn-primary" >
  choose the win
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">the winner</h5>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center" >
      <?php foreach($users as $user): ?>
        <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?><br>
        <?php echo htmlspecialchars($user['email'])?>
      </div>
      <?php endforeach; ?>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
            
        </div>
    </div>

<!-- <form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder = "Email">
    <input type="submit" name="submit" value="send">
</form> -->


<!-- <button id="winner" type="button" class="btn btn-primary">winner</button>
<div class="row mb-5 pb-light"  id="cards"> -->
    
<!-- <?php foreach($users as $user): ?>
    <div class="col-sm-6">
        <div class="card my-2 bg-loght">
            <div class="card-body">
         <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
          <p class="card-text"><?php echo htmlspecialchars($user['email'])?></p>
        </div>
        </div>
    </div>
<?php endforeach; ?> -->
<!-- </div> -->
    
    
    <script src="./JS/bootstrap.bundle.min.js"></script>
    <script src="./JS/script.js"></script>

</body>
</html>