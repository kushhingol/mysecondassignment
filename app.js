var myNodelist = document.getElementsByTagName("LI");
//creation of close button
for (var i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("BUTTON");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

//creation of mark as complete
for (var j = 0; j < myNodelist.length; j++) {
  var span2 = document.createElement("BUTTON");
  var txt2 = document.createTextNode("\u2713");
  span2.className = "complete";
  span2.appendChild(txt2);
  myNodelist[j].appendChild(span2);
}

for (var j = 0; j < myNodelist.length; j++) {
  var span3 = document.createElement("BUTTON");
  var txt3 = document.createTextNode("\uD83D\uDD89");
  span3.className = "edit_task";
  span3.appendChild(txt3);
  myNodelist[j].appendChild(span3);
}


// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");



//click check button to cancel the task
var ok = document.getElementsByClassName("complete");


// Add a "checked" symbol when clicking on a list item


// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = $(".enter_task").val();
  if(inputValue == ''){

  }
  else {
      $.ajax({
        type: "POST",
        url : "task_adding.php",
        data:{task_enter:inputValue},
        success:function(data){
             $("#e_task").val("");
             $("#myUL").append(data);
             
        }
    });
  
 
  
}
  
}



/*function my_task_complete() {
  var comp = document.getElementsByTagName("li");
  var close = document.getElementsByClassName("close");

  var ok = document.getElementsByClassName("complete");

   for(var i = 0; i < comp.length; i++){
        ok[i].onclick = function() {
        var div = this.parentElement;
        div.classList.toggle("checked");
      }
  }
}

/*function my_task_del() {
  var comp = document.getElementsByTagName("li");
  var close = document.getElementsByClassName("close");

  for (var i = 0; i < close.length; i++) {
     close[i].onclick = function() { 
      var task_del = this.getAttribute("value");
      alert(task_del);
      $.ajax({
          type: "POST",
          url : "task_delete.php",
          data:{task_del:task_del},
      });
      var div = this.parentElement;
      div.style.display = "none";

    }
}
}*/