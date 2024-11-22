<?php

$book = $_GET['tgWebAppStartParam'] ?? $_GET['book'] ?? '';
$path = 'content/'.$book;

if (!preg_match('/\w+/', $book) || !file_exists($path.'.csv')) {
  header('Location: /');
  exit;
}

$csv = array_map('str_getcsv', file($path.'.csv'));

?>
<!doctype html>
<html lang="ru">
<title>Галерея Таро</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="css/main.css?v=1">
<script src="libs/jquery-3.7.1.min.js"></script>
<script src="libs/turn.min.js?v=1"></script>
<script src="js/main.js?v=1"></script>

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
<main class="flipbook-wrapper">
  <div id="book" class="flipbook">
<?php require $path.'.php' ?>
  </div>
</main>
