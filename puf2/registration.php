<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
	
	<title></title>
    <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
</head>
<body>
    
    <?php include('config2.php'); ?>
     


<div class="container1 register">
    
            <div class="row">
                    <div class="col-md-3 register-left">
                
                        <h3>Welcome</h3>
                        <h5>To</h5>
                        <p>Academic Performance Indicators(API) for Carrer Advancement Scheme(CAS)!</p>
                        <a href="login.php"><input type="submit" name="" value="Login"/></a><br/>
                    </div>

            <div class="col-md-9 register-right">

                <form onSubmit="return validate();" method="POST" action="registration.php">

                    
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             <h3 class="register-heading">Registers your Details</h3>
                             <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control" placeholder="First Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastname" class="form-control" placeholder="Last Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" class="form-control" placeholder="Password *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input id="confirm_password" type="password" name="c_password" class="form-control"  placeholder="Confirm Password *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" required />
                                        </div>
                                       
                                     <input type="submit" class="btnRegister-new" name="reg_suc" value="Register"/>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>

            </div>
            </form>

</body>
</html>