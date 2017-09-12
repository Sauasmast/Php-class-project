var d=0;

function callme(){
 var a="Distance";
    a=$("#sel1").val();
  if(a=="Temperature"){
  $('#miles').attr( 'value', 'Celsius' );
     $('#kilo').attr( 'value', 'Farhenheit' );
  }
  else if(a=="Weight"){
      $('#miles').attr( 'value', 'Pound' );
     $('#kilo').attr( 'value', 'Kilogram' );
  }
    else if(a=="Volume"){
      $('#miles').attr( 'value', 'Liter' );
     $('#kilo').attr( 'value', 'Gallon' );
  }
  else{
    $('#miles').attr( 'value', 'Miles' );
     $('#kilo').attr( 'value', 'Kilometer' );
  }
  }

  $("#miles").click(function(){
         $('#miles').attr( 'value', '' );
    });

  $("#miles").blur(function(){
              var c=$("#miles").val();
                if(c==""){
                  callme();
                  }
        else if(isNaN(c)){
              callme();
              }
    });

$('#conve').click(function(){
                  var b;
                  b= $("#miles").val();
                  if(isNaN(b)){
                    alert("You must input a number");
                  }
                  else if(b==""){
                    alert("Please input a number for the conversion");
                  }
                  });


function symbolClicked(){
  var c="Distance";
    c=$("#sel1").val();
  
  if(d%2==0){
    
        if(c=="Temperature"){
        $('#miles').attr( 'value', 'Farhenheit' );
           $('#kilo').attr( 'value', 'Celsius' );
        }
        else if(c=="Weight"){
            $('#miles').attr( 'value', 'Kilogram' );
           $('#kilo').attr( 'value', 'Pound' );
        }
          else if(c=="Volume"){
            $('#miles').attr( 'value', 'Gallon' );
           $('#kilo').attr( 'value', 'Liter' );
        }
        else{
          $('#miles').attr( 'value', 'Kilometer' );
           $('#kilo').attr( 'value', 'Miles' );
        }
  }
  if (d%2==1){
    if(c=="Temperature"){
  $('#miles').attr( 'value', 'Celsius' );
     $('#kilo').attr( 'value', 'Farhenheit' );
  }
  else if(c=="Weight"){
      $('#miles').attr( 'value', 'Pound' );
     $('#kilo').attr( 'value', 'Kilogram' );
  }
    else if(c=="Volume"){
      $('#miles').attr( 'value', 'Liter' );
     $('#kilo').attr( 'value', 'Gallon' );
  }
  else{
    $('#miles').attr( 'value', 'Miles' );
     $('#kilo').attr( 'value', 'Kilometer' );
  }
  }
  d++;
}

function goback(){
   window.history.back();
}



