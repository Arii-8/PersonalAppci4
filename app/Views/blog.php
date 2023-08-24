<?php print $this->extend('blog_templates/page_blog_layout.php'); ?>
<?php print $this->section('content'); ?>

    <h1 class="h1">Personal Blog</h1>
    <hr/>

    <div class="container">
        <?php foreach($posts as $post) : ?>
            <div class="row">
                <div class="col-md-12 mb-2 card">
                    <div class="card-body">
                        <h5 class="h5"><a href="/blog/<?php print $post['slug']; ?>"><?php print $post['title']; ?></a></h5>
                        <p style="margin-left: 0;"><?php print substr($post['content'], 0, 120); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

<?php print $this->endSection(); ?>