
     
function delfunc(x)
  {

         var task_del = $(x).attr("value");

         $.ajax({
          type: "POST",
          url : "task_delete.php",
          data: {task_del:task_del},
      });
         $(x).parent().css({"display":"none"});
}

function comfunc(y)
{
          var t_task = $(y).attr("value");
         $.ajax({
          type: "POST",
          url : "task_complete.php",
          data: {t_task:t_task},
      });
         $(y).parent().toggleClass("checked");
}

function editfunc(z)
{

      document.getElementById("ed_task").style.visibility = "visible";
      document.getElementById("edit_t").style.visibility = "visible";
      
       var oldtext = z.getAttribute("value");
      $("#edit_t").click({oldtext: oldtext, z:z},edit_function);
      function edit_function(event){
         var b = $(z).parent();
         var edittext = $("#ed_task").val();
         $.ajax({
        type: "POST",
        url : "task_edit.php",
        data:{edittext:edittext, oldtext:event.data.oldtext},
        success:function(data){
              $("#ed_task").val("");
              $(z).parent('li').replaceWith(data);
              $("#ed_task").css("visibility","hidden");
              $("#edit_t").css("visibility","hidden");

        }
        });
         
        
         
      }
}