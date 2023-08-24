<?php 

namespace App\Controllers;

// memanggil BlogModel untuk membuat object model blog (instansiasi)
use App\Models\BlogModel; 
use CodeIgniter\Exceptions\PageNotFoundException;

class Blog extends BaseController {
    // method public function halaman blogpost
    public function index(){
        
        // membuat object model blog
        $postses = new BlogModel();

        /* 
            siapkan data untuk dikirim ke view dengan nama $posts
            dan isi datanya dengan post yang sudah terbit
        */
        
        // Data & Title Page
        $data['title'] = 'Personal Post';
        $data['posts'] = $postses->where('status', 'published')->findAll();

        // kirim data ke view
        return view('blog', $data);
    }

    // method function yang menampilkan slug
    public function viewBlog($slug){

        // membuat object model blog
        $postses = new BlogModel();

        $data['posts'] = $postses->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // tampilkan 404 error jika data tidak ditemukan
        if(!$data['posts']){
            throw PageNotFoundException::forPageNotFound();
        }

        // kirim data ke view
        return view('blog_detail', $data);
    }
}

?>