<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;
class hoadon extends Model
{
    use HasFactory;
    public function getAll(){
        return DB::select('SELECT * FROM hoadon ORDER BY mahoadon ASC');
    }
    public function addBill($date,$tt,$mkh,$hoten,$sdt,$diachi){
        return DB::select('INSERT INTO hoadon(ngaylap,tongtien,makh,hoten_kh,sdt_kh,diachi) VALUES (?,?,?,?,?,?)',[$date,$tt,$mkh,$hoten,$sdt,$diachi]);
    }
    public function lastIdInsert(){
        return DB::select('SELECT MAX(mahoadon) as lastid FROM hoadon');
    }
}
