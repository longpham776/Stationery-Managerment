<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class admin extends Model
{
    use HasFactory;
    public function getAll(){
        return DB::select('SELECT * FROM admin WHERE status=0 ORDER BY maadmin ASC');
    }
    public function getLogin($u,$p){
        return DB::select('SELECT * FROM admin WHERE username=? AND password=? ',[$u,$p]);
    }
}
