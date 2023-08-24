<?php print $this->extend('layouts/user/page_user_layout.php'); ?>
<?php print $this->section('content'); ?>

<!-- <div class="container"> -->
    <!-- <h1 class="h1">Halaman Kontak</h1> -->
<!-- </div> -->

<div class="contactfluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="name-profile-contact">
                <h1 class="h1">Kami disini untuk anda</h1>
                <p> Sebagai tukang program pemula junior, saya yang ingin sekali <br> bekerja dan menjadi professional juga berguna bagi perusahaan <br> anda  </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="profile-bg-contact">
                <h2 class="h2">Karena itu. Aku disini! Mohon bimbingannya ... </h2>
            </div>
        </div>
    </div>
</div>

<hr style="margin-top: 30px;">

<div class="container">
    <div class="formulir">
        <div class="row">
            <div class="col-md-6">
                <p style="color: white; font-size: 1.2em; margin-left: 4px;">Baik. Anda bisa hubungi saya melalui form berikut!</p>
                
                <form action="" class="form" method="post">

                <div class="form-group">
                    <!-- <label for="email" s>Email</label> -->
                    <h4 class="h4" style="color: white; margin-top: 20px;">Email</h4>
                    <input type="email" class="form-control">
                </div>

                <div class="form-group">
                    <!-- <label for="phone">No. Telepon</label> -->
                    <h4 class="h4" style="color: white; margin-top: 20px;">No. Telepon</h4>
                    <input type="tel" class="form-control">
                </div>

                <div class="form-group">
                    <!-- <label for="name">Nama</label> -->
                    <h4 class="h4" style="color: white; margin-top: 20px;">Nama</h4>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <!-- <label for="email">Pesan</label> -->
                    <h4 class="h4" style="color: white; margin-top: 20px;">Pesan</h4>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                
                <br>
                <div class="form-group">
                    <input type="submit" value="Kirim" class="btn btn-success w-100" style="border-radius: 40px;">
                </div>

                </form>
            </div>
            
            <div class="col-md-6">
                <div class="profile-post-contact">
                    <img src="<?php print base_url('img/siarhei-plashchynski-M8uqeRT_Vh8-unsplash.jpg'); ?>" alt="profile">
                </div>
            </div>
        </div>
    </div>
</div>

<hr style="margin-bottom: 30px;">

<?php print $this->endSection(); ?>