function validateForm(){

 var first= $('.first').val();
  var second=$('.second').val();
  
  if(first<=0 || second<=0){
    alert("You cannot have a negative value or empty value");
    return false;
  }
  
  else{
    return true;
  }

}

