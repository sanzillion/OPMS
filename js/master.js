$(document).ready(function(){
  
  $('#box').css({"left": "-50px", "opacity": "0"});
  $('#box2').css({"left": "50px", "opacity": "0"});

  $(window).scroll(function(){
    console.log($(window).scrollTop());
    if($(window).scrollTop() > 759){
      console.log('fire!');
      $('#box').animate({ left: '0px', opacity: '1'}, 1000);
      $('#box2').animate({ left: '0px', opacity: '1'}, 1000);
    }
  });
  // $('#zoomimg').css("cursor","pointer");
  // $('#zoomimg').animate({width: "50%", height: "50%"}, 'slow');
  //
  // setTimeout(function() {
  //   $('#zoomimg').animate({width: "28%"}, 'slow');
  // }, 1000 );
  $('#inside').css("opacity","0");
  $('#box').hover(function(){
    console.log('Hover');
    $('#inside').animate({ opacity: '.8'})
    $('#zooming').animate({ height: '400px', width: '400px',
                            top: '-20', left: '-20'})
  }, function(){
    $('#inside').animate({ opacity: '0'})
    $('#zooming').animate({ height: '100%', width: '100%',
                            top: '0', left: '0'})
    });

  $('#inside2').css("opacity","0")
  $('#box2').hover(function(){
    console.log('Hover');
    $('#inside2').animate({ opacity: '.8'})
    $('#zooming2').animate({ height: '400px', width: '400px',
                            top: '-20', left: '-20'})
  }, function(){
    $('#inside2').animate({ opacity: '0'})
    $('#zooming2').animate({ height: '100%', width: '100%',
                            top: '0', left: '0'})
    });

});
