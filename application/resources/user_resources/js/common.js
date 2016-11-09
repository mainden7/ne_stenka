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
    $('input.qty').keyup(function () {
       var quantity = $(this).val();
        var fieldName = $(this).attr('name');
        if(quantity > 0){
            $('input[name='+fieldName+']').val(quantity);
        }else{
            $('input[name='+fieldName+']').val(1);
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
  $('.tooltip').mouseover(function(){
    $('.info').hide();
    $(this).find('.info').show();
  });
  $('.tooltip').mouseleave(function(){
    $('.info').hide();
  });
});
$(function(){
  $('input.qt').click(function(){
    var fieldName = $(this).attr('field');
    var productTotalPricePrice = $(this).parent().parent().parent().find('td.product_total_price').text();
    var productCount = $('input[name="' + fieldName +'"]').val();

    var productPrice = $(this).parent().parent().parent().find('td.product_total_price').attr('data-price');
    var totalPrice = Number(productCount) * Number(productPrice);
    
    $(this).parent().parent().parent().find('td.product_total_price').text(totalPrice);
      $(this).parent().find('.serialize').val(productCount);
      $(this).parent().parent().parent().parent().parent().parent().find('#pre-price').text(totalPrice);

    /*var b = $(this).val() + $(this).parent().get(3).find('td.product_total_price').attr('data-price');
    $(this).parent().get(3).find('td.product_total_price').text(a+b);*/

  });
});
$(function(){
  $('input.qty').keyup(function(){
    var productCount = $(this).val();
    var productPrice = $(this).parent().parent().parent().find('td.product_total_price').attr('data-price');
    var totalPrice = Number(productCount) * Number(productPrice);
    
    $(this).parent().parent().parent().find('td.product_total_price').text(totalPrice);
      $(this).parent().find('.serialize').val(productCount);
      $(this).parent().parent().parent().parent().parent().parent().find('#pre-price').text(totalPrice);
    

    /*var b = $(this).val() + $(this).parent().get(3).find('td.product_total_price').attr('data-price');
    $(this).parent().get(3).find('td.product_total_price').text(a+b);*/

  });
});
$(function () {
    $('body').click(function () {
        var price = 0;
        $('.product_total_price').each(function () {
            price += Number($(this).text());
        });
        $('#final-price').text(price);
    });
});
$(function(){
  $('a.submit-form').click(function(e){
    e.preventDefault();
    var str = $('input.serialize').serialize();
    window.location.replace("/user/cart_next?"+str);
    

    /*$.ajax({
      type: 'POST',
      data: str,
      utl: '/user/cart_next',
      success: function(data){        
        window.location.replace("/ne_stenka/index.php/user/cart_next?"+str);     
      }
      
    }); */  
  });
});
$(function () {
   $('.recomended #add_glue').click(function () {
        if($(this).hasClass('fa-plus-circle')) {
            var price = $(this).parent().parent().find('.product_total_price').attr('data-price');
            $('.recomended').css('opacity', '1');
            $('.recomended #myform input.qty').val(1);
            $('.recomended .product_total_price').text(price);
            $(this).removeClass('fa-plus-circle').addClass('fa-times');
        }else{
            $('.recomended').css('opacity', '0.3');
            $('.recomended #myform input.qty').val(0);
            $(this).removeClass('fa-times').addClass('fa-plus-circle');
            $('.recomended .product_total_price').text(0);
        }

   });
});

$(function(){
  $('a.comment_link').click(function(e){
    e.preventDefault();
    $('div.hidden').show();
  });
});

$(function(){
  $('.swal-btn-success').click(function(e){
    e.preventDefault();
    var data = $('#cart-form').serialize();
    $.ajax({
      type: 'POST',
      data: data,
      url: '/user/post_order',
      success: function(){
        swal({
          title: "Ваша заявка отправлена!",
          text: "В ближайшее время с вами свяжется наш менеджер для уточнения деталей",
          type: "success",
          timer: 2000,   
          showConfirmButton: false
        });
      },
      error: function(){
       swal({
         title: "Что-то пошло не так!",
        type: "error",
        timer: 2000,   
        showConfirmButton: false
       });
      }
    });
    
  });
});

$(function(){
  $('a.city_choise').click(function(e){
    e.preventDefault();
    var a = $(this).text();

   $.ajax({
    type: 'POST',
    url: '/user/set_city',
    data: ({city: a}),
    success: function(data){
      $('span.city-price').hide().addClass('hidden');
    $('span[data-city-price="' + a + '"]').removeClass('hidden').show();
      $('a.user-city').text(a);
      $('#chooseCity').modal('hide');
      swal({
          title: "Выбран город " + a,          
          type: "success",
          timer: 2000,   
          showConfirmButton: false
        });
    },
    error: function(){
       swal({
         title: "Что-то пошло не так!",
        type: "error",
        timer: 2000,   
        showConfirmButton: false
       });
      }
   });
  });
});

$(function () {
   $('a.popover-a span.with').hide();

    $('a.popover-a span.without, a.popover-a i').click(function (e) {
       e.preventDefault();
        $('a.popover-a span.with').show();
    });
    $('a.popover-a span.with').click(function (e) {
        e.preventDefault();
        var text = $(this).text();
        var text_1 = $('a.popover-a span.without').text();
        $('a.popover-a span.without').text(text);
        $('a.popover-a span.with').hide().text(text_1);
    });
});

$(function () {
    $('a.popover-a2 span.with').hide();

    $('a.popover-a2 span.without, a.popover-a2 i').click(function (e) {
        e.preventDefault();
        $('a.popover-a2 span.with').show();
    });
    $('a.popover-a2 span.with').click(function (e) {
        e.preventDefault();
        var text = $(this).text();
        var text_1 = $('a.popover-a2 span.without').text();
        $('a.popover-a2 span.without').text(text);
        $('a.popover-a2 span.with').hide().text(text_1);
    });
});

$(function(){
    $('a.show-text-modal').click(function (e) {
        e.preventDefault();
        $(this).parent().find('textarea').show().focus();
        var styles = {
            'color' : '#58595b',
            'border-bottom' : '1px dashed transparent'
        };
        $(this).text('Ваш комментарий').css(styles);
    });
});
$(function () {
    $('form.ajax-form').submit(function (e) {
        e.preventDefault();
        var method = $(this).attr('method');
        var path = $(this).attr('action');
        var name = $(this).find('input.name').val();
        var tel = $(this).find('input.tel').val();
        if(name.length <= 2 || name == ''){
            $('input.name').addClass('error');
            $('.name_caption').show();
            return false;
        }else{
            $('input.name').removeClass('error');
            $('.name_caption').hide();
        }
        if(tel.length <= 0 || tel == ''){
            $('input.tel').addClass('error');
            $('.tel_caption').show();
            return false;
        }else{
            $('input.tel').removeClass('error');
            $('.tel_caption').hide();
        }
        var data = $(this).serialize();

        $.ajax({
            type : method,
            data : data,
            url: path,
            success: function () {
                $('.modal').modal('hide');
                swal({
                    title: "Выбран город " + a,
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false
                });
            },
            error: function () {
                swal({
                    title: "Что-то пошло не так!",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            }

        });
    });
})

$(function () {
    var mq = window.matchMedia( "(max-width: 1024px)" );
    if (mq.matches) {
        // window width is at least 1024px
        $('body > div:nth-child(13) > div.large-7.columns.pb80 > div.column.products-title.medium-6.small-centered.text-center').removeClass('medium-6').addClass('medium-8');
        $('body > div:nth-child(13) > div.large-7.columns.pb80 > div.column.large-9.medium-9').removeClass('medium-9').addClass('medium-11 large-11').css('padding-left', '20px');
        $('body > div.row.expanded.small-12.medium-12.large-10.large-centered.pb130.pt80.main-features > div.column.large-6.medium-10.small-centered.text-center').removeClass('large-6').addClass('large-8');
        $('#product > div.row.expanded.frontSlide.large-12.pt80 > div:nth-child(2) > div:nth-child(1)').removeClass('large-9').addClass('large-12 mb30');
        $('#product > div.row.expanded.frontSlide.large-12.pt80 > div:nth-child(2) > div.column.large-3.small-12.advantage').removeClass('large-3').addClass('large-12');
        $('#product > div.row.expanded.frontSlide.large-12.pt80 > div:nth-child(2) > div.column.small-12.advantage.large-12 > div > div').removeClass('row large-12').addClass('column large-4');
        $('#product > div.row.expanded.frontSlide.large-12.pt80 > div.large-10.row.pb50 > div.column.large-9.medium-6.small-12').removeClass('large-9').addClass('large-6');
        $('#product > div.row.expanded.frontSlide.large-12.pt80 > div.large-10.row.pb50 > div.column.large-3.medium-6.small-12.pt20').removeClass('large-3').addClass('large-6');
        $('#tabs-1 > div:nth-child(1) > div.column.large-4.small-12.pl40, #tabs-1 > div:nth-child(1) > div:nth-child(2)').removeClass('large-4').addClass('large-6');
        $('#tabs-1 > div:nth-child(1) > div.column.large-4.small-12').removeClass('large-4').addClass('large-12 pl40').css('margin-bottom', '20px');
        $('#instruments_i > div.row.expanded.large-10.mb50 > div > div > div.inst_caption > div > div').removeClass('large-8').addClass('large-12').css('margin-bottom', '20px');
        $('#instruments_i > div.row.expanded.large-10.mb50 > div > div > div.inst_img.text-center.mb80').removeClass('mb80');
        $('#faq > div > div').removeClass('large-6').addClass('large-8');
        $('body > div.row.expanded.large-12.pt130.pb130 > div').removeClass('large-8').addClass('large-10');
    }
    var mq_480 = window.matchMedia('(max-width: 480px)');
    if(mq_480.matches){
        $('#product > div.row.expanded.large-12.pb130 > div > div > div > div').addClass('pl0 pr0');
    }
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