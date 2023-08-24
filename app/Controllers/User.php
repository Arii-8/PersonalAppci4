<?php 

namespace App\Controllers;

class User extends BaseController {
    // method index user profile
    public function index(){
        $data['title'] = 'My Profile';

        return view('user/index', $data);
    }
}