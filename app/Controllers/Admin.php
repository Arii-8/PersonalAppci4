<?php 

namespace App\Controllers;

class Admin extends BaseController {
    protected $db;
    protected $builder;

    public function __construct(){
        // Connect
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('users');  
    }

    // --------------------------------------------------------------------------------------

    public function index(){
        $data['title'] =  'User List';
        $this->builder->select('users.id as userid, username, email, fullname, name');

        // mendapatkan id
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');

        // mendapatkan nama
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();
        return view('admin/index', $data);
    }
    
    // --------------------------------------------------------------------------------------

    public function detail($id = 0){
        // Title/judul halaman
        $data['title'] = 'User Detail';

        // Data user model
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');

        // mendapatkan id
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');

        // mendapatkan nama
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        // check jika data user kosong maka arahkan ke admin
        if(empty($data['user'])){
            return redirect()->to('/admin');
        }

        // return view('welcome_message');
        return view('admin/detail_admin', $data);
    }

    // --------------------------------------------------------------------------------------

    public function deleteProfile($id = 0){
        // Hapus data user berdasarkan ID
        $this->builder->where('id', $id);
        $this->builder->delete();
    
        return redirect()->to("/admin");
    }
    
    // --------------------------------------------------------------------------------------
}