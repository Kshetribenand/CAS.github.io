<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">



    
    

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

  <title></title>
  <style type="text/css">

    .wrapper .form .inputBox input[type="text"] {
  padding: 10px;
  margin: 0 0 11px 0px;
  border: 1px solid #ccc;
  width: 380px;
  outline: none;
  padding-right: 60px;
  transition: 0.3s border-color ease;
}

.wrapper .form .inputBox input[type="text"]:focus {
  border-color: #9b59b6;
}

  .wrapper #data {
  list-style: none;
}

.wrapper #data li {
  display: flex;
  
   flex-direction:  column;
 
  margin: 10px 0;
  background: #eee;
}

.wrapper #data li p {
  color: black;
  padding: 0 10px;
}

.wrapper #data li button {
  background: #e74c3c;
  color: white;
  border: none;
  border-radius: 0;
  outline: none;
  cursor: pointer;
  padding: 10px;
  text-align: center;
  min-width: 50px;
  transition: 0.3s background-color ease;
}

.wrapper #data li button:hover {
  background: #c0392b;
}
  .wrapper .footer1 {
  display: flex;
  flex-direction:  column;
 
  
}

.wrapper .footer1 button {
  background: #e74c3c;
  padding: 10px;
  border-radius: 3px;
  color: white;
  border: none;
  cursor: pointer;
  outline: none;
  transition: 0.3s background-color ease;
}

.wrapper .footer1 button:hover {
  background: #c0392b;
}

  </style>
</head>
<body>

  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul><ul class="menu1">
     <!-- <li class="menu1__item"><a class="menu1__link" href="#">Home</a></li>
      <li class="menu1__item"><a class="menu1__link" href="#">About</a></li> -->
      <button class="btn btn-primary menu1__item menu1_link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Upcoming Events</button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

          <div class="offcanvas-header menu1__item">
            <h5 id="offcanvasRightLabel">Upcoming events</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
                          
                          
                          
                   <div class="wrapper">
    <form action="send3.php" class="form" method="post">
      <div class="inputBox">
        <input type="text" id="txt" class="form-control" placeholder="Enter your Task" required>
        <input type="text" id="txt1" class="form-control" placeholder="Enter your date" required>
        <button name="add_btn" class="btn btn-outline-success" id="btn">Add task</button>
      </div>
    </form>
     
    <ul id="data">

    </ul>
    <div class="footer1">
      <p id="total_task"></p>
      <button id="clear">Clear</button>
    </div>
  </div>
                          




          </div>
        </div>      
       
      

    </ul>
    
    <p style="margin-left: 17px;">&copy;2023 Ben's project Under Sir Dr.S.K.V Jayakumar | All Rights Reserved</p>
  </footer>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="script.js"></script>
               
</body>

</html>