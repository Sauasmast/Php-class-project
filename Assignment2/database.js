function callme(){
 var a="first";
    a=$(".selectee").val();
 
  if(a=="first"){
  $('.selectee2').attr( 'placeholder', 'Rank' );
     $('.selectee2').attr( 'type', 'number' );
  }
  else if(a=="second"){
     $('.selectee2').attr( 'placeholder', 'Country Code' );
     $('.selectee2').attr( 'type', 'text' );
  }
    else if(a=="third"){
   $('.selectee2').attr( 'placeholder', 'Country Name' );
     $('.selectee2').attr( 'type', 'text' );
  }
  }

function submission(){
  var a= $(".selectee2").val();
  console.log(a);
  if (a==""){
    $(".form_elements").effect("shake");
  }
}

function goback(){
  window.history.back();
}
