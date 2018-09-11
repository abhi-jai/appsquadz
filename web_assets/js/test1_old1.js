////////////////////////change color onclick////////////////////////
///////////////////////////////Save and Next ///////////////////////////////////

$(document).ready(function(){
var counter = 1;
  // $('body').on('click', '.save', function() { 
$('.counting').click(function(){
    var count= $('.counting').attr('current_val');//get the curent value
    $('.counting').attr('current_val',++count);//set curent value
    var d = $('.save').attr('total');
  
  counter = $('.counting').attr('current_val');
if(parseInt(counter) < parseInt(d))
  {
    $('.content').hide()
    $('#content-'+counter+'').show();
    ++counter;
    if(counter > 1) {
    $('.back').show();
    }
    if(counter > 3) {
    $('.content-holder').hide();
    $('.end').show();
    }
  }
  });

$('.common').click(function(){
    var number_jump = $(this).attr('val1');
    $('.counting').attr('current_val',number_jump);//set curent value
    
    ++number_jump;
 });

$('.review1').click(function(){
  var d1 = $('.save').attr('total');
  var review1_count = $('.counting').attr('current_val')-1;
  if(parseInt(review1_count)<parseInt(d1))
  {
    $('.content').hide();
    $('#content-'+review1_count+'').show();
    $('#optionsRadios'+review1_count).css("background-color", "#FF0000");
  }
});

});
function erase_radio(){
var num = $('.counting').attr('current_val');
var ele = document.getElementsByName("optionsRadios"+num);
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
     $('#optionsRadios'+num).css("background-color", "#19d252");

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
  }  

///////////////////////////////////////


  function color(name,num)
{
$('#'+name).css("background-color", "#38a9ff");
    var d = $('.save').attr('total');
if(num==d){
  $(document).ready(function(){
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
  
}
 });
});
  modal.style.display = "block";
}

span.onclick = function() {
 
    modal.style.display = "none";
    window.close();

}

}
//////////////////////END OF POP UP MODEL/////////////////////////////////////////////