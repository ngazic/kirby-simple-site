<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
  //Enable indexing by Search Engines
  if($page->indexBySE()->toBool()): ?>
  <meta name="robots" content="noindex">
  <?php endif ?>
  <?php echo '<meta name="description" content="'. $page->metaDescription().'" >' ?>
  <title><?= $page->metaTitle() ?></title>
  <?= css("assets/css/style.css") ?>
  <?= css("@auto") ?>
  <?= $site->facebookAdvertising() ?>
  <?= $site->googleAnalytics() ?>
</head>

<body>
  <div id="wrapper">
    <div id="hwrap">
      <header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <div id="headwrap">

          <div id="titlelogo">
            <a href="<?= $site->url() ?>">
              <div id="logo"><img src="<?=$site->image('bemo-logo2.png')->url() ?>" width="167" height="100"
                  alt="Site logo" /></div>
              <h1></h1>
            </a>
            <h2></h2>
          </div>
          <div id="mwrap">
            <div id="lt"></div>
            <div id="lm"></div>
            <div id="lb"></div>
          </div>
          <div id="nwrap">
            <div id="menuBtn"></div>
            <nav>
              <?php
                // main menu items
                $items = $pages->listed();

            // only show the menu if items are available
            if($items->isNotEmpty()):

            ?>

              <ul class="navigation">
                <?php foreach($items as $subpage): ?>
                <li<?php e($subpage->isActive(), ' id="current"') ?>>
                  <a href="<?= $subpage->url() ?>" rel="self" <?php e($subpage->isActive(), ' id="current"') ?>>
                    <?= html($subpage->title()) ?>
                  </a>
                  </li>
                  <?php endforeach ?>
              </ul>
              <?php endif ?>
            </nav>
          </div>
        </div>
      </header>
      <div class="banner video_banner">
        <div id="feature" class="bghide"><img id="featureImg"
            src="<?php if($page->heroImage()->isNotEmpty()){echo $page->heroImage()->toFile()->url(); } ?>">
          <div id="extraContainer11">
            <div class="videoWrapper">
            </div>
          </div>
          <div id="extraContainer1">
          </div>
          <div class="banner-text">
          </div>
          <?php if($page->headline()->isNotEmpty()) {
           echo '<div id="extraContainer9">
            <div id="myExtraContent9">'. $page->headline() .'</div>
          </div>';
          }
          ?>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div id="container">
      <div id="extraContainer7"></div>
      <div id="extraContainer8"></div>