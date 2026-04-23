<?php
// Entry point — rakitan semua partial
$pageTitle    = "Robotik Modern — Teknologi yang Membentuk Masa Depan";
$pageDesc     = "Pelajari robotik secara komprehensif: definisi, sejarah, penerapan, kelebihan, kekurangan, dampak sosial, dan masa depan teknologi robot.";
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport"    content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>" />
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>" />
  <meta property="og:type"        content="website" />
  <title><?= htmlspecialchars($pageTitle) ?></title>

  <!-- Fonts -->
  <link rel="preconnect" href="[fonts.googleapis.com](https://fonts.googleapis.com)" />
  <link rel="preconnect" href="[fonts.gstatic.com](https://fonts.gstatic.com)" crossorigin />
  <link href="[fonts.googleapis.com](https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap)" rel="stylesheet" />

  <!-- Tailwind + Custom CSS -->
  <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="antialiased">

<?php include 'partials/header.php'; ?>
<main>
  <?php include 'partials/hero.php'; ?>
  <?php include 'partials/section-apa-itu.php'; ?>
  <?php include 'partials/section-penerapan.php'; ?>
  <?php include 'partials/section-kelebihan.php'; ?>
  <?php include 'partials/section-kekurangan.php'; ?>
  <?php include 'partials/section-dampak.php'; ?>
  <?php include 'partials/section-masa-depan.php'; ?>
  <?php include 'partials/section-cta.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>

<script src="assets/js/main.js" defer></script>
</body>
</html>
