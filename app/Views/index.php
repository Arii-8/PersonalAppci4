<?php print $this->extend('layouts/user/page_user_layout.php'); ?>
<?php print $this->section('content'); ?>

<!-- <div class="container"> -->
    <!-- <h1 class="h1">Personal Home</h1> -->
<!-- </div> -->

<div class="contfluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="name-profile">
                <h1 class="h1">ARIZAL SABILA NURHIKAM</h1>
                <p> Junior Backend Developer, PHP & JavaScript </p>
            </div>
            <div class="social-media">
                <img src="<?php print base_url('Icon/5279111_network_fb_social media_facebook_facebook logo_icon.svg'); ?>" alt="facebook">
                <img src="<?php print base_url('Icon/5279112_camera_instagram_social media_instagram logo_icon.svg'); ?>" alt="instagram">
                <img src="<?php print base_url('Icon/5279121_call_chat_messenger_whatsapp_whatsapp logo_icon.svg'); ?>" alt="whatsapp">
                <img src="<?php print base_url('Icon/1964417_github_logo_media_social_icon.svg'); ?>" alt="github">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="profile-bg">
                <img src="<?php print base_url('img/IMG_9521 copy.jpg'); ?>" alt="profile">
            </div>
        </div>
    </div>
</div>

<div class="container" style="max-width: 1460px;">
    <div class="intro" style="box-shadow: -3px 3px 6px rgba(0, 0, 0, 0.4), 3px 3px 6px rgba(0, 0, 0, 0.4), 0 -3px 6px rgba(0, 0, 0, 0.4);">
        <div class="row" style="margin-top: 27px; padding-top: 30px; margin-bottom: 50px; padding-bottom: 30px;">
            <div class="col-lg-4">
                <img src="<?php print base_url('img/IMG_9521 copy.jpg'); ?>" alt="profile">
            </div>
            <div class="col-lg-8">
                <h3 class="h3">Hello!</h3>
                <p>
                    Saya Arizal Sabila Nurhikam. Seorang Junior Backend Developer dengan minat dan keahlian dalam pengembangan web menggunakan bahasa pemrograman 
                    PHP dan Node.js. Saya memiliki pengalaman dalam membangun dan mengimplementasikan solusi backend yang efisien dan 
                    handal untuk mendukung aplikasi web modern.
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="h3">Pendidikan</h3>
                        <p>
                            Saya memiliki gelar sarjana di bidang Teknik Informatika dari Universitas Adhirajasa Reswara Sanjaya. Selama masa studi, 
                            saya fokus pada pengembangan perangkat lunak dan memperoleh pemahaman yang kuat tentang konsep pemrograman, struktur data, 
                            dan algoritma. Selain itu, saya juga mengambil beberapa pengalaman terkait seperti magang di perusahaan yang meningkatkan 
                            kemampuan saya dalam mengembangkan aplikasi web.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h3>Pengalaman</h3>
                        <p>
                            Saya telah magang sebagai junior backend developer di Diskominfo selama 4 bulan dan Telkom Indonesia selama 6 bulan. Selama magang di 
                            sana, saya terlibat dalam pengembangan backend untuk aplikasi e-commerce dengan menggunakan PHP dan framework Laravel. 
                            Tugas saya meliputi pembuatan API, manajemen basis data, dan implementasi keamanan. <a href="https://github.com/Arii-8">https://github.com/Arii-8</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header-article">
    <h3 class="h3 text-center">
        <b><span style="color: #212529;">Personal</span><span style="color: #0D6EFD;">.Articles</span></b>
    </h3>
</div>

<div class="content" style="box-shadow: -3px 3px 6px rgba(0, 0, 0, 0.4), 3px 3px 6px rgba(0, 0, 0, 0.4), 0 -3px 6px rgba(0, 0, 0, 0.4);">
    
    <div class="row">
        <div class="col-lg-6">
            <h2 class="h2">Artikel</h2>
            <p>
                Blog artikel pribadi saya menjadi tempat berarti untuk mengekspresikan ide-ide kreatif, pandangan pribadi, dan pengalaman hidup. 
                Setiap kata mencerminkan proses pemikiran mendalam dan keinginan untuk menginspirasi pembaca.
                <br/><br/>
                Blog ini juga tempat belajar dan berkembang sebagai penulis. Saya senang mengeksplorasi berbagai topik dan mengembangkan 
                keterampilan komunikasi serta gaya penulisan. 
                <br/><br/>
                Interaksi dengan pembaca berarti bagi saya. Umpan balik dan komentar 
                memotivasi saya untuk terus berkarya dan memberikan konten bermanfaat. 
                <br/><br/>
                Dalam mengelola blog ini, saya berusaha memberikan 
                pengalaman membaca yang nyaman dan menarik. Visi saya adalah mengembangkan blog dengan artikel bermanfaat dan fitur interaktif.
                <br/><br/>
                Meskipun blog masih tahap awal, saya berkomitmen untuk tumbuh dan mengasah kualitas tulisan dengan sikap positif.
                Blog ini mencerminkan hasrat dan dedikasi terhadap dunia tulisan, serta harapan untuk berkontribusi dan menciptakan 
                komunitas yang saling mendukung.
                <br/><br/>
                Terima kasih telah membaca deskripsi singkat tentang blog saya. Kunjungi [URL Blog Anda] untuk lebih banyak informasi.
                <br/><br/>
                Salam hangat,
                <b>Arizal Sabila Nurhikam</b>
                
            </p>
            <br/><br/>
            
            <a href="<?php print base_url('blog'); ?>"> Lihat Seluruh Artikel </a>
  
        </div>
        <div class="col-lg-6">
            <img src="<?php print base_url('img/thom-milkovic-FTNGfpYCpGM-unsplash.jpg'); ?>" alt="profile">
        </div>
    </div>
</div>

<?php print $this->endSection(); ?> 