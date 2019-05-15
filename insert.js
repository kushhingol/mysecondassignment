$(function(){

      $("#task").click(function(){
       
        var task_enter = $(".enter_task").val();
        if(task_enter == ''){
            alert("Please Enter Your Task");
        }
        else{
        $.ajax({
          type: "POST",
          url : "task_adding.php",
          data:{task_enter:task_enter},
      });
        $("#e_task").val("");
      }
      });
});



