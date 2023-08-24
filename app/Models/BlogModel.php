<?php 
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model {

    // koneksi database blog
    protected $DBGroup = 'other1'; // Menentukan koneksi database yang akan digunakan, yaitu table blog

    // table blog
    protected $table      = 'blog';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields    = ['title', 'content', 'status', 'author', 'slug'];   
}