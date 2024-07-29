<div>
  <div class="page-content page-flex">
    <picture class="flex-image cover-box">
      <img src="img/<?= $book ?>_box.jpg" alt>
    </picture>
    <h1 class="text-large"><i>The Good Tarot</i></h1>
    <i>Благое Таро</i>
     <i class="text-small">русская версия</i>
  </div>
</div>
<div>
<?php require 'promo1.html' ?>
</div>
<div>
  <div class="page-content">
    <h2>О колоде</h2>
    <p>Эта колода говорит о доброте, о зарождении осознания нашей истинной сущности и их претворении в нашей жизни. Это Таро — о счастье, сострадании, любви, обретении веры и о том, что вне зависимости от переменчивых обстоятельств жить следует именно этими вещами. Оно поддерживает эволюцию души и способствует наиболее полному раскрытию потенциала, заложенного в материальной сфере нашей жизни. Оно взывает к радости и бесконечным возможностям и предлагает нам путешествие к божественному через хаос и беспорядок.</p>
    <div class="tips">
      <h3>СОВЕТ!</h3>
      <p class="p-center"><i>Нажмите на книгу, чтобы увеличить её.<br>Если вы читаете с телефона, вы можете включить двухстраничный просмотр, повернув телефон набок.</i></p>
    </div>
  </div>
</div>
<?php
foreach ($csv as $index => $card) {
  [$name, $keywords, $description] = $card;
?>
<div>
  <div class="page-content page-flex">
    <img class="flex-image" src="img/<?= $book.'/'.$index ?>.jpg" alt>
    <p class="text-large p-center"><i><?= $name ?></i></p>
  </div>
</div>
<div>
  <div class="page-content">
    <h2><?= $name ?></h2>
    <p><b>Ключевые слова:</b> <?= $keywords ?>.</p>
    <p><?= $description ?></p>
  </div>
</div>
<?php } ?>
<div>
<?php require 'promo2.html' ?>
</div>
