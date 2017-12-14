// Spoiler
$(document).ready(function() {
    $("#config").click(function() {
        $("#confignav").slideToggle("normal");
    });

     
});


// PopUp Cuadro
$("#abrir_box").click(function(){
    $("#cont_box").css("display", "block");
  });

  $("#cerrar_box").click(function(){
    $("#cont_box").css("display", "none");
  }); 

//Menu Tabla
$(document).ready(function() {

    $(".tabs-menu a").click(function(event) {
        event.preventDefault();

        $(".tabs-menu li ul li").css('display', 'block');

    }); 



});

