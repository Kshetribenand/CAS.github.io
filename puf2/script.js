$(document).ready(function(){
  function showData() {
    $.ajax ({
      url: 'show.php',

      type: 'post',
      success: function(result){
        $("#data").html(result);
      }
    });
  }
  showData();

  function totalTask() {
    $.ajax ({
      url: 'task.php',
      type: 'post',
      success: function(result){
        $("#total_task").html(result);
      }
    });
  }
  totalTask();

  $("#btn").on("click", function(e){
    e.preventDefault();
    txt = $("#txt").val();
    txt1 = $("#txt1").val();
    $.ajax({
      url: 'insert.php',
      type: 'post',
      data: {txt: txt , txt1: txt1},
      success: function(result){
        if (result == 3) {
          txt = $("#txt").val('');
          txt1 = $("#txt1").val('');
          alert("Todo List Added Successfully.");
          showData();
          totalTask();
          location.href = "send3.php";
        }else {
          console.log(result);
        }
      }
    });
  });

  $(document).on("click", "#delete", function(){
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url: 'delete.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 2) {
          $(element).closest("li").fadeOut();
          showData();
          totalTask();
        }
      }
    });
  });

  $(document).on("click", "#clear", function(){
    $.ajax({
      url: 'clear.php',
      type: 'post',
      success: function(result) {
        if (result == 2) {
          showData();
          totalTask();
        }
      }
    });
  });
});
