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