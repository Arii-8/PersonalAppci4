<?php print $this->extend('sb_templates/index'); ?>

<?php print $this->section('page-content'); ?> 
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php print $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($users as $user) : ?>
                <tr>
                    <th scope="row"><?php print $i++; ?></th>
                    <td><?php print $user->username; ?></td>
                    <td><?php print $user->email; ?></td>
                    <td><?php print $user->name; ?></td>
                    <!-- <td></td> -->
                    <td>
                        <a href="<?php print base_url('admin/' . $user->userid); ?>" class="btn btn-info btn-sm"> Detail </a>
                        <a href="<?php print base_url("/admin/deleteProfile/{$user->userid}"); ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
    </div>

</div>
<?php print $this->endSection(); ?>