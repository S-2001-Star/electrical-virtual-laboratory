function scrollWaypointInit( items, trigger ) {
  items.each( function() {
    var element = $(this),
        osAnimationClass = element.data("animation"),
        osAnimationDelay = element.attr('data-animation-delay');
 
    element.css({
        '-webkit-animation-delay':  osAnimationDelay,
        '-moz-animation-delay':     osAnimationDelay,
        'animation-delay':          osAnimationDelay
    });
 
    var trigger = ( trigger ) ? trigger : element;
 
    trigger.waypoint(function() {
        element.addClass('animated').addClass(osAnimationClass);
    },{
        triggerOnce: true,
        offset: '80%'
    });
  });
}

//Call the init

$(document).ready(function(){

scrollWaypointInit( $('.animateMe') );

});




//google sign in
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

//reCAPTCHA
var onloadCallback = function() {
  alert("grecaptcha is ready!");
};