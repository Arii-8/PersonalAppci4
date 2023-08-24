<?php

namespace App\Controllers;
use App\Models\BlogModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class BlogAdmin extends BaseController {
     // method function index
     public function index(){

        // instansiasi model yang mengarah ke berbagai fungsi database
        $postses = new BlogModel();
        $data['posts'] = $postses->findAll();

        // print menuju halaman view admin_list_news dengan mengirimkan data yang nama berupa $newses
        print view('admin_list_blog', $data);
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

    // create data
    public function create(){
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // check jika data valid, simpan ke database
        if($isDataValid){
            $postses = new BlogModel();
            $postses->insert([
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('admin/blog');
        }
		
        // tampilkan form create
        print view('admin_create_blog');
    }

    public function edit($id){
        // ambil artikel yang akan diedit
        $postses = new BlogModel();
        $data['posts'] = $postses->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $postses->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/blog');
        }

        // tampilkan form edit
        print view('admin_edit_blog', $data);
    }

    public function delete($id){
        $postses = new BlogModel();
        $postses->delete($id);
        return redirect('admin/blog');
    }
}