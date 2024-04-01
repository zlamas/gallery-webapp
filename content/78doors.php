<div>
	<div class="page-content page-flex">
		<picture class="flex-image cover-box">
			<source srcset="img/<?= $book ?>_box.webp" type="image/webp">
			<img src="img/<?= $book ?>_box.png" alt>
		</picture>
		<h1 class="text-large"><i>Таро 78 Дверей</i></h1>
 		<i class="text-small">русская версия</i>
	</div>
</div>
<div>
	<div class="page-content page-promo">
		<h2 class="promo-heading">Black Cat Tarot представляет</h2>
		<img class="full-width" src="/img/school_poster.jpg" alt>
		<ul class="list-checkmark">
			<li>Обучение таро по авторской программе</li>
			<li>Уникальная и интересная подача материала</li>
			<li>Возможность обучаться как вживую, так и офлайн</li>
		</ul>
		<div class="image-section">
			<div class="text-large">Подробности на сайте <i>https://blackcattarot.ru</i></div>
			<img class="img-stamp" src="/img/stamp.png" alt>
		</div>
		<div class="text-large">Учитесь с нами.<br>Учитесь легко и <b>БЫСТРО</b>!</div>
	</div>
</div>
<div>
	<div class="page-content">
		<h2>О колоде</h2>
		<p>Не проходит ни дня в нашей жизни, чтобы мы не пользовались дверями. Мы непрерывно входим и выходим, «проходим», через двери, и мы так привыкли к этой непременной детали нашего быта, что забыли о важнейшей символической роли дверей. Дверь — это вход. Во многих культурах понятие «открытие» связано с ритуалами, символизирующими изменение в психологическом и духовном значении — новый статус, новое мировоззрение, прозрение и, собственно, открытие, или в оккультной терминологии — «Посвящение».</p>
		<div class="tips">
			<h3>СОВЕТ!</h3>
			<p class="p-center"><i>Нажмите на книгу, чтобы увеличить её.<br>Если вы читаете с телефона, вы можете включить двухстраничный просмотр, повернув телефон набок.</i></p>
		</div>
	</div>
</div>
<?php
$i = 0;
foreach ($csv as $card) {
	[$roman, $name, $description] = $card;
?>
<div>
	<div class="page-content page-flex">
		<img class="flex-image" src="/projector/img/<?= $book.'/'.$i ?>.jpg" alt>
		<p class="text-large p-center"><i>
<?php if (strlen($roman)) echo $roman.' — '; echo $name ?>
		</i></p>
	</div>
</div>
<div>
	<div class="page-content">
		<h2>
<?php if (strlen($roman)) echo $roman.' — '; echo $name ?>
		</h2>
		<p><?= $description ?></p>
	</div>
</div>
<?php $i++; } ?>
<div>
	<div class="page-content page-promo">
		<h2 class="promo-heading">
			Подписывайтесь на наш официальный Телеграм-канал<br>
			<img class="img-logo" src="/img/telegram.svg" alt> Black Cat Tarot LIVE
		</h2>
		<ul class="list-checkmark">
			<li>Последние новости и регулярные уведомления</li>
			<li>Живое общение с единомышленниками</li>
			<li>Бесплатная Карта Дня — ЭКСКЛЮЗИВНО для подписчиков!</li>
		</ul>
		<p class="text-large p-center">Сканируйте QR-код:</p>
		<img class="img-qr-code" src="img/qr1.png" alt>
		<div>или переходите на наш сайт</div>
		<p class="text-large p-center"><i>https://blackcattarot.ru</i></p>
		<div class="text-large">Ждём вас!</div>
	</div>
</div>
