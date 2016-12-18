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
    $('.howto').hide("slow");
    $('.goodpractice').hide("slow");
	   window.scrollTo(0, 0);
  });

  $('.aboutbutton').click(function(){
    $('.about').show("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.howto').hide("slow");
    $('.goodpractice').hide("slow");
	   window.scrollTo(0, 0);
  });

  $('.contactbutton').click(function(){
    $('.about').hide("slow");
    $('.contact').show("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.howto').hide("slow");
    $('.goodpractice').hide("slow");
	   window.scrollTo(0, 0);
  });

  $('.servicesbutton').click(function(){
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').show("slow");
    $('.howto').hide("slow");
    $('.goodpractice').hide("slow");
	   window.scrollTo(0, 0);
  });

  $('.howtobutton').click(function(){
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.howto').show("slow");
    $('.goodpractice').hide("slow");
	  window.scrollTo(0, 0);
  });

  $('.practicebutton').click(function(){
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').hide("slow");
    $('.services').hide("slow");
    $('.howto').hide("slow");
    $('.goodpractice').show("slow");
	  window.scrollTo(0, 0);
  });

}
