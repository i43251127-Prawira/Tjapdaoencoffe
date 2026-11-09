<?php
session_start();
require_once '../config/database.php';

if (isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = ? LIMIT 1');
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        session_regenerate_id(true);
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['username'];
        header('Location: index.php');
        exit;
    }

    $error = 'Username atau password salah.';
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login — TJAP DAOEN</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
<style>
*{box-sizing:border-box}
html,body{margin:0;min-height:100%;font-family:'DM Sans',Arial,sans-serif;color:#171713}
.login-layout{min-height:100vh;display:grid;grid-template-columns:55% 45%;padding:13px;background:#1d1d1b}
.login-visual{position:relative;min-height:calc(100vh - 26px);overflow:hidden;background:#25251f}
.login-visual:before{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.08) 20%,rgba(0,0,0,.68) 100%),url('../assets/img/robusta.jpg') center 48%/cover no-repeat;transform:scale(1.01)}
.visual-copy{position:absolute;left:clamp(28px,5.5vw,76px);right:30px;bottom:clamp(36px,8vh,76px);color:#fff;z-index:1}
.visual-kicker{font-family:'Playfair Display',serif;font-size:14px;font-weight:600;margin-bottom:4px}
.visual-copy h2{font-family:'Playfair Display',serif;font-size:clamp(32px,4vw,48px);line-height:1.05;margin:0 0 10px;font-weight:700;max-width:470px}
.visual-copy p{font-family:'Playfair Display',serif;font-size:15px;line-height:1.35;font-weight:600;max-width:480px;margin:0}
.login-panel{background:#f0eddf;display:flex;justify-content:center;align-items:flex-start;padding:clamp(48px,13vh,100px) 30px 50px}
.login-content{width:min(100%,420px)}
.brand{display:flex;align-items:center;justify-content:center;gap:10px;margin-bottom:42px}
.brand-logo{width:32px;height:32px;object-fit:cover;border-radius:50%;background:#000}
.brand-name{font-family:'Playfair Display',serif;font-size:16px;font-weight:700;line-height:1.1}
.brand-tagline{font-size:7px;letter-spacing:.5px;color:#9b998f;margin-top:4px}
.kicker{font-size:8px;letter-spacing:1.1px;color:#a47c2d;font-weight:700;text-transform:uppercase;margin:0 0 5px 9px}
h1{font-family:'Playfair Display',serif;font-size:clamp(32px,4vw,42px);line-height:1.05;margin:0 0 5px;font-weight:700}
.intro{font-size:10px;line-height:1.45;color:#55544e;margin:0 0 17px;max-width:320px}
.form-field{margin:0 0 14px}
label{display:block;font-size:12px;color:#45443f;margin:0 0 6px 2px}
input{width:100%;height:35px;border:1px solid #d1cec5;border-radius:9px;background:#fbfaf6;padding:0 12px;font:13px 'DM Sans',sans-serif;outline:none;box-shadow:0 2px 2px rgba(0,0,0,.12)}
input:focus{border-color:#0b3028;box-shadow:0 0 0 2px rgba(8,44,34,.1)}
button{width:100%;height:35px;border:0;border-radius:999px;background:#082f28;color:#fff;font:700 9px 'DM Sans',sans-serif;letter-spacing:.5px;cursor:pointer;margin-top:12px;transition:background .2s}
button:hover{background:#145044}
.error{background:#f7dcd5;border:1px solid #e8b9ad;color:#842e20;padding:9px 11px;border-radius:7px;font-size:11px;margin:0 0 13px}
@media(max-width:760px){
 .login-layout{grid-template-columns:1fr;padding:0;background:#f0eddf}
 .login-visual{min-height:38vh}
 .visual-copy{bottom:22px;left:24px}
 .visual-copy h2{font-size:30px}
 .visual-copy p{font-size:12px}
 .login-panel{min-height:62vh;padding:34px 25px 45px}
 .brand{margin-bottom:27px}
}
@media(max-width:390px){.login-visual{min-height:34vh}.visual-copy h2{font-size:26px}}
</style>
</head>
<body>
<div class="login-layout">
  <section class="login-visual" aria-label="TJAP DAOEN Robusta coffee">
    <div class="visual-copy">
      <div class="visual-kicker">COFFE FROM IJEN</div>
      <h2>Every bean has a story.</h2>
      <p>Selamat datang di ruang pengelolaan TJAP DAOEN. Kelola produk dan informasi kopi dengan lebih mudah.</p>
    </div>
  </section>
  <main class="login-panel">
    <div class="login-content">
      <div class="brand">
        <img class="brand-logo" src="../assets/img/logo.jpg" alt="Logo TJAP DAOEN">
        <div><div class="brand-name">TJAP DAOEN</div><div class="brand-tagline">COFFE FROM IJEN</div></div>
      </div>
      <div class="kicker">ADMIN AREA</div>
      <h1>Admin Login</h1>
      <p class="intro">Kelola katalog kopi dari sini. Masuk untuk mengakses panel admin TJAP DAOEN.</p>
      <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
      <?php endif; ?>
      <form method="post" action="">
        <div class="form-field">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" autocomplete="username" required>
        </div>
        <div class="form-field">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required>
        </div>
        <button type="submit">LOGIN</button>
      </form>
    </div>
  </main>
</div>
</body>
</html>
