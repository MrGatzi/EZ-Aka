/*
Author: David Obermann
Date: 26.09.2016
Description: This is the Swagmode code
*/

//Swag mode makes it possible to use your webpage
//either as a normal multi-level page or a one-page.
function swagmodeon(){
  $('.homebutton').click(function(){
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').show("slow");
    $('.services').hide("slow");
    $('.hoeto').hide("slow");
  });

  $('.aboutbutton').click(function(){
    $('.about').show("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.hoeto').hide("slow");
  });

  $('.contactbutton').click(function(){
    $('.about').hide("slow");
    $('.contact').show("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.hoeto').hide("slow");
  });

  $('.servicesbutton').click(function(){
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').show("slow");
    $('.hoeto').hide("slow");
  });

  $('.howtobutton').click(function(){
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.howto').show("slow");
  });
}
