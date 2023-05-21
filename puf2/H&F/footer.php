<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/footer.css">

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

  <title></title>
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
            <h5 id="offcanvasRightLabel">Up coming and past events</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
                          
                          
                          
                   
                          <div class="list-wrap"> 
                          <div class="list-inner-wrap">
                             <form method="post">
                            <h3 class="title">Add Task</h2>
                            <h4>Task Name</h4>
                            
                            <input type="text" class="newTask" name="txt_c" id="txt" value="">
                            <br>
                           <br>
                          
                            
                            <h4>Date</h4>

                            
                            <input type="text" class="txt1 newlabel" name="txt1_c" id="txt1" value="">
                            <br>
                            <br>
                             <button id="btn" name="btn" class="btn btn-primary">
                              <span class="glyphicon glyphicon-plus"> Add</span>
                            </button>
                            </form>
                            <br>
                            <br>
                            <br>
                            
                            
                         
                            <br>


                            <h3 class="title">To Do</h2>
                            <ul class="uncompleted">
                              <li>Need to be completed task<button id="delete" class="btn btn-success newli">
                              <span class="glyphicon glyphicon-ok"> Done</span>
                                </button></li>
                            </ul>

                            <h3 class="title">Completed Tasks</h2>
                            <ul class="completed">
                              <li>Completed Task<button id="clear" class="btn btn-danger newli">
                              <span class="glyphicon glyphicon-remove"> Remove</span>
                            </button></li>
                            </ul>
                           </div>
                        </div>




          </div>
        </div>      
       
      

    </ul>
    
    <p style="margin-left: 17px;">&copy;2023 Ben's project Under Sir Dr.S.K.V Jayakumar | All Rights Reserved</p>
  </footer>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="text/javascript">
              var $addButton = $(".btn-primary");
              var $removeButton = $(".btn-danger");
              var $todoList = $(".uncompleted");
              var $doneList = $(".completed");


              //Take Text Input and Add <li> to To Do List
               $addButton.on("click", function(){
                
                //Creating object Variables 
                var $newTask = $(".newTask").val();
                var $taskDate = $(".txt1").val();
                var $importance = $("btn.importance").val();
                var $newTaskString = $newTask + "  "+" at " + $taskDate + "  "; 
                var $todoList = $(".uncompleted");
                
                 //call append method on $todoList
                 
                $todoList.append("<li>" + $newTaskString + "<button><span> Done</span></button></li>").addClass("todo");
                
                //add styles to button added to DOM by append  
                var $span = $(".todo button span");
                var $button = $(".todo button");
                $button.addClass("btn btn-success");
                $span.addClass("glyphicon glyphicon-ok"); 
                $("input").val("");
                 
               })
               
               //When Success button Clicked, remove task from to do list and append to completed tasks
               
                var $doneButton = $(".btn-success");
                 

                 $(".uncompleted").on("click", ".btn-success", function(){
                 var $completedTask = $( this ).parent("li").text();
                 $(this).parent("li").remove();
                 $doneList.append("<li>" + $completedTask + "<button><span> Remove</span></button></li>").addClass("done");
                 $(".done button").addClass("btn btn-danger");
                 $(".done button span").addClass("glyphicon glyphicon-remove");
                 
               })

               
               //Clear Completed Tasks 
               
               $(".completed").on("click",'.btn-danger',function(){  
                 $(this).parent("li").remove();
                 
               })</script>
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="script.js"></script>
               
</body>

</html>