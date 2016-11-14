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
              <img class="family" src="<?php echo base_url() ?>application/resources/user_resources/img/a1_1.png">
          </div>
        </div>

        <div id="tabs-2">
          <div class="large-7 small-12 columns">
            <p class="bold mb0">Бесплатная доставка</p>
            <p>Бесплатно привезем блоки на ваш объект в Москве и Московской области</p>
            <p class="bold mb0">Гибкий график поставок</p>
            <p>Привезем в удобное для вас время</p>
            <p class="bold mb0">Срочная доставка</p>
            <p>Оперативно доставим блоки из ячеистого бетона автоклавного твердения по Москве и Московской области</p>
          </div>
          <div class="large-5 small-12 columns">
            <img class="family" src="<?php echo base_url() ?>application/resources/user_resources/img/a1_2.png">
          </div>
        </div>
        <div id="tabs-3">
          <div class="large-7 small-12 columns">
            <p class="bold mb0">Лучшие цены</p>
            <p>Предлагаем магазинам и закупочным базам лучшие цены</p>
            <p class="bold mb0">Любая форма оплаты</p>
            <p>Как вам удобно: нал/безнал/банковская карта</p>
            <p class="bold mb0">Бесплатная доставка</p>
            <p>Бесплатно привезем блоки на ваш объект в Москве и Московской области</p>
            <p class="bold mb0">Совмещенный заказ</p>
            <p>Комплектация блоков из ячеистого бетона разных размеров в одну поставку</p>
          </div>
          <div class="large-5 small-12 columns">
            <img class="family" src="<?php echo base_url() ?>application/resources/user_resources/img/a1_3.png">
          </div>
        </div>
        <div id="tabs-4">
          <div class="large-7 small-12 columns">
            <p class="bold mb0">Любые характеристики</p>
            <p>Поставки блоков из ячеистого бетона со специфическими характеристиками (размер, плотность, прочность)</p>
            <p class="bold mb0">Любые объемы блоков </p>
            <p>Привезем вплоть до 10-15 машин в день</p>
            <p class="bold mb0">Совмещенный заказ</p>
            <p>Комплектация блоков из ячеистого бетона</p>
            <p class="bold mb0">Срочная поставка </p>
            <p>Оперативно доставим  (в течение 1-3 дней) блоки из ячеистого бетона автоклавного твердения по Москве и Московской области</p>

          </div>
          <div class="large-5 small-12 columns">
            <img class="family" src="<?php echo base_url() ?>application/resources/user_resources/img/a1_4.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



