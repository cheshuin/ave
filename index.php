<?php require_once ("sett/sett.php");?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=edge" />	
<meta name="viewport" content="width=device-width, initial-scale=1">	

<title>Главная</title>


<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/ipad.css" />
<link rel="stylesheet" type="text/css" href="css/mob.css" />
	
	
	<?php
	
$user_agent = $_SERVER["HTTP_USER_AGENT"];
 if (strpos($user_agent, "Trident") !== false) { 
	 
	 
?>
	
	 
	 <link rel="stylesheet" type="text/css" href="css/ie.css" />

		<?php }  else {?>

<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/ipad.css" />
<link rel="stylesheet" type="text/css" href="css/mob.css" />
	<?php }?>
	

<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/all.js"></script>	
	
	
</head>

<body>
	
	<div class="wrap">
		
		
		
		<div class="top">
				<div class="top__color">
					
			<div class="top__content">
			
		<div class="logo">
			<a href="/">
		<img src="i/logo.png" alt="ООО "АВЭДА СЕРВИС"" class="logo__img" >	
			</a>
				</div>
				
				
			<div class="slog">Ваш надёжный партнёр в сфере ВЭД</div>
			
			
		
			
			
    <nav id="menu">
		
		<a href="/" class="nav__top">О компании</a>
		<a href="#second__scrin" class="nav__top">Услуги и этапы</a>
		<a href="#exp" class="nav__top">Преимущества</a>
		<a href="#futer" class="nav__top">Контакты</a>
		
			
			
	</nav>
				
			<div class="contact">
				
			<email>
				
			<div class="email">
				<a href="mailto:info@avedaservice.ru">info@avedaservice.ru</a>
				</div>
			</email>
			
		<tel class="tell">	+7-495-018-29-30</tel>
			
			
			
		</div>	
			<div class="lend"><a href="eng.php" class="lend__linc"><img src="i/eng.png" alt=""></a></div>	
				
				
				
				
			<div class="hedlinebox">
			
				
				
			<div class="hedline__title">
			<h1>ТАМОЖЕННОЕ ОФОРМЛЕНИЕ И ДОСТАВКА ГРУЗОВ </h1>	
				
				
				
				
			</div>
				
				<div class="hedlinebox__text">
				Подготовим полный пакет документов для прохождения таможенного контроля из любых стран


				</div>
			
				<div class="hedlinebox__text">
				Быстро, вникая в детали, с вашим минимальным участием в процессе
					</div>
				
				
				
			</div>	
				
				<div class="hedlinebox__square"></div>	
				
			<div class="formabox">
				
			<div class="formabox__bg">	
				
				
				
					<div class="formabox__input">
						
						<div class="formabox__title">Оформим Ваш груз за 24 часа</div>
						
						<form action="mail.php" method="post" class="SignupForm1">
							
							
				<div class="input__box"> <div class="iconname"></div>
					<input name="fname" type="text" id="name" value="Ваше имя" class="finput" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					
							</div>
						
					
				<div class="input__box"><div class="iconemail"></div>
					<input name="ftell" type="text"  id="tell" value="Ваш телефон" class="finput" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
						</div>
						
					
					
				<div class="input__box"><div class="iconqwest"></div>
					<input name="fqwest" type="text"  value="Что везёте?" class="finput" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
						</div>
				
					
						<div class="formabox__boot">
				<a href="" class="fboot" >Пройти таможню</a>
					
						
					</div>
							
							<div class="error">
							
							
							</div>
							
							</form>		
							
						</div>	
					
					
					
				
						
				
				
				
				
				</div>	
				
				
				
				
				</div>	
				
				
				
				
		<div class="arrow">
				<div class="arrow__img">
		<a href="#second__scrin">	<img src="i/thin-arrowheads-pointing-down.png" alt=""></a>
			</div>
				
				</div>
		
		</div>
					
					
							
			</div>		
				</div>		
					
		
			
<a name="second__scrin" id="second__scrin"></a>
			<!--second-->
			<div class="second__scrin">
	<div class="second__scrin__title"><h2>Услуги и этапы работ</h2></div>
				
<div class="second__scrin__iconrow">
	
	
	
<div class="second__scrin__iconbox" id="1">
<div class="second__scrin__iconimg"> <img src="i/list.png" alt="Заказ товара">	</div>
<div class="second__scrin__iconlink">Заказ товара</div> 
</div>
	
		
	<div class="second__scrin__dotted"></div>
	
	<div class="second__scrin__iconbox" id="2">
<div class="second__scrin__iconimg "> <img src="i/support.png" alt="Получение консультации и  разрешительной документации" >	</div>
<div class="second__scrin__iconlink">Получение консультации и  разрешительной документации</div> 
</div>
	
		<div class="second__scrin__dotted"></div>	
	<div class="second__scrin__iconbox" id="3">
<div class="second__scrin__iconimg"> <img src="i/boat-from-front-view.png" alt="Отгрузка">	</div>
<div class="second__scrin__iconlink">Отгрузка</div> 
</div>
	
	<div class="second__scrin__dotted"></div>
	
	
		<div class="second__scrin__iconbox" id="4">
<div class="second__scrin__iconimg"> <img src="i/placeholder-filled-point.png" alt="Прибытие на таможню">	</div>
<div class="second__scrin__iconlink">Прибытие на таможню</div> 
</div>
	<div class="second__scrin__dotted"></div>
	
			<div class="second__scrin__iconbox" id="5">
<div class="second__scrin__iconimg"> <img src="i/box_etap.png" alt="Выпуск в свободное обращение">	</div>
<div class="second__scrin__iconlink">Выпуск в свободное обращение</div> 
</div>
	
	<div class="second__scrin__dotted"></div>
				<div class="second__scrin__iconbox" id="6">
<div class="second__scrin__iconimg"> <img src="i/add-button-inside-black-circle.png" alt="Сопутствующие услуги">	</div>
<div class="second__scrin__iconlink">Сопутствующие услуги</div> 
</div>
	
	
					</div>
				
				
		<div class="second__scrin__icontext">
		
			
<div class="second__scrin__icontext__colum">			
<div class="second__scrin__iconlist">	
Расчет таможенных платежей					
</div>
<div class="second__scrin__iconlist">	
Проверка и подбор кодов ТН ВЭД (включая анализ пояснений к ЕТН ВЭД ЕАЭС, проверка классификационных решений)
</div>
					
<div class="second__scrin__iconlist">	
Проверка и консультирование по подготовке качественного комплекта документов для успешного таможенного оформления
					
</div>
</div>		
			
			
<div class="second__scrin__icontext__colum">			
					
<div class="second__scrin__iconlist">	
Оформление сертификатов соответствия, деклараций о соответствии, нотификаций, эксконтов, актов ТПП					
</div>
					
<div class="second__scrin__iconlist">
Проверка и анализ документов отправителя до отгрузки товаров				
</div>
</div>					
					
					
					
				
				
				</div>	
				
				
				
		<div class="second__scrin__mob">
		<div class="second__scrin__mob__row">	
			<div class="second__scrin__iconbox" >
<div class="second__scrin__iconimg"> <img src="i/list.png" alt="">	</div>
<div class="second__scrin__iconlink">Заказ товара</div> 
</div>
	<div class="second__scrin__iconlist">	
Заявка на таможенное оформление					
</div>
</div>			
			
	<div class="second__scrin__mob__row">			
<div class="second__scrin__iconbox" >
<div class="second__scrin__iconimg">  <img src="i/support.png" alt="">	</div>
<div class="second__scrin__iconlink">Получение консультации и разрешительной документации</div> 
</div>		
			
<div class="second__scrin__iconlist">	
Расчет таможенных платежей					
</div>
<div class="second__scrin__iconlist">	
Проверка и подбор кодов ТН ВЭД (включая анализ пояснений к ЕТН ВЭД ЕАЭС, проверка классификационных решений)
</div>
					
<div class="second__scrin__iconlist">	
Проверка и консультирование по подготовке качественного комплекта документов для успешного таможенного оформления
					
</div>
<div class="second__scrin__iconlist">	
Оформление сертификатов соответствия, деклараций о соответствии, нотификаций, эксконтов, актов ТПП					
</div>
					
<div class="second__scrin__iconlist">
Проверка и анализ документов отправителя до отгрузки товаров				
</div>		
		
		
		
		
	</div>
			
			
		<div class="second__scrin__mob__row">		
			
<div class="second__scrin__iconbox" >
<div class="second__scrin__iconimg"> <img src="i/boat-from-front-view.png" alt="">	</div>
<div class="second__scrin__iconlink">Отгрузка</div> 
</div>		
			
	
<div class="second__scrin__iconlist">	
Контроль корректности документов при отгрузке товаров				
</div>
					
	
		</div>
			
			
<div class="second__scrin__mob__row">				
			
<div class="second__scrin__iconbox" >
<div class="second__scrin__iconimg"> <img src="i/placeholder-filled-point.png" alt="">	</div>
<div class="second__scrin__iconlink">Прибытие на таможню</div> 
</div>		
			
<div class="second__scrin__iconlist">	
Представительство на таможенных терминалах				
</div>
					
<div class="second__scrin__iconlist">	
Предоставление интересов участника ВЭД при осуществлении таможенного досмотра
</div>
					
<div class="second__scrin__iconlist">	
Организация выгрузки сборных грузов на таможенных терминалах, с их дальнейшей отгрузкой после выпуска товаров в свободное обращение
					
</div>	
	
	
	
	
</div>				
<div class="second__scrin__mob__row">			
<div class="second__scrin__iconbox" >
<div class="second__scrin__iconimg"> <img src="i/box_etap.png" alt="">	</div>
<div class="second__scrin__iconlink">Выпуск в свободное обращение</div> 
</div>		
			
<div class="second__scrin__iconlist">Оформление декларации на товары	
</div>
	
	
</div>			
<div class="second__scrin__mob__row">			
<div class="second__scrin__iconbox" >
<div class="second__scrin__iconimg"> <img src="i/add-button-inside-black-circle.png" alt="">	</div>
<div class="second__scrin__iconlink">Сопутствующие услуги</div> 
</div>		
<div class="second__scrin__iconlist">	
Консультирование, подготовка к подаче статистических форм (при купле-продаже товаров между резидентами ЕАЭС)					
</div>
<div class="second__scrin__iconlist">	
Получение в ФТС отчетов о расходовании денежных средств для предоставления в налоговые органы 
</div>
					
<div class="second__scrin__iconlist">	
Консультирование и подготовка комплекта документов по возврату таможенных платежей
					
</div>
<div class="second__scrin__iconlist">	
Консультирование и организация перехода на ЕЛС (Единый Лицевой Счет) 					
</div>	
	
			
	</div>		
	
			
			
			
			
			
			</div>
				
				
				
				
				
				
				
				
				<div class="transport__row">
				<div class="transport__row__title">Производим таможенное оформление грузов, доставляемых в Россию следующим транспортом :
</div>
					
					<div class="transport__row__grid">
				<div class="transport__row__box">
				<div class="transport__row__box__icon"> <img src="i/aircraft.png" alt="">	</div>	
				<div class="transport__row__box__text">Самолетом	</div>		
					</div>	
						
						<div class="transport__row__box">
				<div class="transport__row__box__icon">	<img src="i/80096-200.png" alt=""></div>	
				<div class="transport__row__box__text">Поездом	</div>		
					</div>	
						
							<div class="transport__row__box">
				<div class="transport__row__box__icon"><img src="i/trlogo.png" alt="">	</div>	
				<div class="transport__row__box__text">	Автотранспортом</div>		
					</div>	
						
							<div class="transport__row__box">
				<div class="transport__row__box__icon"><img src="i/ship.png" alt="">	</div>	
				<div class="transport__row__box__text"> Водным  транспортом	</div>		
					</div>	
						
						
					
				
				</div>
					
					
					
					
				</div>
							
				
				
				</div>
			
			
				
						
			
			
			<!--second end-->
		
		
		
			
			<!--maprow-->
	<a name="maprow" id="maprow"></a>
	
	<div class="maprow">
<div class="maprow__title"><h2>Таможни, с которыми мы работаем</h2></div>
		
		<div class="mapgrid">
		<div class="mapbox">
	<img src="i/map.jpg" alt="Таможни, с которыми мы работаем">
			</div>	
			
		
		<div class="maplist">
		<ul>
			<li class="maplist__row">Смоленская таможня</li>
			<li class="maplist__row">Московская таможня</li>
			<li class="maplist__row">Московская Областная таможня</li>
			<li class="maplist__row">Шереметьевская таможня</li>
			<li class="maplist__row">Домодедовская таможня</li>
			<li class="maplist__row">Пулковская таможня</li>
			<li class="maplist__row">Санкт-Петербургская таможня</li>
		
			</ul>
			</div>
			
			<div class="maplist">
				<ul>
			<li class="maplist__row">Балтийская таможня</li>
			<li class="maplist__row">Псковская таможня</li>
			<li class="maplist__row">Ростовская таможня</li>
			<li class="maplist__row">Калужская таможня</li>
			<li class="maplist__row">Владивостокская таможня</li>
			<li class="maplist__row">Находкинская таможня</li>
			</ul>
			</div>
			
		
		
		</div>
	
	
	
	
	</div>
	
		<a name="galleryrow" id="galleryrow"></a>
		<!--gallery-->	
		<div class="galleryrow">
		
			<div class="gallery__title"><h2>Мы имеем колоссальный опыт оформления
грузов в следующих отраслях
</h2></div>
			
<div class="gallery__grid">
<div class="gallery__grid__firstbox">
<img src="i/f1.jpg" alt="">
<div class="gallery__grid__firstbox__text">Отрасли металлургии</div>
</div>
	
<div class="gallery__grid__box">
 <div class="gallery__grid__boximg"><img src="i/f2.jpg" alt=""></div>
<div class="gallery__grid__text">Автомобильная отрасль </div>	
	</div>
<div class="gallery__grid__box"><img src="i/f3.jpg" alt="">
<div class="gallery__grid__text">Нефтегазовая отрасль</div>	
	</div>
<div class="gallery__grid__box"><img src="i/f4.jpg" alt="">
<div class="gallery__grid__text">Кораблестроительная сфера</div>	
	
	</div>			
<div class="gallery__grid__box"><img src="i/f5.jpg" alt="">
<div class="gallery__grid__text">Производственная сфера</div>	
	</div>
<div class="gallery__grid__box"><img src="i/f6.jpg" alt="">
<div class="gallery__grid__text">Химическая отрасль</div>	
	
	</div>
<div class="gallery__grid__box"><img src="i/f7.jpg" alt="">
<div class="gallery__grid__text">Бытовая электро-техническая отрасль </div>	
	
	</div>

		</div>
		</div>
		
		<!--//gallery-->	
		
		<a name="exp" id="exp"></a>
		<!--exp-->	
	<div class="exp">	
<div class="exp__row">
<div class="exp__title"> <h2>ИЗ ТОВАРОВ, КОТОРЫЕ МЫ ОФОРМИЛИ ЗА ГОДЫ СЛУЖБЫ, БЫЛИ ПОСТРОЕНЫ: </h2>	</div>
	
	<div class="expgrid">
		
	<div class="exp__box">
	<div class="exp__boxfoto"><img src="i/g1.jpg" alt=""></div>
	<div class="exp__boxnum">19</div>
	<div class="exp__boxtitle">Буровых установок</div>
	</div>
		<div class="exp__box">
	<div class="exp__boxfoto"><img src="i/g2.jpg" alt=""></div>
	<div class="exp__boxnum">14</div>
	<div class="exp__boxtitle">Речных портов (реконструкция)
</div>
	</div>
		
		<div class="exp__box">
	<div class="exp__boxfoto"><img src="i/g3.jpg" alt=""></div>
	<div class="exp__boxnum">4</div>
	<div class="exp__boxtitle">Завода по производству продуктов питания
</div>
	</div>
		
		
		<div class="exp__box">
	<div class="exp__boxfoto"><img src="i/g4.jpg" alt=""></div>
	<div class="exp__boxnum">2</div>
	<div class="exp__boxtitle">Завода по складированию и распределению товаров
</div>
	</div>
		
				
		<div class="exp__box">
	<div class="exp__boxfoto"><img src="i/g5.jpg" alt=""></div>
	<div class="exp__boxnum exp__boxnumred">1</div>
	<div class="exp__boxtitle">Крымский мост </div>
	</div>
		
		
	</div>
	
		
		</div>
			</div>
		
		
		<!--//exp-->	
	<a name="futer" id="futer"></a>
		<!--futer-->	
		
		<div class="futer">
			<div class="top__color">
				
		<div class="futer__row">
			
				
<div class="futer__title">Узнайте как оптимизировать затраты
на логистику и таможенное
оформление груза
</div>
	<div class="futer__square"></div>		
			
<div class="futer__forma">	
			
				<form action="mail.php" method="post" class="futer__formabox" id="SignupForm">
					
					
					
					<div class="futer__input__row__name">
					<div class="futer__input__row__icon"><div class="iconname"></div></div>
					<input type="text" class="futer__input__area" id="fname" name="fname" value="Ваше имя" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					
					</div>
					
					<div class="futer__input__row__tell">
					<div class="futer__input__row__icon"><div class="ficonemail"></div></div>
					<input type="text" class="futer__input__area" id="ftell" name="ftell" value="Ваш телефон" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					
					</div>
				
					
				
						<div class="futer__input__fullrow">
					<div class="futer__input__row__icon"><div class="ficonqwest"></div></div>
					<input type="text" class="futer__input__fullrow__area" name="fqwest" value="Что везёте?" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					
					</div>
					
							
				
					<div class="futer__formabox__boot">	
						<a href="" class="futboot" >Пройти таможню</a>
					
					</div>	
					
			<div class="error">	</div>
					
					
					
							</form>		
	
	
	
			
			
			
			</div>		
			
		
<div class="futer__contact">	
	<div class="futer__contact__title">	Контакты</div>
	
	
	<div class="futer__contact__tell__box">
	<div class="futer__contact__tell">	+7-495-018-29-30 </div>
	
</div>


			
		<div class="futer__contact__email">	
			<a href="mailto:info@avedaservice.ru">info@avedaservice.ru</a>


</div>		
		<div class="futer__contact__adress">	
			188699, Ленинградская область г. Всеволожск, ул.Межевая, дом 21 <br>
помещение 18, офис 1 


</div>
	
	
			</div>			
		
		
		
	
										<!--copy-->
		
		
		<div class="copy__ooo">ООО "АВЭДА СЕРВИС" 2018. Все права защищены</div>
			<div class="copy__author"><a href="http://brandaim.ru" target="_blank" >Разработка сайта  <span class="domencolor">brandaim.ru</span></a></div>

		
		
	    <!--//copy-->	

			
			</div>
			
			

			</div>	
		</div>
		
		<!--//futer-->
		

		
		
	
	</div>
	
	
	
	
	
	
	
</body>
</html>