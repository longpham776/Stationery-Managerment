<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;
class khachhang extends Model
{
    use HasFactory;
    public function getAll(){
        return DB::select('SELECT * FROM khachhang WHERE status=0 ORDER BY makhachhang ASC');
    }
    public function getLogin($e,$p){
        return DB::select('SELECT * FROM khachhang WHERE email=? AND password=? ',[$e,$p]);
    }
    public function getByEmail($e){
        return DB::select('SELECT * FROM khachhang WHERE email=?',[$e]);
    }
    public function addUser($n,$e,$ph,$p){
        return DB::select('INSERT INTO khachhang(hotenkhachhang,sdt,email,password) VALUES (?,?,?,?)',[$n,$ph,$e,$p]);
    }
    public function updateUserPass($e,$p){
        return DB::select('UPDATE khachhang SET password=? WHERE email=?',[$p,$e]);
    }
}
