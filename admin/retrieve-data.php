<?php
include('database/mydbCon.php');
include('main/header.php');
$query="select * from content limit 150"; // Fetch all the data from the table customers
$result=mysqli_query($dbCon,$query);


if(isset($_POST['edit_btn']))
    {
        $id=$_POST['edit_id'];
        
        $query="SELECT * FROM content WHERE id-'$id'";
        $result=mysqli_query($dbCon,$query);
    }


    if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $content_eng = $_POST['content_eng'];
    $content_dut = $_POST['content_dut'];
    
    $query = "UPDATE content SET content_eng='$content_eng', content_dut='$content_dut' WHERE id='$id' ";
    $result=mysqli_query($dbCon,$query);

    if($result)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('content.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('content.php'); 
    }
}


$sql="SELECT content FROM page";
$result=mysqli_query($dbCon,$query);

?>