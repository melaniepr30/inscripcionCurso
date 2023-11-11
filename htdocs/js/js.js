

/*Inicia funcionalidad del carousel*/

$('#myCarousel').carousel({
       interval: 5000
   })
   $('.fdi-Carousel .item').each(function () {
       var next = $(this).next();
       if (!next.length) {
           next = $(this).siblings(':first');
       }
       next.children(':first-child').clone().appendTo($(this));

       if (next.next().length > 0) {
           next.next().children(':first-child').clone().appendTo($(this));
       }
       else {
           $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
       }
   });
   
/*Fin funcionalidad del Carousel*/

/*Inicia la funcionalidad del boton para el menu responsivo*/

jQuery("#disp-submenu").click(function() {
    jQuery(this).next('#target2').slideToggle('slow');
});

jQuery("#dispara").click(function() {
    jQuery(this).next('.target3').slideToggle('slow');
});

$("#cont_info").click(function(){
       $(".info_contenedor2").slideUp("slow");
       $(".info_contenedor3").slideUp("slow");
       $(".info_contenedor").slideToggle("slow");
     
});
$("#cont_info2").click(function(){
       $(".info_contenedor").slideUp("slow");
       $(".info_contenedor3").slideUp("slow");
       $(".info_contenedor2").slideToggle("slow");
      
});
$("#cont_info3").click(function(){
       $(".info_contenedor2").slideUp("slow");
       $(".info_contenedor").slideUp("slow");
       $(".info_contenedor3").slideToggle("slow");
       
});

/*Fin la funcionalidad del boton para el menu responsivo*/




var ventanaAncho =  $(window).width();

if( ventanaAncho <= 991){
    
    $("#colapsa").show();
    $("#esconde").css("display", "none");
    $("#esconde").css("width", "100%");
    $("#nab-bar").addClass("clase_boton");
    $("seg-men").addClass("flo");
    $('ul#esconde').children('li').css("width", "100%");
    $('#sub-men, #sub-men2, #sub-men3, #sub-men4, #sub-men5, #sub-men6').addClass("second-level");
    $("#sub-men5").css("left", "0%");
    $("#sub-men6").addClass("tercer-menu");
    $(".carrusel").addClass("fondo-gris3");

$("#colapsa").click(function(){
    
    $("#esconde").slideToggle("slow");
   
    
    });  
}


(function($){
    $(document).ready(function(){
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            event.preventDefault(); 
            event.stopPropagation(); 
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);


var ventanaAncho =  $(window).width();
    
    if(ventanaAncho <= 767 ){
        $("#segundo , #sub-men3").addClass("ancho");
        
        }


