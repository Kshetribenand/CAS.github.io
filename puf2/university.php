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
   <?php include('university_back.php'); ?>
	<?php include('H&F/header.php'); ?>
  <?php include('university_back.php'); ?>
	<div class="mb-3 table-responsive">
    <form method="post">
		<h1 class="head1">Involvement in the University Students related Activities / Research Activities:</h1>
		<table class="table table2 caption-top table-bordered table-dark" style="width:97%">
      <div class="form-label"> 
          <tr>
            <th class="form-label text-center"> Assessment Period </th>
            <th class="form-label text-center">Activity</th>
            <th class="form-label text-center"> Claimed by the Applicant</th>
            <th class="form-label text-center">Verified by the  HOD/ Dean</th>
            <th class="form-label text-center">Remarks</th>
            <th class="form-label text-center">*Encl No.</th>
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="a_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">a.	Administrative responsibilities such as Head, Chairperson/ Dean/ Director/ Co-ordinator, Warden etc.</td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="a_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="a_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="a_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="a_encl" id="" required>
            </td>

          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="b_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">b.Examination and evaluation duties assigned by the Department/School / university or attending the examination paper evaluation</td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="b_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="b_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="b_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="b_encl" id="" required>
            </td>
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="c_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">c.	Student related co-curricular, extension and field based activities** </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="c_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="c_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="c_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="c_encl" id="" required>
            </td>
            
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="d_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">d.	Organising seminars/ conferences/ workshops, other Department/ School / /university activities.</td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="d_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="d_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="d_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="d_encl" id="" required>
            </td>
            
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="e_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">e.	Evidence of actively involved in guiding Ph.D. students.</td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="e_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="e_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="e_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="e_encl" id="" required>
            </td>
            
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="f_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">f.	Conducting minor or major research project sponsored by national or international agencies.</td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="f_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="f_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="f_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="f_encl" id="" required>
            </td>
            
          </tr>
          <tr>
            
            <td >
            <input class="form-control" type="text" placeholder="Enter your Details" name="g_assessment" id="subject" required>
            </td>
            <td class="text-center form-label">g.	At least one single or joint publication in peer reviewed or UGC list of Journals.</td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="g_claimed_applicant" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="g_verified" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="g_remarks" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter your Details" name="g_encl" id="" required>
            </td>
            
          </tr>
        </table>  
        <p class="form-label">* Evidence to be produced</p>
             <p class="form-label"> ** such as student clubs, career / student  counselling, placement activity, study visits, student seminars and other events, cultural, sports, NCC, NSS and community services.
              </p>


          </div>

      
        <button name="university_btn" class="btn1 btn btn-success">Submit</button>
      </div>
		</form>
	</div>

</body>
<?php include('H&F/footer2.php'); ?>
</html>