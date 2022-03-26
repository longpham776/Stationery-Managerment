<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Pagination\Paginator;
class sanpham extends Model
{
    use HasFactory;

    public function getAll(){
        return DB::select('SELECT * FROM sanpham WHERE status=0 ORDER BY masanpham ASC');
    }
    public function getVpp(){
        return DB::select('SELECT * FROM sanpham WHERE status=0 AND loaisanpham="vpp" ORDER BY masanpham ASC');
    }
    public function getQt(){
        return DB::select('SELECT * FROM sanpham WHERE status=0 AND loaisanpham="qt" ORDER BY masanpham ASC');
    }
    public function getGb(){
        return DB::select('SELECT * FROM sanpham WHERE status=0 AND loaisanpham="gb" ORDER BY masanpham ASC');
    }
    public function getPkdt(){
        return DB::select('SELECT * FROM sanpham WHERE status=0 AND loaisanpham="pkdt" ORDER BY masanpham ASC');
    }
    public function getDetail($id){
        return DB::select('SELECT * FROM sanpham WHERE status=0 AND masanpham=?',[$id]);
    }
    public function getByName($kw){
        return DB::select('SELECT * FROM sanpham WHERE tensanpham REGEXP ? AND status=0 ORDER BY masanpham ASC',[$kw]);
    }
    public function getByLoai($loai){
        return DB::select('SELECT * FROM sanpham WHERE loaisanpham="?" AND status=0 ORDER BY masanpham ASC',[$loai]);
    }
}
