<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
  <style type="text/css">
    .head1{
      margin-bottom: 3.5rem;
      margin-top: 68px;
      margin-left: 540px;
      margin-right: 400px;
      margin-bottom: 17px;
    }
    .table2{
       width: 50%;
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
    

  </style>


</head>
<body>
  <?php include('a_details_back.php'); ?>
	<?php include('H&F/header.php'); ?>
   

	<div class="mb-3 table-responsive">
		<h1 class="head1">Academic Details</h1>
    <form style="padding: 0 0 0 0;" class=" g-3" action="" method="POST">
		<table class="table table2 caption-top table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>1)&nbsp;&nbsp;scholastic Records(Maticulation till post-graduate):</b>
          <tr>
            <th class="form-label text-center"> Examination </th>
            <th class="form-label text-center">Subject</th>
            <th class="form-label text-center"> Name of the Board/university</th>
            <th class="form-label text-center">year of passing</th>
            <th class="form-label text-center">Percentage of marks obtained</th>
            <th class="form-label text-center">Division/class/Grade</th>
          </tr>
          <tr>
            <td><label for="" class="text-center form-label"><b>High school/Maticulation/Hr. sec</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter your subject" name="high_subject" id="" required>
            
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the Board/university Name" name="high_board" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the year of passing" name="high_pass" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter Percentage of marks obtained" name="high_mark" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Division/class/Grade" name="high_grade" id="" required>
            </td>

          </tr>
          <tr>
            <td><label for="ug" class="text-center form-label"><b>Intermediate/ PUC</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter your subject" name="puc_subject" id="subject" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the Board/university Name" name="puc_board" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the year of passing" name="puc_pass" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter Percentage of marks obtained" name="puc_mark" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Division/class/Grade" name="puc_grade" id="" required>
            </td>
          </tr>
          <tr>
            <td><label for="ug" class="text-center form-label"><b>B.A./B.Sc./B.Com/B.LIS/B.P.Ed.</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter your subject" name="b_subject" id="subject" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the Board/university Name" name="b_board" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the year of passing" name="b_pass" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter Percentage of marks obtained" name="b_mark" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Division/class/Grade" name="b_grade" id="" required>
            </td>
            
          </tr>
          <tr>
            <td><label for="ug" class="text-center form-label"><b>M.A./M.Sc./ M.Com/MLIS/  M.Tech./M.P.Ed.</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter your subject" name="m_subject" id="m_subject" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the Board/university Name" name="m_board" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the year of passing" name="m_pass" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter Percentage of marks obtained" name="m_mark" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Division/class/Grade" name="m_grade" id="" required>
            </td>
            
          </tr>
          <tr>
            <td><label for="ug" class="text-center form-label"><b>Other examinations,  if any *(NET/JRF/SLET/Lectureship)</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter your subject" name="Net_subject" id="subject" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the Board/university Name" name="Net_board" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the year of passing" name="Net_pass" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter Percentage of marks obtained" name="Net_mark" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Division/class/Grade" name="Net_grade" id="" required>
            </td>
            
          </tr>
        </table>  

        <table class="table table2 caption-top table-striped-columns table-hover table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>2)&nbsp;&nbsp;Research Degree(s):</b>
          <tr>
            <th class="form-label text-center" > Degrees </th>
            <th class="form-label text-center">Title</th>
            <th class="form-label text-center"> Date of Award</th>
            <th class="form-label text-center">University</th>
           
          </tr>
          <tr>
            <td><label for="ug" class="text-center form-label"><b>M.Phil.</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="m_phil_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Date of Award" name="m_phil_award" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="University" name="m_phil_university" id="" required>
            </td>

          </tr>
          <tr>
            <td><label for="ug" class="text-center form-label"><b>Ph.D./D.Phil.</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="d_phil_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Date of Award" name="d_phil_award" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="University" name="d_phil_university" id="" required>
            </td>

          </tr>


            <tr>
            <td><label for="ug" class="text-center form-label"><b>Post-Doctoral Programme</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="post_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Date of Award" name="post_award" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="University" name="post_university" id="" required>
            </td>

          </tr>

          <tr>
            <td><label for="ug" class="text-center form-label"><b>D.Sc./D.Litt.</b></label></td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="dsc_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Date of Award" name="dsc_award" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="University" name="dsc_university" id="" required>
            </td>

          </tr>
          
        </table> 


        <table class="table table2 caption-top table-striped-columns table-hover table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>3)&nbsp;&nbsp;Position held prior to joining this institution:</b>
          <tr>
            <th rowspan="2" class="form-label text-center"> Designation </th>
            <th rowspan="2" class="form-label text-center">Name of Employer</th>
            <th colspan="2" class="form-label text-center"> Date of Joining</th>
            <th rowspan="2" class="form-label text-center">Salary with Grade</th>
            <th rowspan="2" class="form-label text-center">Reason for leaving</th>
           
          </tr>
          <tr>
            <th class="form-label text-center">Joining</th>
            <th class="form-label text-center">leaving</th>
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="prior_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Employee name" name="prior_employe" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter date of joining" name="prior_joining" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the date of leaving" name="prior_leaving" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Salary" name="prior_salary" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the reason " name="prior_reason" id="" required>
            </td>
            
            

          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="prior1_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Date of Award" name="prior1_employe" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="prior1_joining" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Date of Award" name="prior1_leaving" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="prior1_salary" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="prior1_reason" id="" required>
            </td>
            
            

          </tr>
          
          
        </table> 
        <table class="table table2 caption-top table-striped-columns table-hover table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>4)&nbsp;&nbsp;Position held after appointment in this institution:</b>
          <tr>
            <th rowspan="2" class="form-label text-center"> Designation </th>
            <th rowspan="2" class="form-label text-center">Department/ Faculty</th>
            <th colspan="2" class="form-label text-center"> Date of actual Joining</th>
            <th rowspan="2" class="form-label text-center">Grade/Academic Level</th>
           
           
          </tr>
          <tr>
            <th class="form-label text-center">From</th>
            <th class="form-label text-center">To</th>
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="after_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Department" name="after_employe" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="date for joining" name="after_joining" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="date for ending" name="after_leaving" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the academic level" name="after_level" id="" required>
            </td>
            
            
            

          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter the Title" name="after1_title" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Department" name="after1_employe" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="date for joining" name="after1_joining" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="date for ending" name="after1_leaving" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the academic level" name="after1_level" id="" required>
            </td>
            
            
            

          </tr>
          
          
        </table>
        <div class=""> 
          <b>5)&nbsp;&nbsp;Teaching experience:</b>
          <b class="form-label">In PG teaching (in years):
            <select name="pg_experience" >
                <option value="">Select year</option>
                
                <?php for ($i = 1; $i <= 100; $i++) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select></b>

            <b class="form-label">In UG teaching (in years):
            <select name="ug_experience">
                <option value="">Select year</option>
                
                <?php for ($i = 1; $i <= 100; $i++) { ?>
                  <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select></b>



        </div>
        <div class="form-label">
          <b>6)&nbsp;&nbsp; Research experience (excluding years spent in M.Phil./Ph.D.) (in years):

            <select name="research_experience">
                <option  value="">Select year</option>
                
                <?php for ($i = 1; $i <= 100; $i++) { ?>
                  <option  value="<?php echo $i; ?>"><?php echo $i; ?>
                    
                  </option>
                <?php } ?>
            </select>


            </b>
        </div>
        <div class="form-label">
          <b>6)&nbsp;&nbsp; Field of Specialization: </b>
          <textarea name="field_spec" rows="2" style="width: 40%; margin-left: 70px; " class="form-control" placeholder="Enter the details about Field Specialization"></textarea>
          
        </div>

        </table> 
        <table class="table table2 caption-top table-striped-columns table-hover table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>7)&nbsp;&nbsp;Details of  Orientation/Refresher Courses/Short term courses attended:</b>
          <tr>
            <th rowspan="2" class="form-label text-center"> Name of the Course </th>
            <th rowspan="2" class="form-label text-center">Place</th>
            <th colspan="2" class="form-label text-center"> Duration</th>
            <th rowspan="2" class="form-label text-center">Sponsoring Agency</th>
           
           
          </tr>
          <tr>
            <th class="form-label text-center">From</th>
            <th class="form-label text-center">To</th>
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter the name of courses" name="courses" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the place" name="place" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="date for joining" name="short_joining" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="date for ending" name="short_leaving" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter Sponsoring Agency" name="agency" id="" required>
            </td>
          </tr>
  
        </table>
        <table class="table table2 caption-top table-striped-columns table-hover table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>8)&nbsp;&nbsp;Number of Ph.D.s awarded under your guidance:</b>
          <tr>
            <th class="form-label text-center"> Name of the candidate </th>
            <th class="form-label text-center">Full Time / Part Time</th>
            <th class="form-label text-center"> Date of Ph.D. Viva</th>
            <th class="form-label text-center">Month and Year of Degree awarded </th>
           
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter the Name of candidate" name="candidate" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Full Time or Part Time" name="f_p_time" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the date of Ph.D Viva" name="viva" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the Month & Year" name="m_y_degree" id="" required>
            </td>

          </tr>
          </table>
          </div>

      
        
      </div>
      <button  name="a_details_sub" class=" btn1 btn btn-success">Submit</button>
		</form>
	</div>
<?php include('H&F/footer2.php');  ?>
</body>

</html>