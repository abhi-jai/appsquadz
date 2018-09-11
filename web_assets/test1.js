
 $(document).ready(function(){
  var counter = 1;
$('body').on('click', '.save', function() { 
  if(counter<5)
  {
	$('.content').hide();

    counter++;
	$('#content-'+counter+'').show();
    
	if(counter > 1) {
		$('.back').show();
	};
	if(counter > 3) {
		$('.content-holder').hide();
		$('.end').show();
	};
}
});
 });
 /////////////////////Erase//////////////////////
 function erase(num){
var ele = document.getElementsByName("optionsRadios".num);
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
}
//////////////////Toggle Full Screen ///////////////////////
function toggleFullScreen() { 
 if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
  
  else {  
    if (document.cancelFullScreen) {  
      //document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
     // document.webkitCancelFullScreen();  
    }  
  }  
}
///////////////////////////////////////

// function toggleFullScreen() {

  // var el = document.body;

  // // Supports most browsers and their versions.
  // var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen 
  // || el.mozRequestFullScreen || el.msRequestFullScreen;

  // if (requestMethod) {

  //   // Native full screen.
  //   requestMethod.call(el);

  // } else if (typeof window.ActiveXObject !== "undefined") {

  //   // Older IE.
  //   var wscript = new ActiveXObject("WScript.Shell");

  //   if (wscript !== null) {
  //     wscript.SendKeys("{F11}");
  //   }
  // }

}


////////////////////POP UP MODEL//////////////////////////////////////////////////////
var modal = document.getElementById('myModal');
var btn = document.getElementById("submit");
var span = document.getElementsByClassName("close")[0];

// btn.onclick =setTimeout(function(){ //settimeout is used for onetime wherease setInterval is continuos.. 
//       modal.style.display = "block";
      
// }, 1000);
btn.onclick = function(){ 
 
$.ajax({ 
url:'<?php echo site_url();?>result',
type:'POST',
data:{},
contentType:false,
cache:false,
processData:false,
success:function(data){
  var obj = jQuery.parseJSON(data);
  $("#id").html('<td>Ajay Srivastava</td><td>'+obj.data.marks+'</td><td>'+obj.data.user_rank+'</td><td>'+obj.data.time_spent+'</td> <td>'+obj.data.result+'</td>'); 

},
error:function(err){
  console.log(err);
  alert("fail");
}
 });
  modal.style.display = "block";
}

span.onclick = function() {
 
    modal.style.display = "none";
    window.close();
}

//////////////////////END OF POP UP MODEL/////////////////////////////////////////////

////////////////////////change color onclick////////////////////////
//////////option color change////////////////////
function color1(name)
{
$('#'+name).css("background-color", "#38a9ff");

}
///////////////////////////////Save and Next ///////////////////////////////////
