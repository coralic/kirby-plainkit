<?php

/** @var Kirby\Cms\Page $page */ ?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta Knight -->
  <?php snippet('meta_information', ['page' => $page]) ?>
  <?php snippet('robots', ['page' => $page]) ?>
  <!-- Icons -->
  <link rel="icon" href="/favicon.svg" />
  <link rel="mask-icon" href="/favicon.svg" color="#000000" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  <meta name="theme-color" content="#000000">
  <!-- Vite -->
  <?= vite()->js() ?>
  <?= vite()->css() ?>

  <?php if (vite()->isDev()) : ?>
    <?= css('dist/dev/index.css?v=' . time(), ['id' => 'vite-dev-css']) ?>
  <?php endif ?>
</head>

<body>
  <div class="s-content -type-<?= $page->template() ?>">
    <?php slot() ?>
    <?php endslot() ?>
  </div>
  <script>
    console.log('%ccoralic/kirby-plainkit#<?= substr(file_get_contents($kirby->roots()->base() . '/.git/refs/heads/main'), 0, 7) ?>', 'font-size: 12px; font-weight: bold; color: #F9E7FF; background-color: #7D3BA8; padding: 10px 16px; margin: 20px 0; border-radius: 4px;')
    console.log('%cMade with ♥ in Germany by coralic', 'font-size: 12px; font-weight: bold; color: #0e1f28; background-color: #fff; padding: 10px 16px; margin: 20px 0; border-radius: 4px;')
  </script>
</body>

</html>