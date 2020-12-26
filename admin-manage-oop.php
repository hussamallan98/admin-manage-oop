
        <!-- HEADER MOBILE-->
        <?php 
       // $c = new mysqli('localhost', 'root', '', 'ecom6');
        ob_start();
       include('includes/class.php');
        $admin=new admin();
        
        if(isset($_POST['submit']))
        {
            $email=$_POST['admin-email'];
            $pass=$_POST['admin-password'];
            $fullname=$_POST['admin-name'];
            $admin->setadmin($email,$pass,$fullname);
            $admin->add_admin();


       // header("location:admin-manage.php");
        }
         
        
        
        include('includes/header.php');
        
        ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <!-- END MAIN CONTENT-->
            <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">create Admin</div>
                                    <div class="card-body">
                                        <div class="card-title">  
                                        </div>
                                        <form action="" method="post" novalidate="novalidate" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                                <input id="cc-pament" name="admin-email" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin password</label>
                                                <input id="cc-pament" name="admin-password" type="password" class="form-control" aria-required="true" aria-invalid="false">
                                                <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin full name</label>
                                                <input id="cc-pament" name="admin-name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button id="payment-button" name ="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Save</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                             <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>E-mail</th>
                                                <th>Full Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $arr=$admin->show_admin();
                                             while( $row =mysqli_fetch_assoc($arr)){
                                                    echo "<tr>";
                                                    echo "<td>".$row['admin_id']."</td>";
                                                    echo "<td>".$row['admin_email']."</td>";
                                                    echo "<td>".$row['full_name']."</td>";
                                                    echo "<td><a href='edit_admin_oop.php?id={$row['admin_id']}' class='btn btn-primary'>Edit</a></td>";
                                                    echo "<td><a href='delete_admin_oop.php?id={$row['admin_id']}' class='btn btn-danger'>Delete</a></td>";
                                                    echo "</tr>";
                                                 }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                                <?php include('includes/footer.php'); ?>
                            </div>
            </div><!-- END PAGE CONTAINER-->
        </div>
     
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
