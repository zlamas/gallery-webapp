<?php

$book = $_GET['tgWebAppStartParam'] ?? $_GET['book'] ?? '';
$path = 'content/'.$book;

if (!preg_match('/\w+/', $book) || ($file = fopen($path.'.csv', 'r')) === false) {
  header('Location: /');
  exit;
}

$csv = [];
while (($data = fgetcsv($file, escape: '')) !== false) {
  $csv[] = $data;
}

fclose($file);

?>
<!doctype html>
<html lang="ru">
<title>Галерея Таро</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="css/main.css?v=3">
<script src="libs/jquery-3.7.1.min.js"></script>
<script src="libs/turn.min.js?v=1"></script>
<script src="js/main.js?v=2"></script>

<div class="padding"></div>
<div class="toolbar">
  <div id="arrows-left" class="arrow-group disabled">
    <img class="arrow flipped" id="arrow-first" src="img/arrow_end.svg" alt>
    <img class="arrow flipped" id="arrow-prev" src="img/arrow.svg" alt>
  </div>
  <form class="toolbar-page-selector" id="page-selector">
    <input class="toolbar-field toolbar-page-number" id="page-input" type="number" autocomplete="off" min="1">
    <div class="toolbar-current-pages toolbar-page-number" id="page-number">1</div>
    <div>из <span id="total-pages"></span></div>
  </form>
  <div id="arrows-right" class="arrow-group">
    <img class="arrow" id="arrow-next" src="img/arrow.svg" alt>
    <img class="arrow" id="arrow-last" src="img/arrow_end.svg" alt>
  </div>
</div>
<main class="content">
  <div class="flipbook-wrapper">
    <div id="book" class="flipbook">
<?php require $path.'.php' ?>
    </div>
  </div>
</main>
<?php if (array_key_exists('tgWebAppStartParam', $_GET)) { ?>
<script src="libs/telegram-web-app.min.js?v=1"></script>
<script>
Telegram.WebApp.ready();
Telegram.WebApp.requestFullscreen();
</script>
<?php } ?>
