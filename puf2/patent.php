<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
  <style type="text/css">
    .head1{
      margin-bottom: 3.5rem;
      margin-top: 80px;
      margin-left: 30px;
      margin-right: 100px;
      margin-bottom: 30px;
    }
    .table2{
     
      margin-left: 26px;
      margin-right: 8px;
    }
    b{
      margin-bottom: 20px;
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
  <?php include('patent_back.php'); ?>
	<?php include('H&F/header.php'); ?>
	<div class="mb-3 table-responsive">
		<h1 class="head1">a)Patents</h1>
		

         
      <form style="padding: 0 0 0 0;" class=" g-3" action="" method="POST">

        <table class="table table2 caption-top table-bordered table-dark" style="width:97%">
      <div class="form-label"> 
          <tr>
            <th rowspan="" class="form-label text-center"> Sl. No. </th>
            <th rowspan="" class="form-label text-center">Details of Patent including names of authors </th>
            <th rowspan="" class="form-label text-center"> International/National</th>
            <th rowspan="" class="form-label text-center">Year</th>
            <th rowspan="" class="form-label text-center">Claimed Score</th>
            <th rowspan="" class="form-label text-center">Verified Score by HOD/Dean</th>
            <th rowspan="" class="form-label text-center">Encl. No.</th>
           
          </tr>
          
          <tr>
            
            <td class="form-label text-center" >
            1
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_name_author" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_int_national" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_year" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_claim_score" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="patents_score_hod" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="patents_encl" id="" required>
            </td>
            
            
            
            

          </tr>
          <tr>
            
            <td class="form-label text-center">
            2
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_name_author2" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_int_national2" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_year2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details" name="patents_claim_score2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="patents_score_hod2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="patents_encl2" id="" required>
            </td>
            
            
            </table>
            
    <table class="table table2 caption-top table-bordered table-dark" style="width:97%">
          <div class="form-label"><h1 class="head1">b)*Policy Document (Submitted to an International body/organisation like UNO/UNESCO/World Bank/International Monetary Fund etc. or Central Government or State Government)</h1>
          <tr>
            <th rowspan="" class="form-label text-center"> Sl. No. </th>
            <th rowspan="" class="form-label text-center">Details of Policy Document </th>
            <th rowspan="" class="form-label text-center"> International/National / State</th>
            <th rowspan="" class="form-label text-center">Year</th>
            <th rowspan="" class="form-label text-center">Claimed Score</th>
            <th rowspan="" class="form-label text-center">Verified Score by HOD/Dean</th>
            <th rowspan="" class="form-label text-center">Encl. No.</th>
           
          </tr>
          
          <tr>
            
            <td class="form-label text-center" >
            1
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_details" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_int_national_state" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_year" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_claim_score" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="policy_doc_score_hod" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="policy_doc_encl" id="" required>
            </td>
            
            
            
            

          </tr>
          <tr>
            
            <td class="form-label text-center">
            2
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_details2" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_int_national_state2" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_year2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details" name="policy_doc_claim_score2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="policy_doc_score_hod2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="policy_doc_encl2" id="" required>
            </td>
           
      </table>
      <table class="table table2 caption-top table-bordered table-dark" style="width:97%">
      <div class="form-label"> <h1 class="head1">c)Awards/Fellowship</h1>
          <tr>
            <th rowspan="" class="form-label text-center"> Sl. No. </th>
            <th rowspan="" class="form-label text-center">Name of the Award / Fellowship  </th>
            <th rowspan="" class="form-label text-center"> Awarding Institute/Organization</th>
             <th rowspan="" class="form-label text-center"> International/National / State</th>
            <th rowspan="" class="form-label text-center">Date of Awarded </th>
            <th rowspan="" class="form-label text-center">Claimed Score</th>
            <th rowspan="" class="form-label text-center">Verified Score by HOD/Dean</th>
            <th rowspan="" class="form-label text-center">Encl. No.</th>
           
          </tr>
          
          <tr>
            
            <td class="form-label text-center" >
            1
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_name" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_awarding_institute" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="fellowship_int_national_state" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_date_awarded" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_claim_score" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="fellowship_score_hod" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="fellowship_encl" id="" required>
            </td>
            
            
            
            

          </tr>
          <tr>
            
            <td class="form-label text-center">
            2
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_name2" id="" required>
            </td><td >
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_awarding_institute2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="fellowship_int_national_state2" id="" required>
            </td>
            <td>
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_date_awarded2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details" name="fellowship_claim_score2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="fellowship_score_hod2" id="" required>
            </td>
            <td >
            <input class="form-control" type="text" placeholder="Enter the details " name="fellowship_encl2" id="" required>
            </td>
            
            
            </table>
          
      

      

       

      
        <button name="patent_btn" class="btn1 btn btn-success">Submit</button>
        </form>
      </div>
		
	</div>

</body>
<?php include('H&F/footer2.php'); ?>
</html>