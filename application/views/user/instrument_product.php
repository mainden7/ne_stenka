<style type="text/css">

	.price_block{
		border: 5px solid #f0f2f6;
		background: #f0f2f6;;
		padding: 0;
		width: 300px;
		padding-bottom: 20px;
	}
	.price_block .bg_white{
		padding: 30px 50px;
		padding-left: 60px;
	}
	.price_block .bg_grey{
		padding-top: 20px;
	}
	span.price-amount{
		display: inline-block;
		background: #fdd537;
		/* padding: 10px 30px; */
		font-size: 20px;
		position: relative;
		width: 100%;
		text-align: center;
		font-weight: 800;
	}
	span.price-amount:before{
		content: '';
		position: absolute;
		/* width: 50px; */
		/* height: 0px; */
		background: #fefefe;
		left: -20px;
		top: 0;
		/* border-left: 50px solid #fff; */
		/* border-right: 0; */
		border-top: 15px solid #fdd537;
		border-bottom: 17px solid #fdd537;
		/* z-index: 141; */
		/* border: 29px solid transparent; */
		border-left: 20px solid #fff;
	}
	.qty {
		width: 40px;
		height: 25px;
		text-align: center;
		display: inline;
		width: 40px;
		height: 40px;
	}
	input.qtyplus,
	input.qtyminus{
		background: transparent;
		border: none;
		width: 20px;
		height: 40px;
	}
	a.big-btn{
		font-size: 18px;
		padding: 20px;
		text-transform: none;
		width: 100%;
	}
    #instrument_product h2.text-smaller{
        font-size: 34px;
    }
</style>
<section id='instrument_product' style="background: #f2f5f8">
	<div class="row expanded large-12 frontSlide pt80 pb130" style="background: #f2f5f8">
		<div class="row large-10" style="margin-top: 50px;">
            <div class="column large-12">
                <div class="large-12 row bg_white" style="padding: 80px 40px 80px 40px">
                    <div class="column large-4 small-12">
                        <h2 class="mt0"><?php echo $data['product']['name']; ?></h2>
                        <p><?php echo $data['product']['description'] ?></p>

                    </div>
                    <div class="column large-4 small-12">
                        <img src="<?php echo base_url() ?>application/resources/user_resources/img/<?php echo $data['product']['image'] ?>" alt="">
                    </div>
                    <div class="column large-4 small-12 price_block pb50">
                        <div class="bg_white">
                            <span class="price-amount">
                                <?php
                                    if(isset($this->session->userdata['user_city'])){
                                        $user_city = $this->session->userdata['user_city'];
                                    } else{
                                        $user_city = 'Москва';
                                    }
                                $prod_price = Product::load_price($data['product']['id'], $user_city);
                                echo isset($prod_price['price']) ? number_format($prod_price['price'], 2, ',', '.') : 0;
                                ?>
                                <small>p.</small>
                            </span>
                        </div>
                        <div class="bg_grey">
                            <div class="columns large-6 small-12">
                                <label>Размер</label>
                            </div>
                            <div class="columns large-6 small-12">
                                <select>
                                    <option>500</option>
                                </select>
                            </div>
                            <div class="columns large-6 small-12">
                                <label>Количество</label>
                            </div>
                            <div class="columns large-6 small-12 text-center">
                                <form id='myform' class='display-inline-block' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' style='font-size: 20px'/>
                                    <input type='text' name='quantity' value='1' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' style='font-size: 20px'/>
                                </form>
                            </div>
                            <div class="column large-12 text-center">
                                <form action='/ne_stenka/index.php/user/add_to_cart' method='post'>
                                    <input type="hidden" name="id" value='<?php echo $data['product']['id'] ?>'>
                                    <input type="hidden" name="quantity" value='1'>
                                    <input type="hidden" name="path" value="<?php echo isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ?>">
                                    <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                                    <button class="button btn-blueLine big-btn uppercase" style='padding: 25px 50px'>Добавить к заказу</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="large-12 row bg_white pb80">
                    <h2 class="text-center mb50 text-smaller">Кельма отпускается только в комплекте с блоками</h2>
                    <p class="text-center"><a href="/user/blocks" class="button btn-blueLine btn-inverted btn-transparent uppercase text-18">Выбрать блоки <i class="fa fa-long-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
	</div>
</section>