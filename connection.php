<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "ayurvedic";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

function content($name) {
    global $conn;
    $sql = "SELECT * FROM content WHERE name='$name' LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (isset($_SESSION["language"])) {
        if ($_SESSION["language"] =="eng") {
          echo $row["content_eng"];
        }
        else{
          echo $row["content_dut"];
        }
    }
    else{
       
        echo $row["content_dut"];
      
    }
    
   }
   
?>
