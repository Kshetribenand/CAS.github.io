<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
  <style type="text/css">
    .head1{
      margin-bottom: 3.5rem;
      margin-top: 68px;
      margin-left: 200px;
      margin-right: 100px;
      margin-bottom: 17px;
    }
    .table2{
     
      margin-left: 26px;
      margin-right: 8px;
    }
    b{
      margin-bottom: 20px;margin-left: 26px;
    }
    p{
      margin-left: 26px;
    }
    .btn1{
      margin-bottom: 144px;
      margin-right: 0px;
      margin-left: 714px;
    }
    input::placeholder {
    font: 11px/3 sans-serif;

}

  </style>
</head>
<body>
  <?php include('teaching_back.php'); ?>
	<?php include('H&F/header.php'); ?>
  
	<div class="mb-3 table-responsive">
		<h1 class="head1">Teaching in the University Students related Activities/ Research Activities*</h1>
		
    <form style="padding: 0 0 0 0;" class=" g-3" action="" method="POST">

        <table class="table table2 caption-top table-bordered table-dark" style="width:97%">
      <div class="form-label"> <b>&nbsp;&nbsp;Teaching:(Classes taught includes sessions on tutorials, lab and other teaching related activities) (Give semester-wise details, wherever necessary)</b>
          <tr>
            <th rowspan="2" class="form-label text-center"> Sl. No </th>
            <th rowspan="2" class="form-label text-center">Academic Year</th>
            <th rowspan="2" class="form-label text-center"> Semester</th>
            <th colspan="2"class="form-label text-center">Teaching
            </th>
            <th rowspan="2" class="form-label text-center">*Encl No.</th>
           
          </tr>
          <tr>
            <th class="form-label text-center">Total **Classes (hours) Assigned</th>
            <th class="form-label text-center">Number of Classes (hours) Taught</th>
          </tr>
         
                     
          <tr>
            <th  class="form-label text-center" rowspan="12">1</th>
            <th class="form-label text-center" rowspan="2">year 1</th>
            <td class="form-label ">odd</td>
            <td >
            <input class="form-control" type="text" placeholder="Total number of class hours" name="t_1_odd_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder=" Number of class" name="t_1_odd_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_1_odd_encl" id="" required>
            </td>
          </tr>
          <tr>
            <td class="form-label">Even</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_1_even_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_1_even_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_1_even_encl" id="" required>
            </td>
          </tr>
          <tr>
            <th  class="form-label text-center" rowspan="2">year 2</th>
            <td class="form-label">odd</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_2_odd_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_2_odd_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_2_odd_encl" id="" required>
            </td>
          </tr>
          <tr>
            <td class="form-label">Even</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_2_even_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_2_even_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_2_even_encl" id="" required>
            </td>
          </tr>
          <tr>
            <th  class="form-label text-center" rowspan="2">year 3</th>
            <td class="form-label">odd</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_3_odd_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_3_odd_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_3_odd_encl" id="" required>
            </td>
          </tr>
           <tr>
            <td class="form-label">Even</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_3_even_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_3_even_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_3_even_encl" id="" required>
            </td>
          </tr>
          <tr>
            <th class="form-label text-center" rowspan="2">year 4</th>
            <td class="form-label">odd</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_4_odd_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_4_odd_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_4_odd_encl" id="" required>
            </td>
          </tr>
          <tr>
            <td class="form-label">Even</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_4_even_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_4_even_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_4_even_encl" id="" required>
            </td>
          </tr>
          <tr>
            <th  class="form-label text-center" rowspan="2">year 5</th>
            <td class="form-label">odd</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_5_odd_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_5_odd_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_5_odd_encl" id="" required>
            </td>
          </tr>
          <tr>
            <td class="form-label">Even</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_5_even_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_5_even_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_5_even_encl" id="" required>
            </td>
          </tr>
          <tr>
            <th  class="form-label text-center" rowspan="2">year 6</th>
            <td class="form-label">odd</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_6_odd_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_6_odd_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_6_odd_encl" id="" required>
            </td>
          </tr>
          <tr>
            <td class="form-label">Even</td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the class hours" name="t_6_even_assigned" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Total Number of class" name="t_6_even_taught" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="type the details" name="t_6_even_encl" id="" required>
            </td>
          </tr>
          <tr>
            <th  class="form-label" ></th>
            <td class="form-label text-center">Total number of hours handled for the assessment period (A)</td>
            <td colspan="10">
              <label class="form-label" for="quantity">Select total number of hours :</label>
                <input style="color: black;" class="form-label" type="number" id="quantity" name="assessment_period_a" min="1" max="1000">
  
            
            </td>


          </tr>
          <tr>
            <th  class="form-label"></th>
            <td class="form-label text-center">Total number of hours assigned for the assessment period (B)</td>
            <td colspan="10">
            <label class="form-label" for="">Select total number of hours :</label>
                <input style="color: black;" class="form-label" type="number" id="" name="assessment_period_b" min="1" max="1000">
  
            </td>
          </tr>
          <tr>
            <th  class="form-label" ></th>
            <td class="form-label text-center">Overall Percentage = A/B x100</td>
            <td colspan="10">
            
              <input class="form-control" type="text" placeholder="Enter  the percentage" name="overall_pc" id="" required>
            </td>
          </tr>
         
        </table> 

 <p class="form-label">* Should be claimed by the applicant with supporting documents.</p>
             <p class="form-label"> ** Theory paper 4 Credit =  4 x 12 weeks = 48 hours per semester, Practical  paper : 1 Credit = 2 x 12 weeks = 24 hours per semester , and this may be arrived proportionately
              </p>



        
          </div>

      
        <button name="t_btn" class="btn1 btn btn-success">Submit</button>
      </form>
      </div>
		
	</div>
  

</body>
<?php include('H&F/footer2.php'); ?>
</html>