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
                        <h1 class="page-head-line">Premium Details 
			
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->

<?php

include'connection.php';

    echo "<h3>Premium Details - First Year</h3>";	

    $sql = "SELECT mode,basic_premium,service_tax,total_premium FROM premium";
    $result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>MODE</th>\n";
    echo "    <th>BASIC PREMIUM</th>\n";
    echo "    <th>SERVICE TAX</th>\n";
    echo "    <th>TOTAL PREMIUM</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["mode"]."</td>\n";
		echo "    <td>".$row["basic_premium"]."</td>\n";
		echo "    <td>".$row["service_tax"]."</td>\n";
		echo "    <td>".$row["total_premium"]."</td>\n";
		
	}
	
	echo "</table>\n";
        echo "</br>"; 

	} else {
    echo "0 results";
}

    echo "<h3>Subsequent Year Premiums</h3>";	

    $sql = "SELECT mode,basic_premium,service_tax,total_premium FROM premium_1";
    $result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>MODE</th>\n";
    echo "    <th>BASIC PREMIUM</th>\n";
    echo "    <th>SERVICE TAX</th>\n";
    echo "    <th>TOTAL PREMIUM</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["mode"]."</td>\n";
		echo "    <td>".$row["basic_premium"]."</td>\n";
		echo "    <td>".$row["service_tax"]."</td>\n";
		echo "    <td>".$row["total_premium"]."</td>\n";
		
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
