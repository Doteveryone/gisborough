$(document).ready(function() {
  $("a.fakelink").click(function() {
    var url = this.href
    if(confirm("Normally, this link would take you straight to '"+url+"'. If you'd like to go there, click 'OK'; otherwise, 'cancel' will keep you on your current page.")) {
      window.location = this.href;
    } else {
      return false;
    }
  });

  // Check the initial Poistion of the Sticky Header
  var stickyTop = $('.sticky-header').offset().top;

  function onScroll() {
    if( $(window).scrollTop() > (stickyTop-20) ) {
      $('.sticky-header').css({position: 'fixed', top: '0px'}).addClass('stuck');
      $('.sticky-header .progbar').show();
    } else {
      $('.sticky-header .progbar').hide();
      $('.sticky-header').css({position: 'static', top: '0px'}).removeClass('stuck');
    }
  }

  $(window).scroll(onScroll);
  onScroll();


  //scrolly progbar

  var getMax = function(){
    return $(document).height() - $(window).height();
  }
    
  var getWindowTop = function(){
    return $(window).scrollTop();
  }
    
  var progressBar = $('.progbar'), 
      value, width;
      
  var getWidth = function() {
    // Calculate width in percentage
    value = getWindowTop();            
    max = getMax(), 
    width = (value/max) * 100;
    width = width + '%';
    return width;
  }
      
  var setWidth = function(){
    console.log(getWidth());
    progressBar.css({ width: getWidth() });
  }
      
  $(document).on('scroll', setWidth);
  $(window).on('resize', function(){
    // Need to reset the Max attr
    max = getMax();
    setWidth();
  });
});
