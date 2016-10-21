$( function() {
  $( "#tabs" ).tabs();
} );
$(function() {

  $('#hamburger').click(function(){
    $(this).toggleClass('open');
    $('.header-nav').slideToggle();
  });

});
$('.li-tab').click(function(){
  if(!$(this).hasClass('tab-active')){
    $('.li-tab').removeClass('tab-active');
    $(this).addClass('tab-active');
    var show = $(this).attr('data-show');
    var hide = $(this).attr('data-hide'); 
    $('.' + hide).hide();
    $('.' + show).show();
  }

});
$(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
          } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
          }
        });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
          } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
          }
        });
  });
$(function(){
  $('.proposal-row h2').click(function(){
    if($('.proposal-hidden-row').hasClass('hidden')){
      $('.proposal-hidden-row').show(200);
      $('.proposal-hidden-row').removeClass('hidden');
      $('.proposal-row h2 i').removeClass('fa-plus').addClass('fa-minus');
    }else{
      $('.proposal-hidden-row').hide(200);
      $('.proposal-hidden-row').addClass('hidden');
      $('.proposal-row h2 i').removeClass('fa-minus').addClass('fa-plus');
    }
  });
});
$(function(){
  $('ul.block_advantage li').click(function(){
    var target = $(this).attr('data-target');
    $('.advantage_description').hide();
    $('.'+target).show();
  });
});
$(function(){
  $('.advantage_description i.fa-times-circle').click(function(){
    $(this).parent().hide();
  });
});
$( function() {
  $( "#accordion" ).accordion();
});
//FAQ tabs
$(function(){
  $('#faq ul li').click(function(){
    $('#faq ul li').removeClass('active');
    $(this).addClass('active');
    var show = $(this).attr('data-show');
    $('.tab').hide();
    $('div[data-filter="'+show+'"').show();
  });
});
//accordion FAQ 1st TAB
$(function(){
  if($('#accordion h3').hasClass('ui-accordion-header-active')){
    $('h3.ui-accordion-header-active i').removeClass('fa-angle-down').addClass('fa-angle-up');
  }
  $('#accordion h3').click(function(){
    if($('#accordion h3').hasClass('ui-accordion-header-active')){

      $('#accordion h3 i').removeClass('fa-angle-up').addClass('fa-angle-down');
      $('h3.ui-accordion-header-active i').removeClass('fa-angle-down').addClass('fa-angle-up');
    }else{
      $('h3.ui-accordion-header-active i').removeClass('fa-angle-up').addClass('fa-angle-down');
    }
  });
  
});
$(function(){
  $("#lightSlider").lightSlider({
    item:4,
    loop:false,
    slideMove:2,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    responsive : [
    {
      breakpoint:800,
      settings: {
        item:3,
        slideMove:1,
        slideMargin:6,
      }
    },
    {
      breakpoint:480,
      settings: {
        item:2,
        slideMove:1
      }
    }
    ]
  }); 
});
$(function(){
  $('.controls i.next').click(function(){
    var j = $('input#count').val();

    var a = $(this).attr('data-count');     
    $('.project_item.active').removeClass('active').hide();
    $('div[data-number="' + (a) + '"]').show().addClass('active');    

    
  });

  $('.controls i.prev').click(function(){
    var a = $(this).attr('data-count');   
    if(a >= 1){
        $('.project_item.active').removeClass('active').hide();
        $('div[data-number="' + (a) + '"]').show().addClass('active');
      
    }
  });
});
$(function(){
 ymaps.ready(init);
 var myMap,
 myPlacemark;

 function init(){     
  myMap = new ymaps.Map("map", {
    center: [55.76, 37.64],
    zoom: 7,
    controls: []
  });

  myPlacemark = new ymaps.Placemark([55.76, 37.64], { 
    hintContent: 'Москва!', 
    balloonContent: 'Столица России' 
  });

  myMap.geoObjects.add(myPlacemark);
}
});
