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
use App\Mail\changepassMail;
use Illuminate\Support\Facades\Mail;
session_start();
class SendMailController extends Controller
{
    public function sendMail()
    {
        $email=isset($_POST['email'])?$_POST['email']:"";
        $user = khachhang::getByEmail($email);
        if($user==NULL){
            Session::flash('fail', "E-mail không tồn tại!");
            return Redirect::back();
            //return redirect()->back()->with('fail', 'Email không tồn tại!');
        }else{
            $mailable = new changepassMail($user);
            Mail::to($email)->send($mailable);
            return view('backend.loginuser')->with('success', 'Gửi E-mail thành công!');
        }
    }
    public function getsendMail()
    {
        return view('backend.mailinput');
    }
}
?>