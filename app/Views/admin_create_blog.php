<?php print $this->extend('sb_templates/index'); ?>

<?php print $this->section('page-content'); ?> 

<div class="container">
<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Post title" required>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great post!"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>
</div>


<?php print $this->endSection(); ?>