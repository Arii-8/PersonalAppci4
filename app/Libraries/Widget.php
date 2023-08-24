<?php namespace App\Libraries;

use App\Models\BlogModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Widget {
    public function recentPost(array $params){

        // instansiasi model yang mengarah ke berbagai fungsi database
        $postses = new BlogModel();
        $data['posts'] = $postses->findAll();

        return view('widget/recent_post', $params, $data);
    }

    // method function preview
    public function preview($id){

        // instansiasi model yang mengarah ke berbagai fungsi database
        $postses = new BlogModel();
        $data['posts'] = $postses->where('id', $id)->first();

        // tangkap error not found jika data tidak ada dalam database
        if(!$data['posts']){
            throw PageNotFoundException::forPageNotFound();
        }

        // print menuju halaman view news_detail dengan mengirimkan data yang nama berupa $news
        print view('blog_detail', $data);
    }
}

?>