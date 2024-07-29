<div>
  <div class="page-content page-flex">
    <picture class="flex-image cover-box">
      <img src="img/<?= $book ?>_box.jpg" alt>
    </picture>
    <h1 class="text-large"><i>The Wonderland&nbsp;Tarot</i></h1>
    <i>Таро Страны Чудес</i>
    <i class="text-small">авторский перевод с английского Вадима Зламасова (Black Cat Tarot)</i>
  </div>
</div>
<div>
<?php require 'promo1.html' ?>
</div>
<div>
  <div class="page-content">
    <h2>О колоде</h2>
    <p>Таро Страны Чудес создано по мотивам всемирно известных сказок Льюиса Кэрролла — «Алиса в Стране чудес» и «Алиса в Зазеркалье». Многие поколения детей выросли с любовью к этим увлекательным и занимательным историям, в то время как учёные и знающие люди смеются над ними, разглядывая исторических личностей, стоящих за сатирическими персонажами.</p>
    <p>Эта колода представляет большинство основных персонажей из книг об Алисе на картах старших Арканов. Старшие Арканы указывают на общий сюжет, в то время как младшие Арканы связывают детали истории.</p>
    <div class="tips">
      <h3>СОВЕТ!</h3>
      <p class="p-center"><i>Нажмите на книгу, чтобы увеличить её.<br>Если вы читаете с телефона, вы можете включить двухстраничный просмотр, повернув телефон набок.</i></p>
    </div>
  </div>
</div>
<?php
foreach ($csv as $index => $card) {
  [$roman, $name_en, $name_ru, $description, $meaning] = $card;
?>
<div>
  <div class="page-content page-flex">
    <img class="flex-image" src="/projector/img/<?= $book.'/'.$index ?>.jpg" alt>
    <p class="text-large p-center"><i>
<?php if (strlen($roman)) echo $roman.' — '; echo $name_en ?>
    </i></p>
    <i>
<?php if (strlen($roman)) echo 'Старший Аркан '; echo $name_ru ?>
    </i>
  </div>
</div>
<div>
  <div class="page-content">
    <h2>
<?php if (strlen($roman)) echo $roman.' — '; echo $name_ru ?>
    </h2>
<?php if (strlen($description)) echo "<p>$description</p>" ?>
    <p><b>Значения:</b> <?= $meaning ?></p>
  </div>
</div>
<?php } ?>
<div>
<?php require 'promo2.html' ?>
</div>
