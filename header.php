<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="TJAP DAOEN — Coffee from Ijen. Digital Coffee Experience untuk mengenal varian kopi, cerita brand, dan melakukan pemesanan.">
<title><?= isset($page_title) ? htmlspecialchars($page_title) . ' — ' : '' ?>TJAP DAOEN</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css?v=20261019e">
</head>
<body>
<div class="announcement"><span>LOCAL COFFEE · IJEN</span><a href="./produk.php">Explore coffee →</a></div>
<header class="site-header" id="top">
  <a href="./" class="brand" aria-label="TJAP DAOEN Home">
    <span class="brand-mark"><img src="./assets/img/logo.jpg" alt="TJAP DAOEN"></span>
    <span class="brand-word"><b>TJAP DAOEN</b><small>COFFEE FROM IJEN</small></span>
  </a>
  <button class="menu-toggle" aria-label="Buka menu" aria-expanded="false"><span></span><span></span><span></span></button>
  <nav class="main-nav" id="mainNav">
    <a href="./">Home</a>
    <a href="./produk.php">Coffee Catalog</a>
    <a href="./informasi.php">Coffee Info</a>
    <a href="./discovery.php">Discovery</a>
    <a href="./tentang.php">Coffee Story</a>
    <a href="./kontak.php">Testimoni &amp; FAQ</a>
  </nav>
  <a class="nav-cta" href="./kontak.php">Order Coffee <span>↗</span></a>
</header>
<main>
