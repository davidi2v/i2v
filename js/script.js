$( document ).ready(function() {

$(".star").removeClass("paddnimation");

//ROTATE IMAGE ON SCROLL IN
function rotateImages(el) {
  var windowHeight = jQuery( window ).height();
  $(el).each(function(){
      var thisPos = $(this).offset().top;

      var topOfWindow = $(window).scrollTop();
      if (topOfWindow + windowHeight - 250 > thisPos ) {
          $(this).addClass("paddnimation");
      }
  });
}

// if the image in the window of browser when the page is loaded, show that image
$(document).ready(function(){
      rotateImages('.star');
});

// if the image in the window of browser when scrolling the page, show that image
$(window).scroll(function() {
      rotateImages('.star');
});



//FADE IN ON SCROLL IN

/* Every time the window is scrolled ... */
$(window).scroll( function(){

 /* Check the location of each desired element */
 $('.hideme').each( function(i){

     var bottom_of_object = $(this).position().top + $(this).outerHeight();
     var bottom_of_window = $(window).scrollTop() + $(window).height();

     /* If the object is completely visible in the window, fade it it */
     if( bottom_of_window > bottom_of_object ){

         $(this).animate({"opacity":"1"},1000);

     }

 });


});

/*-------------------------------------
| Icon Bar Nav Js
-------------------------------------*/

$(".navbar-toggle").hover(function(){
$(".icon-bar").css("background-color", "#ee2524");
}, function(){
$(".icon-bar").css("background-color", "#888");
});


function scrollTop () {
        $('html,body').animate({
        scrollTop: $('#nav').offset().top},'slow');
}

function scrollContact () {
        $('html,body').animate({
        scrollTop: $('#form').offset().top},'slow');
}

/*-------------------------------------
| Smooth Scroll
-------------------------------------*/

$("#back-to-top").click(scrollTop);
$(".c2A").click(scrollContact);

});



