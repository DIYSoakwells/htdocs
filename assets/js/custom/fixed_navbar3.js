



// ------------------------------
// http://twitter.com/mattsince87
// ------------------------------
function scrollNav() {
  $('.nav').click(function(){  
    //Toggle Class
    $(".active").removeClass("active");      
    $(this).closest('li').addClass("active");
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 160
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}

scrollNav();

$(function(){
  /*
   One initial note: When you switch an element from relative to
   fixed, you take it out of the flow of the document. So other
   elements will likely be moved as a result.
   You may want to (1) replace the element with a blank element of the
   same size, or (2) use visibility:hidden on the non-fixed and then
   display:block on the fixed element (so that the non-fixed stays in
   place but is not visible).
   This example also allows the headings to overlap. I think you said
   you already have a solution for that so I left it as is.
  */
  var WRAPPER = '.wrapper'; // selector for a parent element
  var THROTTLE_SCROLL = 10; // ms interval for calling scroll handler
  var THROTTLE_RESIZE = 20; // ms interval for calling resize handler
  
  var entries = [
    {sel:'#s0', isFixed:false, top:null, pad:75, fixedClass:'fixed-00'},
    {sel:'#s1', isFixed:false, top:null, pad:75, fixedClass:'fixed-01'},
	{sel:'#s2', isFixed:false, top:null, pad:75, fixedClass:'fixed-02'},
	{sel:'#s3', isFixed:false, top:null, pad:75, fixedClass:'fixed-03'}
    // add any more...
  ];
  
  function calcPositions() {
	$('.product_description , .pricetable').matchHeight();
    $.each(entries, function (i, entry) {
      entry.top = $(entry.sel).offset().top;
    });
  }
  calcPositions(); // get initial positions

  
  function resetPositions() {
    // this may not do exactly what you need, but if the window is
    // resized, you will need to recalculate the offsets
    $.each(entries, function (i, entry) {
      entry.top = null;
      $(WRAPPER).removeClass(entry.fixedClass);
      entry.isFixed = false;
    });
  }
  
  $(window).resize(_.throttle(function () {
    resetPositions(); // put the headers back in place
    calcPositions();  // recalculate their positions
    scrollHandler();  // compare their new positions to the window
  }, THROTTLE_RESIZE));
  
  function scrollHandler() {
    var scrollTop = $(window).scrollTop();
    for(var i=0; i < entries.length; i++) {
      if(scrollTop > entries[i].top - entries[i].pad) {
        // only fix if we need to:
        if(!entries[i].isFixed) {
          $(WRAPPER).addClass(entries[i].fixedClass);
          entries[i].isFixed = true;
          // TODO set height of spacer = height of heading
        }
      }
      else {
        // only un-fix if we need to:
        if(entries[i].isFixed) {
          $(WRAPPER).removeClass(entries[i].fixedClass);
          entries[i].isFixed = false;
        }
      }
    }
  }
  
  $(window).scroll(_.throttle(scrollHandler, THROTTLE_SCROLL));
});
