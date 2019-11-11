<?php

  $html = '';
  $html .= Html::tag('h1', $page->title());

?>

<?php snippet('app', ['html' => $html]) ?>
