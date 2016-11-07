 <style type="text/css">
  ul.inline li{
    display: inline-block;
  }
  ul.inline li{
    position: relative;
    border: 3px solid #f0f2f6;
  }
  ul.inline li:not(:first-child){
    margin-left: 15px;
  }
  ul.inline li:after{
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 10px 10px 0 10px;
    border-color: #f0f2f6 transparent transparent transparent;
    bottom: -12px;
    left: 45%;
  }
  ul.inline li a{
    color: #000;
    text-decoration: none;
    min-width: 200px;
    padding: 15px 20px;
    font-weight: bold;
  }
  ul.inline li a:hover{
    text-decoration: none;
  }
  
  ul.inline li.ui-state-active{
    background: #fed536;
    border: 3px solid #fed536;
  }
  ul.inline li.ui-state-active:after{
     content: '';
     position: absolute;
     width: 0;
     height: 0;
     border-style: solid;
     border-width: 10px 10px 0 10px;
     border-color: #fed536 transparent transparent transparent;
     bottom: -12px;
     left: 45%;
   }  .hot-proposals p{
    margin-top: 0;
    font-size: 16px;
  }
  img.family{
    width: 100%;
  }
   @media(max-width: 1600px) {

   }
   @media (max-width: 1200px) {
     
     ul.inline li{
       min-width: 180px;
     }
     ul.inline li a{
       font-size:12px;
       min-width:180px;
     }
   }
</style>
<div class="row expanded small-12 medium-12 large-10 large-centered pb130 pt80 main-features"> 
  <div class="column large-6 medium-10 small-centered text-center">
    <h2 class="mb50 block-header">Оптовые цены при любом объеме поставки</h2>
  </div>
  <div class="row large-12">
    <div id="tabs">
      <div class="large-12 columns small-12 text-center mb80">
        <ul class='inline'>
          <li class="mb30 no-border-bottom"><a href="#tabs-1" >Индивидуальным <br>застройщикам</a></li>
          <li class="mb30 no-border-bottom"><a href="#tabs-2" >Бригадным <br>подрядчикам</a></li>
          <li class="mb30 no-border-bottom"><a href="#tabs-3" >Магазинам <br>и закупочным базам</a></li>
          <li class="mb30 no-border-bottom"><a href="#tabs-4" >Строительным <br>компаниям</a></li>
        </ul>
      </div>
      <div class="large-12 row small-12 hot-proposals pl0">

        <div id="tabs-1">
          <div class="large-7 small-12 columns">
            <p class="bold mb0">Бесплатная доставка</p>
            <p>Бесплатно привезем блоки на ваш объект в Москве и Московской области</p>
            <p class="bold mb0">Без доплаты</p>
            <p>Оплата происходит наличными или банковкой картой по факту поставки</p>
            <p class="bold mb0">Доставка в любой день</p>
            <p>Привезем блоки в любой удобный для вас день. Даже в выходной</p>
            <p class="bold mb0">Сопутствующие товары</p>
            <p>Поставим все необходимое для кладки блоков из ячеистого бетона(перемычки, клей, инструмент)</p>
            <p class="bold mb0">Индивидуальный подход</p>
            <p>Довезем не полную машину, или обьеденим поставку блоков и плит в одной машине. Найдем выход из любой ситуации</p>
            
          </div>
          <div class="large-5 small-12 columns">
              <img class="family" src="<?php echo base_url() ?>application/resources/user_resources/img/family.png">
          </div>
        </div>
        <div id="tabs-2">
          <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
        </div>
        <div id="tabs-3">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
          <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
        <div id="tabs-4">
          <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
          <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
      </div>
    </div>
  </div>
</div>



