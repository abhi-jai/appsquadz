function check(selectedValue,cls){
  
correct ='GIST';

  //var radioName = $(this).attr("cls"); //Get radio name
  alert(cls);
  $(":radio[name='"+cls+"']:not(:checked)").attr("disabled", true); //Disable all unchecked radios with the same name
  if(correct==selectedValue)
  {
    document.getElementById("div").innerHTML = "correct!!";
  }
  else
  {
    document.getElementById("div").innerHTML = "incorrect"; 
  }
}
