<?php

namespace App\Models;

use CodeIgniter\Model;

class SalamModel extends Model
{
    function getData($user){
        return "Selamat Datang di CodeIgniter 4
        Halo " . $user . " Semoga Harimu Menyenangkan";
    }
}
?>