<?php print $this->extend('sb_templates/index'); ?>

<?php print $this->section('page-content'); ?> 

<div class="container">
<div class="create mb-3">
    <a href="<?= base_url('admin/blog/new') ?>" class="btn btn-primary mr-3">New Post</a>
</div>

<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Title</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
    <?php $i = 1; ?>
<?php foreach($posts as $post): ?>
<tr>
    <!-- <td><?php // print $news['id']; ?></td> -->
    <td><?php print $i++; ?></td>
    <td>
        <strong><?php print $post['title']; ?></strong><br>
        <small class="text-muted"><?php print $post['created_at']; ?></small>
    </td>
    <td>
        <?php if($post['status'] === 'published'): ?>
        <small class="text-success"><?php print $post['status']; ?></small>
        <?php else: ?>
        <small class="text-muted"><?php print $post['status']; ?></small>
        <?php endif ?>
    </td>
    <td>
        <a href="<?php print base_url('admin/blog/'.$post['id'].'/preview'); ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
        <a href="<?php print base_url('admin/blog/'.$post['id'].'/edit'); ?>" class="btn btn-info btn-sm">Edit</a>
        <a href="<?php print base_url('admin/blog/'.$post['id'].'/delete'); ?>" onclick="alert('Are You Sure? Data Will Delete Forever');" class="btn btn-danger btn-sm">Delete</a>
        <!-- data-href="<?php // print base_url('admin/news/'.$news['id'].'/delete'); ?>" -->
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>
</div>

<?php print $this->endSection(); ?>