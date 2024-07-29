<div>
  <div class="page-content page-flex">
    <picture class="flex-image cover-box">
      <img src="img/<?= $book ?>_box.jpg" alt>
    </picture>
    <h1 class="text-large"><i>Мистический Оракул Ленорман</i></h1>
  </div>
</div>
<div>
<?php require 'promo1.html' ?>
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
foreach ($csv as $index => $card) {
  [$name, $description, $keywords] = $card;
  $index++;
?>
<div>
  <div class="page-content page-flex">
    <img class="flex-image" src="img/<?= $book.'/'.$index ?>.jpg" alt>
    <p class="text-large p-center"><i><?= $index . '. ' . $name ?></i></p>
  </div>
</div>
<div>
  <div class="page-content">
    <h2><?= $name ?></h2>
    <p><?= $description ?></p>
    <p><b>Ключевые слова:</b> <?= $keywords ?></p>
  </div>
</div>
<?php } ?>
<div>
<?php require 'promo2.html' ?>
</div>
