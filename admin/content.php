<?php 
include('main/header.php');
include('main/navbar.php');
include('database/mydbCon.php');

// if (!isset($_SESSION["id"])) {
//     header("Location: login.php");
//   }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Content</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

        
    <!-- Page Wrapper -->
    <div id="wrapper">
    
        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    
                    <?php
                    $query = "SELECT page FROM content GROUP BY page";
                    $result=mysqli_query($dbCon,$query);
                    ?>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-12 my-12 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                                <select onchange="location = this.value;" class="form-control"name="" id="">
                                <?php
                                $select="";
                                    while ($row = $result -> fetch_assoc()){

                                            if (isset($_GET['page'])) {
                                                # code...
                                                if($row['page']==$_GET['page']){
                                                    $select="selected";
                                                }
                                                else{
                                                    $select="";
                                                }
                                            }
                                            else{
                                                if($row['page']=='home'){
                                                    $select="selected";
                                                }
                                                else{
                                                    $select="";
                                                }
                                            }
                                        
                                        ?>
                                        <option <?php echo $select;?> value="content.php?page=<?php echo $row['page']; ?>"><?php echo $row['page']; ?></option>
                                        <?php
                                        
                                    }
                                ?>
                                        <option name="years"> </option>  
                                </select>
                        </div>
                    </form> 
                    
                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-12">
                        <div class="card-header py-12">
                            <h6 class="m-0 font-weight-bold text-primary">Ayurvedic Resort</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Content English</th>
                                            <th>Content Deutsch</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    //include 'retrieve-data.php';
                                    if (isset($_GET['page'])) {
                                        $page = $_GET['page'];
                                        $sql_con = "SELECT * FROM content WHERE page = '$page'";
                                    }
                                    else{
                                        $sql_con = "SELECT * FROM content WHERE page = 'home'";
                                    }
                                    $result_con=mysqli_query($dbCon,$sql_con);
                                    $i = 1;
                                    ?>
                                        <?php if ($result_con->num_rows > 0): ?>
                                        <?php while($row_con= $result_con->fetch_assoc()): ?>
                                        <tr>
                                            <th scope="row"><?php echo $i;?></th>
                                            <td><?php echo $row_con['name'];?></td>
                                            <td><?php echo $row_con['content_eng'];?></td>
                                            <td><?php echo $row_con['content_dut'];?></td>
                                            <td>
                                            <a href="content-edit.php?edit_id=<?php echo $row_con['id'];?>" name="edit_id" class="btn btn-success">Edit</a> 
                                            <!-- <form action="content-edit.php" method="POST">

                                                <input type="hidden" name="edit_id" value="<?php echo $i;?>">
                                                <button type="submit" name="edit_btn" class="btn btn-success">Edit </button>

                                                </form> -->
                                               
                                    
                                            </td>
                                        </tr>
                                        <?php 
                                        $i++;
                                    endwhile; ?>
                                        <?php else: ?>
                                        <tr>
                                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($result); ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>

<?php 
    include('main/scripts.php');
    include('main/footer.php');

    ?> 