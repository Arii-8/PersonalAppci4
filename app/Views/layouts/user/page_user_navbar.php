<nav class="navbar navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?php print base_url(); ?>"><i>PERSONAL<span style="color: #0D6EFD;">.APP</span></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> Menu </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php print base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php print base_url('about'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php print base_url('contact'); ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('blog') ?>">Post</a>
          </li>

          <?php if(logged_in()) : ?>
            <?php if(in_groups('admin')) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php print base_url('admin'); ?>">Admin Dashboard</a>
              </li>

            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php print base_url('user'); ?>">User Dashboard</a>
              </li>
            <?php endif; ?>
            <hr>

            <li class="nav-item">
              <a class="btn btn-primary" href="<?php print base_url('logout'); ?>">Logout</a>
            </li>
          <?php else : ?>
            <hr>
            <li class="nav-item">
              <a class="btn btn-primary" href="<?php print base_url('login'); ?>">Login</a>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </div>
</nav>
