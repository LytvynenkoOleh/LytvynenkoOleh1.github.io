$(".item").click(function(){
    $("#myCarousel").carousel(1);
    });

  $('.carousel').carousel({
    interval: 2000,
    pause: 'hover',
    wrap: true
  });
 
  $( function() {
    $("#effect").hide();
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = "blind";
 
      // Most effect types need no options passed by default
       var options = {};
      // some effects have required parameters
       if ( selectedEffect === "scale" ) {
         options = { percent: 50 };
       } else if ( selectedEffect === "size" ) {
         options = { to: { width: 200, height: 60 } };
      }
 
      // Run the effect
      $( "#effect" ).toggle( effect, options, 500 );
    };
 
    // Set effect from select menu value
    $( document ).on( "click", "#button",function() {
      runEffect();
     
    });
   
  } );
 