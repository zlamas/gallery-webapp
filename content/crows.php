<div>
  <div class="page-content page-flex">
    <picture class="flex-image cover-box">
      <img src="img/<?= $book ?>_box.jpg" alt>
    </picture>
    <h1 class="text-large"><i>Таро Ворон&nbsp;Смерти</i></h1>
     <i class="text-small">русская версия</i>
  </div>
</div>
<div>
<?php require 'promo1.html' ?>
</div>
<div>
  <div class="page-content">
    <h2>О колоде</h2>
    <p>Вы просыпаетесь на странном берегу. Перед вами земля морока и интриг. Местами это коварная безжизненная пустошь. Но если ваш взгляд проникнет сквозь туман, вы увидите пейзаж мечты, наполненный чудесами. В этом путешествии ваши постоянные спутники — вороны смерти. Хитрые, с большими черными крыльями — это необычные существа, посланцы иного мира.</p>
    <p>Они служат невидимым силам. Через карканье они передают великую мудрость. Если вы последуете туда, куда они ведут, то такое приключение преобразит вас внутри и снаружи.</p>
    <p>Эта колода — врата в мир глубин и расстояний, непознанный и пленительный, отличающийся от нашего обыденного опыта.</p>
    <div class="tips">
      <h3>СОВЕТ!</h3>
      <p class="p-center"><i>Нажмите на книгу, чтобы увеличить её.<br>Если вы читаете с телефона, вы можете включить двухстраничный просмотр, повернув телефон набок.</i></p>
    </div>
  </div>
</div>
<?php
foreach ($csv as $index => $card) {
  [$name, $description, $keywords] = $card;
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
    <p><?= $description ?></p>
    <p><b>Ключевые слова:</b> <?= $keywords ?></p>
  </div>
</div>
<?php } ?>
<div>
<?php require 'promo2.html' ?>
</div>
