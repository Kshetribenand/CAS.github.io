<?php

include('dbConfig.php');
if (!isset($_SESSION['USER_ID'])) {
  header("location:login.php");
  die();
}

$user = $_SESSION['UNSER_NAME'];
$query = mysqli_query($conn,"select * from login where email = '$user'");
$row =mysqli_fetch_array($query);
$id = $row['id'];

$email    = "";
$password = "";
$errors =array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title></title>
  <style type="text/css">
    ..sb{
      margin-bottom: 3.5rem;
      margin-top: 68px;
      margin-left: 540px;
      margin-right: 400px;
      margin-bottom: 17px;
    }
    .table2{
      width: 96%;
      margin-left: 26px;
      margin-right: 8px;
    }
    b{
      margin-bottom: 20px;margin-left: 26px;
    }
    .btn1{
       margin-left: 540px;
      margin-right: 400px;
    }
    input::placeholder {
    font: 11px/3 sans-serif;

}
    h3{
      
      margin-left: 27px;
    }
    
  </style>

</head>
<body>
 
    <?php include('H&F/header.php'); ?>


    <br>
    <br>
    <br><br>
    <div class="mb-3 table-responsive">
    <h3>Personal Details</h3>
    <table class="table table2 caption-top table-bordered table-primary" style="width:30%">
        <tr>
          
          <th class="form-label text-center">Full Name:</th>
          <?php
        
        $query1 = mysqli_query($conn,"select firstname,lastname from p_details where user_id = '$id'");
        $result = mysqli_num_rows($query1);
          for($i=1; $i<=$result;$i++)
          {
             $rows =  mysqli_fetch_array($query1)
          
      ?>
        
        <td class="text-center"><?php echo $rows['firstname' ];?> &nbsp;<?php echo  $rows['lastname' ];?></td>
        
            
      <?php

        }
      ?>
        </tr>
        <tr>
          <th class="form-label text-center">Designation:</th>
          <?php
        
        $query1 = mysqli_query($conn,"select    designation from p_details where user_id = '$id'");
        $result = mysqli_num_rows($query1);
          for($i=1; $i<=$result;$i++)
          {
             $rows =  mysqli_fetch_array($query1)
          
      ?>
        
        <td class="text-center"><?php echo $rows['designation' ];?> </td>
        
      
      <?php
        }
      ?>
          
          
        </tr>  
        <tr>
          
          <th class="form-label text-center">Department:</th>
          <?php
        
        $query1 = mysqli_query($conn,"select      school from p_details where user_id = '$id'");
        $result = mysqli_num_rows($query1);
          for($i=1; $i<=$result;$i++)
          {
             $rows =  mysqli_fetch_array($query1)
          
      ?>
        
        <td class="text-center"><?php echo $rows['school' ];?> </td>
        
      
      <?php
        }
      ?>
          
        </tr>
        <tr>
          <th class="form-label text-center">Total API Score:</th>
          <?php
        
        $query1 = mysqli_query($conn,"select    show_api from to_do_list where user_id = '$id'");
        $result = mysqli_num_rows($query1);
          for($i=1; $i<=$result;$i++)
          {
             $rows =  mysqli_fetch_array($query1)
          
      ?>
        
        <td class="text-center"><?php echo $rows['show_api' ];?> </td>
        
      
      <?php
        }
      ?>
          
          
        </tr> 
			
    </table>
    <h3>Research Details</h3>
      <b> 1.Research Papers in Peer-Reviewed or UGC listed Journals</b>
      <br>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Research Paper</th>
          <th class="text-center">Claimed Score</th>
        </tr>
				

			<tr>
				<?php
        
        $query1 = mysqli_query($conn,"select research_paper_1,claimed_score_1 from research where user_id = '$id'");
        $result = mysqli_num_rows($query1);
          for($i=1; $i<=$result;$i++)
          {
             $rows =  mysqli_fetch_array($query1);
          $total=$rows['claimed_score_1'];
      ?>
				
				<td class="text-center"><?php echo $rows['research_paper_1'];?></td>
        <td class="text-center"><?php echo $rows['claimed_score_1'];?></td>
			</tr>	
			<?php

        }

      ?>
      
      </table>
      
      <b>2.Publications (other than Research papers)</b><br><br>
      <b>(a) Books authored which are published by:</b>
      <br>
      <br>
      <b>(1) International publishers</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select Title_of_book_International ,Claimed_Score_International from publication1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
           $total1=$rows['Claimed_Score_International'];
           "$total1" + "$total"
      ?>
			 <td class="text-center"><?php echo $rows['Title_of_book_International'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_International'];?></td>
      </tr> 
      <?php
         
        }
      ?>
      
      </table>
      <b>(2) National publishers</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="form-label">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select Title_of_book_National ,Claimed_Score_National from publication1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
          $total2=$rows['Claimed_Score_National'];
           "$total1" + "$total" + "$total2";
      ?>
       <td class="text-center"><?php echo $rows['Title_of_book_National'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_National'];?></td>
      </tr> 
      <?php
        }
      ?>
      <?php
          
        
      ?>
			
      </table>
      <b>(3) Chapter in Edited Book</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select Title_of_book_Edited_Book ,Claimed_Score_Edited_Book from publication1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total3=$rows['Claimed_Score_Edited_Book'];
          "$total1" + "$total" + "$total2"+ "$total3";
          
      ?>

       <td class="text-center"><?php echo $rows['Title_of_book_Edited_Book'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_Edited_Book'];?></td>
      </tr> 
      <?php
        }
      ?>
			<?php
          
        
      ?>
      </table>
      <b>(4) Editor of Book by International Publisher</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    Title_of_book_Editor_Int ,Claimed_Score_Editor_Int from publication1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
          $total4=$rows['Claimed_Score_Editor_Int'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4";
        
      ?>
       <td class="text-center"><?php echo $rows['Title_of_book_Editor_Int'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_Editor_Int'];?></td>
      </tr> 
      <?php
        }
      ?>
			<?php
          
      ?>
      </table>
      <b> (5) Editor of Book by National Publisher</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    Title_of_book_Editor_Nat ,Claimed_Score_Editor_Nat from publication2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
          $total5=$rows['Claimed_Score_Editor_Nat'];
          "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5";
      ?>
       <td class="text-center"><?php echo $rows['Title_of_book_Editor_Nat'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_Editor_Nat'];?></td>
      </tr> 
      <?php
        }
      ?>	
			<?php
          
        
      ?>
      </table>

      <br>

      <b>(b) Translation works in Indian and Foreign Languages by qualified faculties:</b>

      <br>
      <br>
      <b> (1) Chapter or Research paper</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    Title_of_book_Research ,Claimed_Score_Research from publication2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total6=$rows['Claimed_Score_Research'];
          "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6";
          
      ?>
       <td class="text-center"><?php echo $rows['Title_of_book_Research'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_Research'];?></td>
      </tr> 
      <?php
        }
      ?>  	
			<?php
          
       
      ?>
      </table>
      <b>  (2) Book</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Book</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    Title_of_book_Book ,Claimed_Score_Book from publication2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total7=$rows['Claimed_Score_Book'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7";
          
      ?>
       <td class="text-center"><?php echo $rows['Title_of_book_Book'];?></td>
        <td class="text-center"><?php echo $rows['Claimed_Score_Book'];?></td>
      </tr> 
      <?php
        }
      ?>  	
			<?php
         
        
      ?>
      </table>
     <b>(3)Creation of ICT mediated Teaching Learning pedagogy and content and development of new and innovative courses and curricula.</b>
     <br><br> <b>(a) Development of Innovative pedagogy</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
       
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    pedagogy1 ,pedagogy2 from ict_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total8=$rows['pedagogy2'];
          echo "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8";
          
      ?>
       <td class="text-center"><?php echo $rows['pedagogy1'];?></td>
        <td class="text-center"><?php echo $rows['pedagogy2'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
         
        
      ?>
      </table>
      <b> (b) Design of new curricula and courses.</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    courses1 ,courses2 from ict_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total9=$rows['courses2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9";
          
      ?>
       <td class="text-center"><?php echo $rows['courses1'];?></td>
        <td class="text-center"><?php echo $rows['courses2'];?></td>
      </tr> 
      <?php
        }
      ?>  	
			<?php
         
        
      ?>
      </table>
      <br>
      <b>(c) MOOCs</b><br><br>
      <b>(1) Development of complete MOOCs in 4 quadrants (4 credit course) (In case of MOOCs of lesser credits 05 marks/credit)</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
			<?php
        
        $query2 = mysqli_query($conn,"select    quadrants1 ,quadrants2 from ict_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
           $total10=$rows['quadrants2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10";
      ?>
       <td class="text-center"><?php echo $rows['quadrants1'];?></td>
        <td class="text-center"><?php echo $rows['quadrants2'];?></td>
      </tr> 
      <?php
        }
      ?>    
			<?php
         
        
      ?>
      </table>
      <b> (2) Content writer/subject matter expert for each module of MOOCs (at least one quadrant)</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    content1 ,content2 from ict_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total11=$rows['content2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11";
          
      ?>
       <td class="text-center"><?php echo $rows['content1'];?></td>
        <td class="text-center"><?php echo $rows['content2'];?></td>
      </tr> 
      <?php
        }
      ?>  	
			<?php
          
        
      ?>
      </table>
      <b> (3) Course Coordinator for MOOCs (4 credit course) (In case of MOOCs of lesser credits 02 marks/credit)</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    coordinator1 ,coordinator2 from ict_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total12=$rows['coordinator2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12";
          
      ?>
       <td class="text-center"><?php echo $rows['coordinator1'];?></td>
        <td class="text-center"><?php echo $rows['coordinator2'];?></td>
      </tr> 
      <?php
        }
      ?>  
		  <?php
          
        
      ?>
      </table>
      <br>
      
      <b>(d) E-Content</b>
      <br><br>
      <b>(1) Development of e-Content in 4 quadrants for a complete course/e-book</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select  e_Content1 ,  e_Content2 from ict_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total13=$rows['e_Content2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13";
          
      ?>
       <td class="text-center"><?php echo $rows['e_Content1'];?></td>
        <td class="text-center"><?php echo $rows['e_Content2'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
        
      ?>
      </table>
      <b>(2) e-Content (developed in 4 quadrants) per module</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
       
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select e_Content_per_module1 ,e_Content_per_module2 from ict_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total14=$rows['e_Content_per_module2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['e_Content_per_module1'];?></td>
        <td class="text-center"><?php echo $rows['e_Content_per_module2'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
        
      ?>
      </table>
      <b>(3) Contribution to development of e-content module in complete course/paper/e-book (at least one quadrant)</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select      e_Content_module_complete1 ,  e_Content_module_complete2 from ict_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total15=$rows['e_Content_module_complete2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['e_Content_module_complete1'];?></td>
        <td class="text-center"><?php echo $rows['e_Content_module_complete2'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
        
      ?>
      </table>
      <b>(4) Editor of e-content for complete course/ paper /e-book</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Activity</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    e_Content_complete_course1 ,e_Content_complete_course2 from ict_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total16=$rows['e_Content_complete_course2'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['e_Content_complete_course1'];?></td>
        <td class="text-center"><?php echo $rows['e_Content_complete_course2'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
        
      ?>
      </table> 
      <br>   
      <b>4.(a) Research Guidance.</b>
      <br><br>
      <b> (1) Ph.D. awarded / Thesis submitted</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Thesis</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    ph_d_title_of_thesis ,ph_d_claim_score from guidance_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total17=$rows['ph_d_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17";
          
      ?>
       <td class="text-center"><?php echo $rows['ph_d_title_of_thesis'];?></td>
        <td class="text-center"><?php echo $rows['ph_d_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  	
			<?php
          
          
        
      ?>
      </table>
      <b>(2) M.Phil./P.G. awarded</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Dissertation/Thesis</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select mphil_title_of_thesis ,mphil_claim_score  from guidance_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total18=$rows['mphil_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['mphil_title_of_thesis'];?></td>
        <td class="text-center"><?php echo $rows['mphil_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
         
        
      ?>
      </table>
      <b>(b) Research Projects Completed</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Project</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    completed_title_project  ,completed_claim_score from guidance_1 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total19=$rows['completed_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['completed_title_project'];?></td>
        <td class="text-center"><?php echo $rows['completed_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
        
      ?>
      </table>
      <b>(c) Research Projects Ongoings</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Project</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
			<?php
        
        $query2 = mysqli_query($conn,"select ongoing_title_project ,ongoing_claim_score  from guidance_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total20=$rows['ongoing_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"+"$total20"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['ongoing_title_project'];?></td>
        <td class="text-center"><?php echo $rows['ongoing_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
      <?php
          
        
      ?>
			
      </table>
     
      <b>(d)Consultancy</b>
      <br>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title of the Project</th>
          <th class="text-center">Claimed Score</th>
        </tr>
       
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select      consultancy_title_nature_project ,consultancy_claim_score from guidance_2 where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total21=$rows['consultancy_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"+"$total20"+"$total21"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['consultancy_title_nature_project'];?></td>
        <td class="text-center"><?php echo $rows['consultancy_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
        
      ?>
      </table>
      <br><br>
     <b> 5.(a) Patents.</b>
     <br>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Details of Patent including names of authors</th>
          <th class="text-center">International/National</th>
          <th class="text-center">Claimed Score</th>
        </tr>
        
			<tr>
			<?php
        
        $query2 = mysqli_query($conn,"select    patents_name_author,patents_int_national ,patents_claim_score from patent where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total23=$rows['patents_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"+"$total20"+"$total21"
          +"$total23"
          ;
          
      ?>
       <td class="text-center"><?php echo $rows['patents_name_author'];?></td>
        <td class="text-center"><?php echo $rows['patents_int_national'];?></td>
        <td class="text-center"><?php echo $rows['patents_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
         
         
        
      ?>
      </table>
      <b>(b) Policy Document (Submitted to an International body/organisation like UNO/UNESCO/World Bank/International Monetary Fund etc.</b>
      <br>
      <b>or Central Government or State Government)</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Details of Policy Document</th>
          <th class="text-center">International/National / State</th>
          <th class="text-center">Claimed Score</th>
        </tr>
       
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select    policy_doc_details,policy_doc_int_national_state ,policy_doc_claim_score from patent where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
             $total25=$rows['policy_doc_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"+"$total20"+"$total21"
          +"$total23"+"$total25"
          ;
        
          
      ?>
       <td class="text-center"><?php echo $rows['policy_doc_details'];?></td>
        <td class="text-center"><?php echo $rows['policy_doc_int_national_state'];?></td>
        <td class="text-center"><?php echo $rows['policy_doc_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
          
      ?>
      </table>
      <b>(c) Awards/Fellowship</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Name of the Award / Fellowship</th>
          <th class="text-center">International/National</th>
          <th class="text-center">Claimed Score</th>
        </tr>
       
			<tr>
			<?php
        
        $query2 = mysqli_query($conn,"select    fellowship_name ,fellowship_int_national_state,   fellowship_claim_score from patent where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total27=$rows['fellowship_claim_score'];
           "$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"+"$total20"+"$total21"
          +"$total23"+"$total25"+"$total27"
          ;
        
          
      ?>
       <td class="text-center"><?php echo $rows['fellowship_name'];?></td>
        <td class="text-center"><?php echo $rows['fellowship_int_national_state'];?></td>
        <td class="text-center"><?php echo $rows['fellowship_claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
		<?php
         
         
      ?>
      </table>
      <br>
      <b>6. Invited lectures / Resource Person/ paper presentation in Seminars/ Conferences/full paper in Conference Proceedings<br></b>
      <b> (Paper presented in Seminars/Conferences and also published as full paper in Conference Proceedings will be counted only once).</b>
      <table class="table table2 caption-top table-bordered table-dark" style="width:96%">
        <tr>
          
          <th class="text-center">Title</th>
          <th class="text-center">Name of the Event</th>
          <th class="text-center">Claimed Score</th>
        </tr>
       
			<tr>
				<?php
        
        $query2 = mysqli_query($conn,"select  title,event_name ,claim_score from invited_lecture where user_id = '$id'");
        $result1 = mysqli_num_rows($query2);
          for($i=1; $i<=$result1;$i++)
          {
             $rows =  mysqli_fetch_array($query2);
              $total28=$rows['claim_score'];
           $show="$total1" + "$total" + "$total2"+ "$total3"+ "$total4"
          +"$total5"+"$total6"+"$total7"+"$total8"+"$total9"+"$total10"+"$total11"+"$total12"+"$total13"
          +"$total14"+"$total15"+"$total16"+"$total17"+"$total18"+"$total19"+"$total20"+"$total21"
          +"$total23"+"$total25"+"$total27"+"$total28";
        
          if ($show>0) {
            // code...
            $query1 = mysqli_query($conn,"INSERT INTO to_do_list (user_id, show_api) VALUES ('$id','$show')");
          }
          
          
      ?>
       <td class="text-center"><?php echo $rows['title'];?></td>
        <td class="text-center"><?php echo $rows['event_name'];?></td>
        <td class="text-center"><?php echo $rows['claim_score'];?></td>
      </tr> 
      <?php
        }
      ?>  
			<?php
          
         
          
        
          

       
       // $sql = "INSERT INTO to_do_list (show_api) VALUES ('$show')";
        //$result = mysqli_query($conn, $sql);
        
        
      ?>
      </table> 
    
    </div>
    </div>
    <?php include('H&F/footer2.php');  ?>
</body>
</html>
	
