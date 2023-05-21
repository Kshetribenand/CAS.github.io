<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/p_details.css">
	<link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>puf</title>
</head>
<body>
   <?php include('p_details_back.php'); ?>
  


	<?php include('H&F/header.php'); ?>

 
	<div class="formbold-main-wrapper">
  
  <div class="formbold-form-wrapper">
         <h1 class="text-center"><b>Personal Details</b></h1>
    <form action="" method="POST">
      <div class="formbold-input-wrapp formbold-mb-3">
        <label for="firstname" class="formbold-form-label"> Name </label>

        <div>
          <input
            type="text"
            name="firstname"
            id="firstname"
            placeholder="First name"
            class="formbold-form-input"
            required
          />

          <input
            type="text"
            name="lastname"
            id="lastname"
            placeholder="Last name"
            class="formbold-form-input"
            required
          />
        </div>
      </div>
      <div class="formbold-mb-3">
        <label for="fname" class="formbold-form-label"> Father's Name or Mother's Name </label>

        <input
          type="text"
          name="fname"
          id="fname"
          placeholder="fathers or mothers name"
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>


      

      <div class="formbold-mb-3">
        <label for="dob" class="formbold-form-label"> Date of Birth </label>
        <input type="date" name="dob" id="dob" class="formbold-form-input" required/>
      </div>

      <div class="formbold-mb-3">
        <label class="formbold-form-label">Gender</label>

        <select class="formbold-form-input" name="gender" id="occupation" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
      </div>

      <div class="formbold-mb-3">
        <label class="formbold-form-label">Marital Status</label>

        <select class="formbold-form-input" name="marital" id="marital" required>
          <option value="married">Married</option>
          <option value="unmarried">Unmarried</option>
          <option value="divorce">Divorce</option>
        </select>
      </div>
      <div class="formbold-mb-3">
        <label for="nation" class="formbold-form-label"> Nationality </label>

        <input
          type="text"
          name="nation"
          id="nation"
          placeholder="nationality"
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>
    <div class="formbold-mb-3">
        <label class="formbold-form-label">Indicate whether you belongs to sc/st/obc/gen/ews</label>

        <select class="formbold-form-input" name="category" id="category" required>
          <option value="sc">SC</option>
          <option value="st">ST</option>
          <option value="obc">OBC</option>
           <option value="gen">GEN</option>
          <option value="ews">EWS</option>
        </select>
      </div>
       <div class="formbold-mb-3">
        <label for="school" class="formbold-form-label"> Name of Department/School </label>

        <input
          type="text"
          name="school"
          id="school"
          placeholder="Department/School "
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>

    <div class="formbold-mb-3">
        <label for="designation" class="formbold-form-label"> Present Designation & Academic Level </label>

        <input
          type="text"
          name="designation"
          id="designation"
          placeholder=" Enter your Designation & Academic Level"
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>
     <div class="formbold-mb-3">
        <label for="last_date" class="formbold-form-label"> Last Date of Promotion </label>

        <input
          type="date"
          name="last_date"
          id="last_date"
          placeholder=" Enter the last date of promotion"
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>
    <div class="formbold-mb-3">
        <label for="position" class="formbold-form-label"> Position and Academic Level for which you are an applicant under CAS </label>

        <input
          type="text"
          name="position"
          id="position"
          placeholder=" Enter the Position and Academic Level"
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>
    <div class="formbold-mb-3">
        <label for="d_o_e" class="formbold-form-label"> Date of eligibility for promotion </label>

        <input
          type="date"
          name="d_o_e"
          id="d_o_e"
          placeholder=" Enter the date of eligibility for promotion"
          class="formbold-form-input formbold-mb-3"
          required
        />
    </div>


      <div class="formbold-mb-3">
        <label for="email" class="formbold-form-label"> Email </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="example@email.com"
          class="formbold-form-input"
          required
        />
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label"> Address </label>

        <input
          type="text"
          name="address"
          id="address"
          placeholder="Street address"
          class="formbold-form-input formbold-mb-3"
          required
        />
        <input
          type="text"
          name="address2"
          id="address2"
          placeholder="Street address line 2"
          class="formbold-form-input"
          required
        />
      </div>

      <div class="formbold-mb-3 formbold-input-wrapp">
        <label for="phone" class="formbold-form-label"> Phone(only 10 degits phone numbers) </label>

        <div>
          

          <input
            type="text"
            name="phone"
            id="phone"
            placeholder="Phone number"
            class="formbold-form-input"
            required
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="post" class="formbold-form-label"> Post/Zip code </label>
          <input
            type="text"
            name="post"
            id="post"
            placeholder="ex:605014"
            class="formbold-form-input"
            required
          />
        </div>
        <div>
          <label for="city" class="formbold-form-label"> City </label>
          <input
            type="text"
            name="city"
            id="city"
            placeholder="ex:New Delhi"
            class="formbold-form-input"
            required
          />
        </div>
      </div>

      
        <button name="p_details_sub" class="formbold-btn">Submit</button>
      </div>

      
    </form>
  </div>
</div>
<?php include('H&F/footer2.php'); ?>

</body>
</html>