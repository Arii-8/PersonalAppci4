<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php print $title; ?></title>
    <link rel="stylesheet" href="<?php print base_url('css/bootstrap.min.css'); ?>">

    <!-- Style css -->
    <link rel="stylesheet" href="<?php print base_url('styles/layout_user.css'); ?>">
  </head>
  <body>
    <!-- Navbar -->
    <?php print $this->include('layouts/user/page_user_navbar.php'); ?>

    <!-- Render Content Section -->
    <?php print $this->renderSection('content'); ?>

    <!-- Footer (Manual) -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <h3 class="h3">Hunger Foolish</h3>
            <p class="paragraf1">
              Website ini memberikan nilai tambah bagi pengalaman pengguna. 
              <br>
              Terdapat tautan menuju halaman-halaman utama, kategori populer, 
              dan kontak kami. <br>Kami menyambut masukan dari pembaca dan menyediakan 
              tautan ke media sosial kami.
            </p>
        </div>
      </div>
    </footer>

    <footer class="footer1">
      <div class="container">
        <!-- <span class="text-muted">&copy; <?php // print date('Y'); ?> Your Website Name</span> -->
        <p>&copy; <?php print date('Y'); ?> Arizal Sabila Nurhikam</p>
      </div>
    </footer>

    <script src="<?php print base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php print base_url('js/bootstrap.min.js'); ?>"></script>
  </body>
</html>