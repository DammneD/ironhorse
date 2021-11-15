
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- OG tags -->	
	<?php wp_head(); ?>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,900&amp;subset=cyrillic" rel="stylesheet">
	<!-- fav icon -->
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/logo.png" type="timeweb">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/logo.png" type="timeweb">
	<!-- css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-3 col-lg-2">
					<a class="logo" href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo">
					</a>
				</div>
				<div class="d-none d-lg-block col-lg-7 col-xl-6 menu-collapse">
					<nav class="nav">
						<ul class="menu d-flex">
							<li class="list">
								<a class="list__item go" href="#services">Услуги 
									<img class="line-wave" src="<?php bloginfo('template_directory'); ?>/img/hover_line.png" alt="">
								</a>
							</li>
							<li class="list">
								<a class="list__item go" href="#action">Акции
									<img class="line-wave" src="<?php bloginfo('template_directory'); ?>/img/hover_line.png" alt="">
								</a>
							</li>
							<li class="list">
								<a class="list__item go" href="#galery">Галерея
									<img class="line-wave" src="<?php bloginfo('template_directory'); ?>/img/hover_line.png" alt="">
								</a>
							</li>
							<li class="list">
								<a class="list__item go" href="#reviews">Отзывы
									<img class="line-wave" src="<?php bloginfo('template_directory'); ?>/img/hover_line.png" alt="">
								</a>
							</li>
							<li class="list">
								<a class="list__item go" href="#contacts">Контакты
									<img class="line-wave" src="<?php bloginfo('template_directory'); ?>/img/hover_line.png" alt="">
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-2 d-none d-xl-block ">
					<a class="phone d-flex" href="tel:<?php the_field ('номер_телефона'); ?>">
						<img class="phone__img" src="<?php bloginfo('template_directory'); ?>/img/phone.png" alt="">
						<span class="phone__numb">
							<?php the_field ('телефон'); ?>
						</span>
					</a>
				</div>
				<div class="col-9 col-lg-3 col-xl-2 flex-column d-flex justify-content-lg-end align-items-end d-lg-block">
					<a href="#" class="call__but d-flex">
						Заказать звонок
					</a>
					<button class="menu-display d-block d-lg-none">
						<span class="line line_one"></span>
						<span class="line line_two"></span>
						<span class="line line_three"></span>
					</button>
				</div>
				<div class="col-12 d-flex flex-column">
					<h1 class="header__title">
						<?php the_field ('главный-заголовок'); ?>
					</h1>
					<p class="header__text">
						<?php the_field ('текст_под_заголовком'); ?>
					</p>
					<a href="#" class="discounts d-flex">
						<?php the_field ('текст_кнопки'); ?>
					</a>
				</div>
			</div>
		</div>
	</header>
	<section class="services" id="services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="services__title">
						<?php the_field ('заголовок_блока'); ?>
					</h2>
				</div>
				<div class="col-12">
                    <div class="price-opened price-opened_1 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Восстановительная полировка кузова 
                    				с матованием (4этапа)
                    			</p>
                    			<b>- от 500 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Нано покрытие кузова</p>
                    			<b>- от 70 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Нано покрытие лобового стекла</p>
                    			<b>- от 35 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Эпоксидная защита кузова</p>
                    			<b>- от 50 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Полировка фар</p>
                    			<b>- от 35 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Защитное покрытие кузова (тефлон)</p>
                    			<b>- от 35 р.</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_2 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник 
                    			</p>
                    			<b>- от 21 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_3 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>- от 15 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_4 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 11 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 20 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>- от 28 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_5 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 16 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 25 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>- от 32 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_6 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 30 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 38 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 44 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_7 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 38 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 44 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_8 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 43 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_9 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 17 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 19 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_10 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 21 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_11 d-none ">
                        <ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 2 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 2 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 2 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>- от 3 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_12 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 2.50 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 2.50 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 2.50 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_13 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 5 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 6 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 8 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_14 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 12 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 13 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_15 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 8 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 10 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 12 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_16 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 3 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 4 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 4 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_17 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 8 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 10 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_18 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 5 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 5 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 5 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_19 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 7 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 8 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 10 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>- от 18 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_20 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Джип, Минивен, Крассовер,Парткетник
                    			</p>
                    			<b>- от 4 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Mini</p>
                    			<b>- от 5 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Микроавтобус Maxi</p>
                    			<b>- от 5 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Грузовой</p>
                    			<b>~</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Автобус</p>
                    			<b>~</b>
                    		</li>
                    	</ul>
</div>
                    <div class="price-opened price-opened_21 d-none ">
                    	<ul class="price-opened__list">
                    		<li class="price-opened__item d-flex">
                    			<p>
                    				Восстановительная полировка кузова 
                    				с матованием (4этапа)
                    			</p>
                    			<b>- от 500 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Нано покрытие кузова</p>
                    			<b>- от 70 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Нано покрытие лобового стекла</p>
                    			<b>- от 35 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Эпоксидная защита кузова</p>
                    			<b>- от 50 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Полировка фар</p>
                    			<b>- от 35 р.</b>
                    		</li>
                    		<li class="price-opened__item d-flex">
                    			<p>Защитное покрытие кузова (тефлон)</p>
                    			<b>- от 35 р.</b>
                    		</li>
                    	</ul>
</div>
					<?php 
						echo do_shortcode('[slide-anything id="58"]');
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="about__title">
						<?php the_field ('заголовок_3го_блока'); ?>
					</h2>
				</div>
				<div class="col-12">
					<div class="about__box">
						<img class="white__bg" src="<?php bloginfo('template_directory'); ?>/img/third-section_wave.png" alt="">
						<img class="about__photo" src="<?php bloginfo('template_directory'); ?>/img/third-section_photo.jpg" alt="">
						<div class="about__wrep">
							<div class="save d-flex">
								<img class="save__img" src="<?php bloginfo('template_directory'); ?>/img/hight.png" alt="">
								<div class="save__text">	
									<?php the_field ('первая_причина'); ?>
								</div>
							</div>
							<div class="price d-flex">
								<img class="price__img" src="<?php bloginfo('template_directory'); ?>/img/price.png" alt="">
								<div class="price__text">
									<?php the_field ('вторая_причина'); ?>
								</div>
							</div>
							<div class="suite d-flex">
								<img class="suite__img" src="<?php bloginfo('template_directory'); ?>/img/suite.png" alt="">
								<div class="suite__text">
									<?php the_field ('третья_причина'); ?>
								</div>
							</div>
							<div class="sofa d-flex">
								<img class="sofa__img" src="<?php bloginfo('template_directory'); ?>/img/sofa.png" alt="">
								<div class="sofa__text">
									<?php the_field ('четвертая_причина'); ?>
								</div>
							</div>
							<div class="tea d-flex">
								<img class="tea__img" src="<?php bloginfo('template_directory'); ?>/img/tea.png" alt="">
								<div class="tea__text">
									<?php the_field ('пятая_причина'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="action" id="action">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="action__title">
						<?php the_field ('заголовок_4го_блока'); ?>
					</h2>
				</div>	
				<div class="col-12">
					<?php 
						echo do_shortcode('[slide-anything id="81"]');
					?>
				</div>	
			</div>
		</div>
	</section>
	<section class="galery" id="galery">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="galery__title">
						<?php the_field ('заголовок_5го_блока'); ?>
					</h2>
				</div>
				<div class="col-12">
					<?php 
						echo do_shortcode('[smartslider3 slider=2]');
					?>
				</div>				
			</div>
		</div>
	</section>
	<section class="reviews" id="reviews">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="reviews__title">
						<?php the_field ('заголовок_блока_отзывов'); ?>
					</h2>
				</div>
				<div class="col-12">
					<?php 
						echo do_shortcode('[slide-anything id="100"]');
					?>
				</div>
				<div class="col-12">
					<a href="#" class="write__reviews">
						<span class="write__drop"><?php the_field ('текст_ссылки'); ?></span> 
						<span class="write__arrow">&#8594;</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="contacts" id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="contacts__title">
						<?php the_field ('заголовок_блока_контактов'); ?>
					</h2>
				</div>
				<div class="col-12">
					<div class="contacts__wrep">
						<img class="contacts__wrep_img" src="<?php bloginfo('template_directory'); ?>/img/third-section_wave.png" alt="">
						<a href="https://api.whatsapp.com/send?phone=375336677881" class="contact__block whats__up d-flex" title="WhatsApp" target="_blanc" >
							<img class="whats__up_img" src="<?php bloginfo('template_directory'); ?>/img/Whatsapp-icon.png" alt="">
							<div class="whats__up_number">
								<?php the_field ('номер_whatsapp'); ?>
							</div>
						</a>
						<a href="tg://resolve?domain=+375336677881" class="contact__block telegram d-flex">
							<img class="telegram__img" src="<?php bloginfo('template_directory'); ?>/img/telegram-icon.png" alt="">
                            <div class="telegram__number">
								<?php the_field ('номер_telegram'); ?>
							</div>
						</a>
						<a href="viber://add?number=375336677881" class="contact__block viber d-flex">
							<img class="viber__img" src="<?php bloginfo('template_directory'); ?>/img/viber.png" alt="">
                            <div class="viber__number">
								<?php the_field ('номер_viber'); ?>
							</div>
						</a>
						<a href="skype:<?php the_field ('логин_skype'); ?>?chat" class="contact__block skype d-flex">
							<img class="skype__img" src="<?php bloginfo('template_directory'); ?>/img/skype.png" alt="">
                            <div class="skype__number">
								<?php the_field ('логин_skype'); ?>
							</div>
						</a>
						<a href="tel:<?php the_field ('номер_телефона'); ?>" class="contact__block phone_b d-flex">
							<img class="phone__b_img" src="<?php bloginfo('template_directory'); ?>/img/phone-icon.png" alt="">
                            <div class="phone__b_number">
								<?php the_field ('номер_мобильный'); ?>
							</div>
						</a>
						<a href="mailto:<?php the_field ('почта'); ?>" class="contact__block mail d-flex">
							<img class="mail__img" src="<?php bloginfo('template_directory'); ?>/img/mail-icon.png" alt="">
                            <div class="mail__number">
								<?php the_field ('почта'); ?>
							</div>
						</a>
						<a href="#map" class="contact__block map__icon d-flex go">
							<img class="map__icon_img" src="<?php bloginfo('template_directory'); ?>/img/map-icon.png" alt="">
							<div class="map__icon_number">
								<?php the_field ('адресс'); ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="map" id="map">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2 class="map__title">
						Вы можете найти нас на карте
					</h2>
				</div>
				<div class="col-12">
					<iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3Afcf3dce612c52e259964bacd1eb020e27918b22bb65f32ac3937e702af243df4&amp;source=constructor" width="100%" height="570" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</footer>
	<!-- MOdall Windows -->
		<!-- Получит скидку -->
		<div style="display: none;">
			<div class="box-modal" id="exampleModal">
				<div class="box-modal_close arcticmodal-close">Х</div>
		   	 	<form action="" class="popup__form">				
					<?php 
						echo do_shortcode('[contact-form-7 id="109" title="Форма для получения скидки"]');
					?>
				</form>
			</div>
		</div>
		
		<!--Оставить свой отзыв -->
		<div style="display: none;">
			<div class="box-modal" id="reviewsModal">
				<div class="box-modal_close arcticmodal-close">Х</div>
		   	 	<form action="" class="popup__form">				
					<?php 
						echo do_shortcode('[contact-form-7 id="110" title="Форма отзыва"]');
					?>
				</form>
			</div>
		</div>
		<!-- Заказь звонок -->
		<div style="display: none;">
			<div class="box-modal" id="callModal">
				<div class="box-modal_close arcticmodal-close">Х</div>
		   	 	<form action="" class="popup__form">				
					<?php 
						echo do_shortcode('[contact-form-7 id="108" title="Без названия"]');
					?>
				</form>
			</div>
		</div>

		<!-- Откуда вы -->
		<div style="display: none;">
			<div class="box-modal" id="ScrollModal">
				<div class="box-modal_close arcticmodal-close">Х</div>
		   	 	<form action="" class="popup__form">			
					<?php 
						echo do_shortcode('[contact-form-7 id="111" title="Форма Откуда вы о нас узнали"]');
					?>
				</form>
			</div>
		</div>
	<!-- MOdall Windows end -->
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.arcticmodal-0.3.min.js"></script>
</body>
</html>
<?php
get_footer(); 
