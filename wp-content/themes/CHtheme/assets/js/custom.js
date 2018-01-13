$( document ).ready(function(){
  //$(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    }
  );
  $('.slider').slider();

  $('.button-collapse.popup_mainmenu').sideNav({
      menuWidth: $(window).width()-40, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) {
        $(".ul-popup_mainmenu").height($(window).height()-100);
        $(".ul-popup_mainmenu").css("margin",20);
      }, // A function to be called when sideNav is opened
      onClose: function(el) {
        $(".ul-popup_mainmenu").css("margin",0);
      }, // A function to be called when sideNav is closed
    }
  );
})
