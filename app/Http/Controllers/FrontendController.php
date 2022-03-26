<?php
namespace App\Http\Controllers;

use App\Models\loaisp;
use App\Models\sanpham;
use App\Models\hoadon;
use App\Models\giohang;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();
class FrontendController extends Controller
{
    public function index()
    {
        $getloai= loaisp::getAll();
        $getVpp=sanpham::getVpp();$getGb=sanpham::getGb();$getPkdt=sanpham::getPkdt();$getQt=sanpham::getQt();
        return view('frontend.index',compact('getloai','getVpp','getGb','getPkdt','getQt'));
    }
    public function contact()
    {
        $getloai= loaisp::getAll();
        return view('frontend.contact',compact('getloai'));
    }
    public function category()
    {
        $kw=isset($_GET['kw'])?$_GET['kw']:"";
        if($kw==NULL){
            $getloai= loaisp::getAll();
            $getsp= sanpham::getAll();
            return view('frontend.category',compact('getloai','getsp'));
        }else if($kw!=NULL){
            $getloai= loaisp::getAll();
            $getsp= sanpham::getByName($kw);
            return view('frontend.category',compact('getloai','getsp'));
        }
    }
    public function product_detail($id)
    {
        $getloai= loaisp::getAll();
        $getpro= sanpham::getDetail($id);
        return view('frontend.product_detail',compact('getloai','getpro'));
    }
    public function cart()
    {
        $getloai= loaisp::getAll();
        return view('frontend.cart',compact('getloai'));
    }
    public function postcart()
    {
        $masp=isset($_POST['masp'])?$_POST['masp']:0;
        $sl=isset($_POST['soluong'])?$_POST['soluong']:1;
        if(($sl==0) or ($sl>=10)){
            $getloai= loaisp::getAll();
            $getpro= sanpham::getDetail($masp);
            return view('frontend.product_detail',compact('getloai','getpro'));
        }
        $spdetail=sanpham::getDetail($masp);
        $getloai= loaisp::getAll();
        $data['id']=$spdetail[0]->masanpham;
        $data['qty']=$sl;
        $data['name']=$spdetail[0]->tensanpham;
        $data['price']=$spdetail[0]->gia;
        $data['weight']="1";
        $data['options']['images']=$spdetail[0]->hinh;
        Cart::add($data);
        return Redirect::to('/cart');
    }
    public function delcart($id)
    {
        Cart::update($id,0);
        return Redirect::to('/cart');
    }
    public function upcart($id,$qty)
    {
        dd($id,$qty);
        for($i=0;$i<Cart::count();$i++){
            Cart::update($data[$id]->id,$data[$qty]->qty);
        }
        return Redirect::to('/cart');
    }
    public function logout()
    {
        unset($_SESSION['user']);
        $getloai= loaisp::getAll();
        $getVpp=sanpham::getVpp();$getGb=sanpham::getGb();$getPkdt=sanpham::getPkdt();$getQt=sanpham::getQt();
        return redirect()->route('home',compact('getloai','getVpp','getGb','getPkdt','getQt'));
    }
    public function checkout()
    {
        if(!isset($_SESSION['user'])){ return redirect()->route('loginuser');}
        $getloai= loaisp::getAll();
        return view('frontend.checkout',compact('getloai'));
    }
    public function postcheckout()
    {
        if(!isset($_SESSION['user'])){ return redirect()->route('loginuser');}
        $diachi=isset($_POST['diachi'])?$_POST['diachi']:"";
        $date=date('Y-m-d');
        $total=Cart::total();
        $content=Cart::content();
        hoadon::addBill($date,$total,
            $_SESSION['user'][0]->makhachhang,
            $_SESSION['user'][0]->hotenkhachhang,
            $_SESSION['user'][0]->sdt,
            $diachi
        );
        $lastId=hoadon::lastIdInsert();
        foreach($content as $sp){
            giohang::addCart($sp->id,$sp->name,$lastId[0]->lastid,$sp->qty,$sp->price);
        }
        Cart::destroy();
        $getloai= loaisp::getAll();
        return view('frontend.checkout',compact('getloai'));
    }
}
?>