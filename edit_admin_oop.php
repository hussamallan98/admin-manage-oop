	<?php 
	ob_start();
	include('includes/header.php');
	include('includes/class.php');
	$s=new admin();
	$arr=$s->select($_GET['id']);
	$row=mysqli_fetch_assoc($arr);
	if(isset($_POST['update'])){
         $email    = $_POST['admin-email'];
         $pass = $_POST['admin-password'];
         $fullname = $_POST['admin-name'];
        $id=$_GET['id'];

        $s->setadmin($email,$pass,$fullname);

		$s->update($id);
		
		header("location:admin-manage-oop.php");
    }

	?>
	<div class="main-content">
	                <div class="section__content section__content--p30">
	                    <div class="container-fluid">
	                        
	            
	            <!-- END MAIN CONTENT-->
	            <div class="row">
	                            <div class="col-lg-12">
	                                <div class="card">
	                                    <div class="card-header">Update Admin</div>
	                                    <div class="card-body">
	                                        <div class="card-title">
	                                           
	                                        </div>
	                                      
	                                        <form action="" method="post" >
	                                            <div class="form-group">
	                                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
	                                                <input id="cc-pament" name="admin-email" type="text" class="form-control" 
	                                                 value= "<?php
	                                                    echo $row['admin_email'];
	                                                 ?>">
	                                            </div>
	                                            <div class="form-group">
	                                                <label for="cc-payment" class="control-label mb-1">Admin password</label>
	                                                <input id="cc-pament" name="admin-password" type="password" class="form-control"value= "<?php echo $row['admin_password'] ?>">
	                                                <div class="form-group">
	                                                <label for="cc-payment" class="control-label mb-1">Admin full name</label>
	                                                <input id="cc-pament" name="admin-name" type="text" class="form-control"
	                                                value= "<?php echo $row['full_name'] ?>">
	                                                 
	                                            </div>
	                                            
	                                        
	                                            <div>
	                                                <button id="payment-button" name ="update" type="submit" class="btn btn-lg btn-info btn-block">
	                                                    
	                                                    <span id="payment-button-amount">Update</span>
	                                                   
	                                                </button>
	                                            </div>
	                                        </form>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                             <div class="col-md-12">
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
