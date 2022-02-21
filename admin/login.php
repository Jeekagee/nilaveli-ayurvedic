<?php
include('../connection.php');
$error = "";
if (isset($_SESSION["user_id"])) {
    header("Location: index.php");
}
if(isset($_POST['login'])) {
    // username and password sent from form 
    
    $username = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn,$_POST['pwd']); 
    $epwd=md5($password);
    
    $sql = "SELECT id FROM login WHERE user_name = '$username' and pwd = '$epwd'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count == 1) {
        $id = $row['id'];
        $_SESSION['user_id'] = $id;
        header("Location: index.php");
      }else {
        $error = "<div class='alert alert-warning'>Username or Password is Invalid!</div>";
     }
  }
  

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: linear-gradient(180deg,#f3f2f2 10%,#e5e7ed 100%);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <div>
                                        <?php
                                        echo $error;
                                        ?>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <img src="/ayurvedic-nilaveli-resort.kodplex.com/images/img_36.jpg"  style="width:100%">
                                    </div>
                                    <form class="user" action='login.php' method='POST'>
                                    <div class="col-md-12">
                                    <div class="form-group text-right">
                                            <input name="uname" type="text" class="form-control form-control-user"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="Enter your User Name">
                                        </div>
                                        <div class="form-group">
                                            <input name="pwd" type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="login" name="login">
                                        <hr>
</div>
                                    </form>
</div>   
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>