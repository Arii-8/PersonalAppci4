<?php print $this->extend('sb_templates/index'); ?>

<?php print $this->section('page-content'); ?> 

<div class="container">
<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?php print $posts['id']; ?>" />
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" 
            placeholder="News title" value="<?php print $posts['title']; ?>" required>
    </div>
    <div class="form-group">
        <textarea name="content" 
            class="form-control" 
            cols="30" rows="10" 
            placeholder="Write a great news!"><?php print $posts['content']; ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>
</div>


<?php print $this->endSection(); ?>