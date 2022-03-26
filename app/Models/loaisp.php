<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class loaisp extends Model
{
    use HasFactory;

    public function getAll(){
        return DB::select('SELECT * FROM loai WHERE status=0 ORDER BY maloai ASC');
    }
    public function getLoai($ml,$tl){
        return DB::select('SELECT * FROM loai WHERE status=0 AND (maloai=? OR tenloai=?) ORDER BY maloai ASC',[$ml,$tl]);
    }
    public function getDetail($id){
        return DB::select('SELECT * FROM loai WHERE status=0 AND maloai=?',[$id]);
    }
    public function addLoai($ml,$tl){
        return DB::select('INSERT INTO loai(maloai,tenloai) VALUES (?,?)',[$ml,$tl]);
    }
    public function delLoai($id){
        return DB::select('UPDATE loai SET status=1 WHERE maloai=?',[$id]);
    }
    public function updateLoai($ml,$tl){
        return DB::select('UPDATE loai SET tenloai=? WHERE maloai=?',[$tl,$ml]);
    }
}
