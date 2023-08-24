<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 30px;">
  <div class="container">
    <a class="navbar-brand" href="<?php print base_url(); ?>"><i>PERSONAL<span style="color: #0D6EFD;">.BLOG</span></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <!-- Home Page -->
        <a class="nav-link mx-3" aria-current="page" href="<?php print base_url(); ?>">Home</a>

        <!-- Login Blog -->
        <?php if(logged_in()) : ?>
            <?php if(in_groups('admin')) : ?>
              <a class="nav-link mx-3" href="<?php print base_url('admin'); ?>">Admin Dashboard</a>

            <?php else : ?>
              <a class="nav-link mx-3" href="<?php print base_url('user'); ?>">User Blog Dashboard</a>

            <?php endif; ?>
              <a class="btn btn-primary" href="<?php print base_url('logout'); ?>">Logout</a>

          <?php else : ?>
            <a class="btn btn-primary" href="<?php print base_url('login'); ?>">Login</a>

        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>