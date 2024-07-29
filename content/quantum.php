<div>
  <div class="page-content page-flex">
    <picture class="flex-image cover-box">
      <img src="img/<?= $book ?>_box.jpg" alt>
    </picture>
    <h1 class="text-large"><i>Квантовое Таро,</i></h1>
    <i>версия 2.0</i>
    <i class="text-small">русская версия</i>
  </div>
</div>
<div>
<?php require 'promo1.html' ?>
</div>
<div>
  <div class="page-content">
    <h2>О колоде</h2>
    <p>В Квантовом Таро современная наука встречается с древней духовной системой карт Таро. Изображения для этих карт взяты из двух кардинально различающихся миров — огромных просторов космоса и невообразимо малого мира атомов и элементарных частиц. Эти крайности охвачены двумя революционными идеями 20-го века: квантовой механикой и теорией относительности Эйнштейна. Старшие Арканы фокусируются на этих двух теориях, а Младшие Арканы отражают проявления, которые они описывают; странные миры нейтронных и сверхновых звезд, черных дыр, нейтрино и антиматерии. Фигурные карты по-новому, через линзы науки, рассматривают знакомые мистические архетипы ночного неба — планеты и созвездия.</p>
    <div class="tips">
      <h3>СОВЕТ!</h3>
      <p class="p-center"><i>Нажмите на книгу, чтобы увеличить её.<br>Если вы читаете с телефона, вы можете включить двухстраничный просмотр, повернув телефон набок.</i></p>
    </div>
  </div>
</div>
<?php
foreach ($csv as $index => $card) {
  [$name, $name_extra, $description] = $card;
  $description_parts = explode('^', $description);
  $description = array_shift($description_parts);
?>
<div>
  <div class="page-content page-flex">
    <img class="flex-image" src="/projector/img/<?= $book.'/'.$index ?>.jpg" alt>
    <p class="text-large p-center"><i><?= $name ?></i></p>
    <i><?= $name_extra ?></i>
  </div>
</div>
<div>
  <div class="page-content">
    <h2><?= $name ?></h2>
    <p><?= $description ?></p>
  </div>
</div>
<?php foreach ($description_parts as $part) { ?>
<div>
  <div class="page-content">
    <p><?= $part ?></p>
  </div>
</div>
<?php
  }
}
?>
<div>
<?php require 'promo2.html' ?>
</div>
