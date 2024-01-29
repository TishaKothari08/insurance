<!DOCTYPE html>

<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
}
.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Policy</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Plan Details 
			
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->

<?php

include'connection.php';

    echo "<h3>Endowmwnt Plan</h3>";	

    $sql = "SELECT sr_no,product_name,plan_no,uin_no FROM endowment_plan";
    $result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>SR NO.</th>\n";
    echo "    <th>PRODUCT NAME</th>\n";
    echo "    <th>PLAN NO</th>\n";
    echo "    <th>UIN NO</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["sr_no"]."</td>\n";
		echo "    <td>".$row["product_name"]."</td>\n";
		echo "    <td>".$row["plan_no"]."</td>\n";
		echo "    <td>".$row["uin_no"]."</td>\n";
		
	}
	
	echo "</table>\n";
        echo "</br>"; 

	} else {
    echo "0 results";
}

    echo "<h3>Whole Life Plan</h3>";	

    $sql = "SELECT sr_no,product_name,plan_no,uin_no FROM whole_plan";
    $result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>SR NO.</th>\n";
    echo "    <th>PRODUCT NAME</th>\n";
    echo "    <th>PLAN NO</th>\n";
    echo "    <th>UIN NO</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["sr_no"]."</td>\n";
		echo "    <td>".$row["product_name"]."</td>\n";
		echo "    <td>".$row["plan_no"]."</td>\n";
		echo "    <td>".$row["uin_no"]."</td>\n";
		
	}
	
	echo "</table>\n";
        echo "</br>"; 

	} else {
    echo "0 results";
}

    echo "<h3>Money Back Plan</h3>";	

    $sql = "SELECT sr_no,product_name,plan_no,uin_no FROM money_plan";
    $result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>SR NO.</th>\n";
    echo "    <th>PRODUCT NAME</th>\n";
    echo "    <th>PLAN NO</th>\n";
    echo "    <th>UIN NO</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["sr_no"]."</td>\n";
		echo "    <td>".$row["product_name"]."</td>\n";
		echo "    <td>".$row["plan_no"]."</td>\n";
		echo "    <td>".$row["uin_no"]."</td>\n";
		
	}
	
	echo "</table>\n";
        echo "</br>"; 

	} else {
    echo "0 results";
}


$conn->close();
?>
          
                        
		  
		  
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->



	
</body>
</html>
