<?php print $this->extend('blog_templates/page_blog_layout.php'); ?>
<?php print $this->section('content'); ?>

<h2 class="h2"><?php print $posts['title']; ?></h2>
<div class="mb-5">
    <span><?php print $posts['created_at']; ?></span>
</div>

<div><?php print $posts['content']; ?></div>

<?php print $this->endSection(); ?>