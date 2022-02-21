<?php
include('../connection.php');
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
        echo $error = "Your Login Name or Password is invalid";
     }
  }
?>