<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\loaisp;
use App\Models\sanpham;
use App\Models\khachhang;
use App\Models\admin;
use App\Models\hoadon;
use App\Mail\changepassMail;
use Illuminate\Support\Facades\Mail;
session_start();
class DashboardController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getSp=sanpham::getAll();$getHd=hoadon::getAll();$getAd=admin::getAll();
        return view('backend.index',compact('getSp','getHd','getAd'));
    }
    public function qldh()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getDh=hoadon::getAll();
        return view('backend.qldh',compact('getDh'));
    }
    public function qldm()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getDm=loaisp::getAll();
        return view('backend.qldm',compact('getDm'));
    }
    public function postthemdm()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $ml=isset($_POST['maloai'])?$_POST['maloai']:"";
        $tl=isset($_POST['tenloai'])?$_POST['tenloai']:"";
        $data=loaisp::getLoai($ml,$tl);
        if($data!=NULL){
            return redirect()->route('ad.themdm');
        }
        loaisp::addLoai($ml,$tl);
        $getDm=loaisp::getAll();
        return view('backend.qldm',compact('getDm'));
    }
    public function xoadm($id){
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        loaisp::delLoai($id);
        $getDm=loaisp::getAll();
        return view('backend.qldm',compact('getDm'));
    }
    public function suadm($id){
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getDetail=loaisp::getDetail($id);
        return view('backend.suadm',compact('getDetail'));
    }
    public function postsuadm(){
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $ml=isset($_POST['maloai'])?$_POST['maloai']:"";
        $tl=isset($_POST['tenloai'])?$_POST['tenloai']:"";
        loaisp::updateLoai($ml,$tl);
        $getDm=loaisp::getAll();
        return view('backend.qldm',compact('getDm'));
    }
    public function themdm()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        return view('backend.themdm');
    }
    public function themsp()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        return view('backend.themsp');
    }
    public function qlkh()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getKh=khachhang::getAll();
        return view('backend.qlkh',compact('getKh'));
    }
    public function qlsp()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getSp=sanpham::getAll();
        $getDm=loaisp::getAll();
        return view('backend.qlsp',compact('getSp','getDm'));
    }
    public function qltv()
    {
        if(!isset($_SESSION['admin'])){ return redirect()->route('ad.login');}
        $getAd=admin::getAll();
        return view('backend.qltv',compact('getAd'));
    }
    public function login()
    {
        if(isset($_SESSION['admin'])){
            $getSp=sanpham::getAll();$getHd=hoadon::getAll();$getAd=admin::getAll();
            return view('backend.index',compact('getSp','getHd','getAd'));
        }
        return view('backend.login');
    }
    public function postlogin()
    {
        $u=isset($_POST['username'])?$_POST['username']:"";
        $p=isset($_POST['password'])?$_POST['password']:"";
        $data=admin::getLogin($u,$p);
        if($data==NULL){
            return view('backend.login');
        }else{
            $_SESSION['admin']=$data;
            $getSp=sanpham::getAll();$getHd=hoadon::getAll();$getAd=admin::getAll();
            return view('backend.index',compact('getSp','getHd','getAd'));
        }
    }
    public function logout()
    {
        unset($_SESSION['admin']);
        return redirect()->route('ad.login');
    }
    public function loginuser()
    {
        if(isset($_SESSION['user'])){
            $getloai= loaisp::getAll();
            $getVpp=sanpham::getVpp();$getGb=sanpham::getGb();$getPkdt=sanpham::getPkdt();$getQt=sanpham::getQt();
            return redirect()->route('home',compact('getloai','getVpp','getGb','getPkdt','getQt'));
        }
        return view('backend.loginuser');
    }
    public function postloginuser()
    {
        $e=isset($_POST['email'])?$_POST['email']:"";
        $p=isset($_POST['password'])?$_POST['password']:"";
        $data=khachhang::getLogin($e,$p);
        if($data==NULL){
            return view('backend.loginuser');
        }else{
            $_SESSION['user']=$data;
            return Redirect::to('/user/loginuser');
        }
    }
    public function register()
    {
        return view('backend.register');
    }
    public function postregister()
    {
        $n=isset($_POST['name'])?$_POST['name']:"";
        $e=isset($_POST['email'])?$_POST['email']:"";
        $ph=isset($_POST['phone'])?$_POST['phone']:"";
        $p=isset($_POST['password'])?$_POST['password']:"";
        $data=khachhang::getByEmail($e);
        if($data!=NULL){
            return view('backend.register');
        }else{
            khachhang::addUser($n,$e,$ph,$p);
            return view('backend.loginuser');
        }
        
    }
    public function changepass($email)
    {
        return view("backend.changepass",compact('email'));
    }
    public function postchangepass()
    {
        $email=isset($_POST['email'])?$_POST['email']:"";
        $op=isset($_POST['oldpassword'])?$_POST['oldpassword']:"";
        $np=isset($_POST['newpassword'])?$_POST['newpassword']:"";
        $data=khachhang::getLogin($email,$op);
        if($data==NULL){
            return view("backend.changepass",compact('email'));
        }else{
            if($op==$np){
                return view("backend.changepass",compact('email'));
            }else{
                khachhang::updateUserPass($email,$np);
                return view('backend.loginuser');
            }
        }
    }
}
?>