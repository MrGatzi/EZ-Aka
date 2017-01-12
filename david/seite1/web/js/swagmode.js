/*
Author: David Obermann
Date: 26.09.2016
Description: This is the Swagmode code
*/

//Swag mode makes it possible to use your webpage
//either as a normal multi-level page or a one-page.
function swagmodeon(){
  $('.homebutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 600, function(){
      $('.about').hide("slow");
      $('.contact').hide("slow");
      $('.home').show("slow");
      $('.services').hide("slow");
      $('.howto').hide("slow");
      $('.goodpractice').hide("slow");
    });
  });

  $('.aboutbutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 600, function(){
      $('.about').show("slow");
      $('.contact').hide("slow");
      $('.home').hide("slow");
      $('.services').hide("slow");
      $('.howto').hide("slow");
      $('.goodpractice').hide("slow");
    });
  });

  $('.contactbutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 600, function(){
      $('.about').hide("slow");
      $('.contact').show("slow");
      $('.home').hide("slow");
      $('.services').hide("slow");
      $('.howto').hide("slow");
      $('.goodpractice').hide("slow");
    });
  });

  $('.servicesbutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 600, function(){
      $('.about').hide("slow");
      $('.contact').hide("slow");
      $('.home').hide("slow");
      $('.services').show("slow");
      $('.howto').hide("slow");
      $('.goodpractice').hide("slow");
    });
  });

  $('.howtobutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 600, function(){
      $('.about').hide("slow");
      $('.contact').hide("slow");
      $('.home').hide("slow");
      $('.services').hide("slow");
      $('.howto').show("slow");
      $('.goodpractice').hide("slow");
    });
  });

  $('.practicebutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 600, function(){
      // Animation complete.
      $('.about').hide("slow");
      $('.contact').hide("slow");
      $('.home').hide("slow");
      $('.services').hide("slow");
      $('.howto').hide("slow");
      $('.goodpractice').show("slow");
    });
  });

/*
  $(".nav a").on("click", function(){
   $(".mynavbar").find(".active").removeClass("active");
   $(this).parent().addClass("active");
 });*/

}
