<?php
	session_start();
	include'connection.php';
	$username = $_SESSION["username"];

	$sql = "SELECT username FROM login WHERE username = '$username'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
     
    }
     else {
	header("Location: ");
   }
	
?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">LIC INSURANCE</a>
            </div>

            <div class="header-right">
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php
				     if(!isset($_SESSION["username"])){
					header("Location: index.php");
					}else {
					echo "Welcome, ".$_SESSION["username"];
         				}
			       ?>
                            <br />
                              
                            </div>
                        </div>

                    </li>


                 <li>
                      <a href="client.php"><i class="fa fa-users "></i>CLIENTS DETAILS</a >  
                 </li> 
                 <li>
                      <a href="nominee.php"><i class="fa fa-heart "></i>NOMINEE</a>
                        
                 <li>
                      <a href="policy.php"><i class="fa fa-life-saver "></i>POLICY DETAILS</a>
                            
                 </li>   
                 <li>
                      <a href="plan.php"><i class="fa fa-pencil-square-o "></i>PLAN DETAILS</a>
                          
                 </li>     
                 <li>
                      <a href="premium.php"><i class="fa fa-life-saver "></i>PREMIUM DETAILS</a>
                            
                 </li>   
                 <li>
                      <a href="cash.php"><i class="fa fa-credit-card "></i>CASH DETAILS</a>
                            
                 </li>   
                     
                </ul>

            </div>
		

        </nav>
		 
		  
	
   