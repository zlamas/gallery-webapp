<div>
	<div class="page-content page-flex">
		<picture class="flex-image cover-box">
			<source srcset="img/<?= $book ?>_box.webp" type="image/webp">
			<img src="img/<?= $book ?>_box.png" alt>
		</picture>
		<h1 class="text-large"><i>Мистический Оракул Ленорман</i></h1>
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
		<p>Перед вами — новый удивительный оракул Ленорман от автора Веры Петрук. Автор использовала новые принципы художественного исполнения колоды: готический мистицизм, яркие цвета, нестандартное изображение уже знакомых образов.</p>
		<p>Эта уникальная колода — инструмент для развития вашего собственного чувства силы и самопознания, обретения ясности и внутренней мудрости. Карты Ленорман очень похожи на Таро, но отличаются по назначению и структуре.</p>
		<div class="tips">
			<h3>СОВЕТ!</h3>
			<p class="p-center"><i>Нажмите на книгу, чтобы увеличить её.<br>Если вы читаете с телефона, вы можете включить двухстраничный просмотр, повернув телефон набок.</i></p>
		</div>
	</div>
</div>
<?php
$i = 1;
foreach ($csv as $card) {
	[$name, $description, $keywords] = $card;
?>
<div>
	<div class="page-content page-flex">
		<img class="flex-image" src="img/<?= $book.'/'.$i ?>.webp" alt>
		<p class="text-large p-center"><i><?= $i . '. ' . $name ?></i></p>
	</div>
</div>
<div>
	<div class="page-content">
		<h2><?= $name ?></h2>
		<p><?= $description ?></p>
		<p><b>Ключевые слова:</b> <?= $keywords ?></p>
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
