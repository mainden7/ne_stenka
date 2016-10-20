
<div class="mobile-menu-left-overlay"></div>

<nav class="side-menu">
    <ul class="side-menu-list">
    	<li class="green">
    		<a href="<?php echo site_url().'admin_panel/index'; ?>">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Консоль</span>
	            </span>
            </a>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-cogwheel"></i>
                <span class="lbl">Настройки</span>
            </span>
            <ul>
                <li><a href="<?php echo site_url().'admin_panel/main_settings'; ?>"><span class="lbl">Главные настройки</span></a></li>
                <li><a href="<?php echo site_url().'admin_panel/contact_settings'; ?>"><span class="lbl">Контакты</span></a></li>
            </ul>
        </li>
        <li class="brown with-sub">
            <span>
                <i class="font-icon glyphicon glyphicon-tint"></i>
                <span class="lbl">Продукция</span>
            </span>
            <ul>
                <li><a href="<?php echo site_url().'admin_panel/categories'; ?>"><span class="lbl">Категории</span></a></li>
                <li><a href="<?php echo site_url().'admin_panel/products'; ?>"><span class="lbl">Товары</span></a></li>
            </ul>
        </li>
        <li class="purple with-sub">
            <span>
                <i class="font-icon font-icon-comments"></i>
                <span class="lbl">Отзывы</span>
            </span>
            <ul>
                <li><a href="<?php echo site_url().'admin_panel/testimonials'; ?>"><span class="lbl">Управление</span></a></li>
            </ul>
        </li>
        <li class="red">
            <a href="<?php echo site_url().'admin_panel/news'; ?>">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Новости</span>
            </a>
        </li>
    </ul>

    <section>
        <header class="side-menu-title">еще</header>
        <ul class="side-menu-list">
            
        </ul>
    </section>
</nav><!--.side-menu-->