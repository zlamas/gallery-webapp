<div>
	<div class="page-content page-flex">
		<picture class="flex-image cover-box">
			<img src="img/<?= $book ?>_box.jpg" alt>
		</picture>
		<h1 class="text-large"><i>Таро 78 Дверей</i></h1>
 		<i class="text-small">русская версия</i>
	</div>
</div>
<div>
<?php require 'promo1.html' ?>
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
foreach ($csv as $index => $card) {
	[$name, $description] = $card;
?>
<div>
	<div class="page-content page-flex">
		<img class="flex-image" src="/projector/img/<?= $book.'/'.$index ?>.jpg" alt>
		<p class="text-large p-center"><i><?= $name ?></i></p>
	</div>
</div>
<div>
	<div class="page-content">
		<h2><?= $name ?></h2>
		<p><?= $description ?></p>
	</div>
</div>
<?php } ?>
<div>
<?php require 'promo2.html' ?>
</div>
