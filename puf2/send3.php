<?php
    

  include('dbConfig.php');
if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}



  
  include_once realpath('PHPMailer/src/PHPMailer.php');
  include_once realpath('PHPMailer/src/SMTP.php');
  include_once realpath('PHPMailer/src/Exception.php');

 
    /*$msj="$_POST["message"]";*/
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //authentication SMTP enabled
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    //indico el puerto que usa Gmail 465 or 587
    $mail->Port = 465; 
    $mail->Username = "fortestuse59@gmail.com";
    $mail->Password = "azyyyugjxrnnhpvv";
    $mail->SetFrom("fortestuse59@gmail.com","from ben's project");
   
  /*  $mail->Subject = $subject;
    $mail->MsgHTML($message);
    $mail->AddAddress("benksh.bk@gmail.com");
    $mail->addAddress('benksh.bk@gmail.com', 'Joe User'); */ 


    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "puf2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from login where email = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  email FROM login where id = '$id' ";
$result_1 = $conn->query($sql);
if ($result_1->num_rows > 0) {
    // output data of each row
    while($row = $result_1->fetch_assoc()) {



    $mail->AddAddress($row["email"]);
    


        /*  $message =  $row["txt"]  ;
          $subject = $row["txt1"]  ;*/
       
    }
} else {
    echo "0 results";
}

$sql = "SELECT  txt , txt1 FROM to_do_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($rows = $result->fetch_assoc()) {



    $mail->Subject =  $rows["txt"];
    $mail->MsgHTML($rows["txt1"]);
    


        /*  $message =  $row["txt"]  ;
          $subject = $row["txt1"]  ;*/
       
    }
} else {
    echo "0 results";
}

$conn->close();

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }else {
    echo "<script>
    alert('send success');
    document.location.href ='index.php';
    </script>";
    }

 



?>
