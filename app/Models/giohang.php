<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class giohang extends Model
{
    use HasFactory;

    public function addCart($masp,$tensp,$mahd,$sl,$gia){
        return DB::select('INSERT INTO giohang(masp,tensp,mahoadon,soluong,gia) VALUES (?,?,?,?,?)',[$masp,$tensp,$mahd,$sl,$gia]);
    }
}
