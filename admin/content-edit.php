<?php 
include('main/header.php');
include('main/navbar.php');
include('database/mydbCon.php');

// if (!isset($_SESSION["id"])) {
//     header("Location: login.php");
//   }
?>

<div class="container-fluid">
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM content WHERE id='$id' ";
                $result=mysqli_query($dbCon,$query);

                foreach($result as $row)
                {
                    ?>
                    <!-- <a href="retrieve-data.php?id='$id'"></a> -->
                <form action="retrieve-data.php" method="POST">
                     <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
 
                <div class="form-group">
                    <label>Content English</label>
                    <input type="text" name="content_eng" value="<?php echo $row['content_eng'] ?>"
                        class="form-control" placeholder="Enter Content">
                </div>
                <div class="form-group">
                    <label>Content Deutsch</label>
                    <input type="text" name="content_dut" value="<?php echo $row['content_dut'] ?>"
                        class="form-control" placeholder="Enter Content">
                </div>

                <a href="content.php" class="btn btn-danger"> CANCEL </a>
                <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>



<?php 
    include('main/scripts.php');
    include('main/footer.php');

    ?> 