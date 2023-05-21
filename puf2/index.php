
<?php



include('dbConfig.php');
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "puf2"; 
 
// Create database connection 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}
//include('Config2.php');
if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from login where email = '$user' is not null");
$row =mysqli_fetch_array($query);
$id = $row['id'];
/*
$query1 = mysqli_query($conn,"select id from home where user_id = '$id'");
$result = mysqli_num_rows($query1);
          if ($result>0) {
          	header("location:index.php");
          	// code...
          }
          */
        
       
        
      
      
        
      

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Homepage</title>
   
   
</head>
<body>
	<?php include('H&F/header.php'); ?>
	

	<div class="wrapper">  
		<div  class="container body1">
		











<!--		<div class="about">
	
<b class="b_cas">Career Advancement Scheme (CAS) For Teachers</b>
<p class="p_cas">Some General Information</p>

		<p class="p_cas">	1. &nbsp;&nbsp;'Act' means the UP PT. DEEN DAYAL UPADHAYAY PASHU CHIKITSA VIGYAN VISHWAVIDYALAYA EVAM GO ANUSANDHAN												SANSTHAN Act 2001 as amended from time to time.<br>
											2. Word 'Teacher' wherever occurring in these Statutes will have the same meaning as in the Statutes regarding the classification, the manner of appointment, powers and duties of the teachers of the University.<br>
 											3. Career Advancement Scheme (CAS) means Career Advancement procedure adopted by the University as per UGC regulations dated 30.6.2010 and Department of Agriculture Research & Education, Ministry of Agriculture, Govt. of India letter dated 2.8.2010 and consequent UP Government. Order dated 27.3.2017.<br>
											4. API means Academic Performance Indicator.	<br>
											5. Words and expressions not defined in these Statutes and used in the Act shall have the meaning as assigned to them in the Act.</p>

</div>-->

			<!--<iframe src="p_details.php" style="border:2px solid white;" title="Iframe Example"></iframe>  
			<button onclick="myFunction()">Try it</button>

				<script>
					let body1 = document.querySelector('.body1')
				function myFunction() {
				  var x = document.createElement("IFRAME");
				  x.setAttribute("src", "index.php");
				  document.body1.console(x);
				}
				</script>-->

			





		</div>

	</div>
   <?php include('H&F/footer2.php'); ?>
   
    
</body>

  
</html>