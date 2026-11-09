<?php $page_title='Home'; require 'includes/header.php'; require_once 'config/database.php';
$items=$pdo->query("SELECT * FROM produk ORDER BY id ASC LIMIT 4")->fetchAll();
$imgMap=['Arabica Original'=>'assets/img/arabica-original.jpg?v=20261013d','Arabica Blue Mountain'=>'assets/img/blue-mountain.jpg?v=20261013d','Arabica Wine'=>'assets/img/arabica-wine.jpg?v=20261013d','Robusta'=>'assets/img/robusta.jpg?v=20261013d']; $priceMap=['Arabica Original'=>85000,'Arabica Blue Mountain'=>100000,'Arabica Wine'=>125000,'Robusta'=>75000]; ?>
<section class="hero hero-home concept-hero">
  <div class="hero-media"></div><div class="hero-overlay"></div>
  <div class="hero-content reveal">
    <div class="eyebrow">LOCAL COFFEE · IJEN</div>
    <div class="hero-logo"><img src="assets/img/logo.jpg" alt="TJAP DAOEN"></div>
    <h1>Digital Coffee<br><em>Experience.</em></h1>
    <p>Kenali kopi TJAP DAOEN, eksplorasi varian, temukan karakter rasa, lalu pesan kopi yang paling cocok untukmu.</p>
    <div class="hero-actions"><a class="btn btn-gold" href="produk.php">EXPLORE COFFEE <span>↗</span></a><a class="text-link light" href="discovery.php">Find my coffee ↓</a></div>
  </div>
  <div class="hero-scroll">01 · SCROLL TO DISCOVER <span></span></div>
</section>

<section class="section campaign-intro reveal">
  <div class="section-tag">TJAP DAOEN · COFFEE FROM IJEN</div>
  <div class="intro-grid"><h2>From the land,<br><em>into your cup.</em></h2><div><p>Website ini menjadi media digital TJAP DAOEN untuk memperkuat branding dan memperkenalkan berbagai varian kopi melalui pengalaman yang informatif, visual, dan mudah digunakan.</p><a class="text-link" href="tentang.php">EXPLORE OUR STORY <span>↗</span></a></div></div>
</section>

<section class="concept-nav section reveal">
  <div class="section-head-row"><div><div class="section-tag">COFFEE JOURNEY</div><h2>Choose your <em>way in.</em></h2></div><span class="concept-index">01 — 06</span></div>
  <div class="journey-grid">
    <a href="produk.php" class="journey-card"><span>01</span><b>Coffee Catalog</b><small>Berbagai varian kopi</small><i>↗</i></a>
    <a href="informasi.php" class="journey-card"><span>02</span><b>Coffee Information</b><small>Karakter & jenis kopi</small><i>↗</i></a>
    <a href="tentang.php" class="journey-card"><span>03</span><b>Coffee Story</b><small>Brand & asal Ijen</small><i>↗</i></a>
    <a href="discovery.php" class="journey-card"><span>04</span><b>Coffee Discovery</b><small>Eksplorasi varian + quiz</small><i>↗</i></a>
    <a href="tentang.php#cafe" class="journey-card"><span>05</span><b>About TJAP DAOEN</b><small>Mitra & café</small><i>↗</i></a>
    <a href="kontak.php" class="journey-card featured"><span>06</span><b>Contact / Order</b><small>Hubungi & pesan kopi</small><i>↗</i></a>
  </div>
</section>

<section class="feature-photo reveal"><img src="assets/img/hero.jpg?v=20261013d" alt="Kopi TJAP DAOEN"><div class="feature-caption"><span>01</span><div><small>OUR COFFEE</small><h3>From the land,<br><em>into your cup.</em></h3></div></div></section>

<section class="section range-section reveal" id="catalog">
  <div class="section-head-row"><div><div class="section-tag">01 / COFFEE CATALOG</div><h2>Meet the <em>varieties.</em></h2><p class="section-sub">Arabica dan Robusta dengan karakter yang berbeda untuk pengalaman rasa yang berbeda.</p></div><a class="btn btn-dark" href="produk.php">VIEW CATALOG <span>↗</span></a></div>
  <div class="coffee-track">
  <?php foreach($items as $i=>$p): $img=$imgMap[$p['nama']]??'assets/img/arabica-original.jpg?v=20261013d'; $price=$priceMap[$p['nama']]??(float)$p['harga']; ?>
    <article class="coffee-card reveal"><a href="detail.php?id=<?=$p['id']?>"><div class="coffee-image"><img src="<?=$img?>" alt="<?=htmlspecialchars($p['nama'])?>"><span class="card-arrow">↗</span></div><div class="coffee-meta"><div><small><?=htmlspecialchars($p['kategori'])?></small><h3><?=htmlspecialchars($p['nama'])?></h3></div><strong>Rp<?=number_format($price,0,',','.')?></strong></div><p><?=htmlspecialchars($p['deskripsi'])?></p></a></article>
  <?php endforeach; ?>
  </div>
</section>

<section class="info-strip reveal">
  <div><span>ARABICA</span><b>Fruity · Aromatic · Smooth</b></div><div><span>ROBUSTA</span><b>Bold · Bitter · Strong</b></div><a href="informasi.php">LEARN COFFEE BASICS ↗</a>
</section>

<section class="quiz-promo section reveal">
 <div class="quiz-image"><img src="assets/img/blue-mountain.jpg?v=20261013d" alt="Coffee Discovery"></div>
 <div class="quiz-copy"><div class="section-tag">04 / COFFEE DISCOVERY</div><h2>Not sure which coffee<br><em>is for you?</em></h2><p>Jawab beberapa pertanyaan sederhana tentang rasa yang kamu suka. Kami bantu menemukan varian TJAP DAOEN yang paling mendekati seleramu.</p><a class="btn btn-dark" href="discovery.php">TAKE COFFEE QUIZ <span>↗</span></a></div>
</section>

<section class="story-section" id="story">
 <div class="story-image reveal"><img src="assets/img/all-coffee.jpg?v=20261013d" alt="Varian kopi TJAP DAOEN"></div>
 <div class="story-copy reveal"><div class="section-tag">03 / COFFEE STORY</div><h2>A cup that carries<br><em>the place it came from.</em></h2><p>TJAP DAOEN berangkat dari kopi Ijen dan pengalaman di café di Tamansari, Bondowoso. Cerita, karakter rasa, dan asal kopi menjadi bagian dari pengalaman brand.</p><a class="btn btn-gold" href="tentang.php">READ OUR STORY <span>↗</span></a></div>
</section>

<section class="virtual-preview section reveal" id="virtual-cafe">
 <div class="center-head"><div class="section-tag">DIGITAL COFFEE EXPERIENCE</div><h2>Step into the <em>virtual café.</em></h2><p>Eksplorasi produk dan informasi café dalam satu ruang digital yang terasa dekat dengan suasana TJAP DAOEN.</p></div>
 <div class="virtual-grid"><a href="produk.php" class="virtual-card large"><img src="assets/img/products.jpg?v=20261013d" alt="Coffee catalog"><div><span>01</span><h3>Browse the coffee bar</h3><p>Pilih varian, lihat karakter, dan buka detail produk.</p></div></a><a href="informasi.php" class="virtual-card"><img src="assets/img/robusta.jpg?v=20261013d" alt="Coffee information"><div><span>02</span><h3>Know your coffee</h3><p>Pelajari perbedaan Arabica dan Robusta.</p></div></a><a href="kontak.php" class="virtual-card"><img src="assets/img/wine.jpg?v=20261013d" alt="Order coffee"><div><span>03</span><h3>Order your cup</h3><p>Lanjutkan pesanan langsung melalui WhatsApp.</p></div></a></div>
</section>

<section class="social-section section reveal" id="contact">
  <div class="social-intro"><div class="section-tag">STAY CONNECTED</div><h2>Keep the coffee<br><em>conversation going.</em></h2><p>Hubungi dan ikuti TJAP DAOEN untuk pemesanan, informasi produk, dan cerita terbaru dari coffee experience kami.</p></div>
  <div class="social-grid"><a class="social-card whatsapp-card" href="https://wa.me/6281234833336" target="_blank" rel="noopener"><div><small>WHATSAPP</small><h3>+62 812-3483-3336</h3><p>Chat langsung untuk pemesanan.</p></div><span>CHAT ↗</span></a><a class="social-card instagram-card" href="https://www.instagram.com/tjap_daoen" target="_blank" rel="noopener"><div><small>INSTAGRAM</small><h3>@tjap_daoen</h3><p>Aktivitas, produk, dan cerita visual TJAP DAOEN.</p></div><span>FOLLOW ↗</span></a><a class="social-card tiktok-card" href="https://www.tiktok.com/@tjap.daoen" target="_blank" rel="noopener"><div><small>TIKTOK</small><h3>@tjap.daoen</h3><p>Video, suasana café, dan cerita TJAP DAOEN.</p></div><span>WATCH ↗</span></a></div>
</section>

<section class="quote-banner reveal"><div><div class="section-tag">TJAP DAOEN · COFFEE FROM IJEN</div><h2>Rasa yang berbeda,<br><em>dari tanah yang sama.</em></h2><a class="btn btn-gold" href="kontak.php">CONTACT / ORDER <span>↗</span></a></div></section>
<?php require 'includes/footer.php'; ?>
