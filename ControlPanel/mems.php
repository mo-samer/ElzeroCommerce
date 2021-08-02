<?php
     session_start();
    
     $pageTitle = 'mems';
     
     if (isset($_SESSION['userName'])) {
         include 'init.php';

         $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

         if ($do == 'Manage') {
         } elseif ($do == 'Edit') {     //edit Page

             $userid = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0 ;

             $stmt = $conn->prepare("SELECT * FROM  users  WHERE id = ? LIMIT 1");

             $stmt->execute(array($userid));
             $row = $stmt->fetch();
             $count = $stmt->rowCount();

             if ($stmt->rowCount() > 0) { ?>

<h1 class="text-center">Edit Page</h1>


<div class="container">
    <form class="form-horizontal">
        <!--Username-->
        <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="username" class="form-control" value="<?php echo $row['userName']?>"
                    autocomplete="off" />
            </div>
        </div>
        <!--Password-->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10 col-md-4">
                <input type="password" name="password" class="form-control" autocomplete="new-password" />
            </div>
        </div>
        <!--Email-->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10 col-md-4">
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>" />
            </div>
        </div>
        <!--Full Name-->
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="Full Name" class="form-control" value="<?php echo $row['fullName']?>" />
            </div>
        </div>
        <!--Save-->
        <div class="form-group form-group-lg">
            <div class="col-sm-offest-2 col-sm-10">
                <input type="submit" value="Save" class="btn btn-primary btn-lg" />
            </div>
        </div>
    </form>
</div>


<?php }

             include $tpl . 'footer.php';
         } else {
             header('Location: index.php');

             exit();
         }
     }