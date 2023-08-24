<?php 

namespace App\Controllers;

// Controller antar halaman
class Page extends BaseController {
    // method halaman index
    public function index(){
        // judul halaman home
        $data['title'] = 'Personal Home';
        print view('index', $data);
    }

    // method halaman aout
    public function about(){
        // judul halaman about
        $data['title'] = 'Personal About';
        print view("about", $data);
    }

    // method halaman contact service 
    public function contact(){
        // judul halaman contact
        $data['title'] = 'Personal Contact';
        print view('contact', $data);
    }
}