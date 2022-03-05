<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Hash;
use Auth;
use App\Models\News;
use App\Models\Cart;
use App\Models\Comment;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getMohinh(){

        return view('page.mo_hinh_phat_trien');
    }

    public function getTrangchu(){
        return view('page.trang_chu');
    }

    public function getChunhnhan(){
        return view('page.giay_chung_nhan');
    }

    public function getDuan(){
        $new_tin = News::where('id_type',1)->get();

        return view('page.du_an',compact('new_tin'));
    }

    public function getNhanxet(){
        $comment = Comment::get();
        return view('page.nhan_xet',compact('comment'));
    }




    public function getDanhsach(){
        $product = News::all();

        return view('admin.danh_sach',compact('product'));
    }

    public function getCapnhat(){
        return view('admin.cap_nhat_tin_tuc');
    }

    public function getLogin(){
    	return view('admin.dang_nhap');
    }
    public function getSignin(){
    	return view('admin.dang_ki');
    }

    public function postSignin(Request $req){
        $this->validate($req,
            [   
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:8|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password',
            ],
            [
                'email.required'=>'Vui lòng nhập Email',
                'email.email'=>'Email Không đúng định dạng',
                'fullname.required'=>'Vui lòng nhập tên của bạn',
                'email.unique'=>'Email đã có người dùng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                're_password.required'=>'Vui lòng nhập lại mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 8 kí tự',
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('addangnhap')->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogin(Request $req){
        $this->validate($req,
        [
            'email' => 'required|email',
            'password' =>'required|min:8|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập Email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khâủ',
            'password.min'=>'Mật khẩu có ít nhất 8 kí tự',
            'password.max'=>'Mật khẩu không quá 20 kí tự'
        ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect()->route('danhsachtin')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }  
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('addangnhap');
    }
    
    public function postCapnhat(Request $req){

         if($req->hasFile('myfile')){
            $image = $req->file('myfile');
            $imagePath = $image->move('source/image/blog', $image->getClientOriginalName());
        }

        $new = new News;
        $new->image = $imagePath;
        $new->description = $req->description;
        $new->note = $req->notes;
        $new->id_type = $req->type_new;
        $new->save();
        return redirect()->route('danhsachtin')->with('thanhcong','Cập nhật thành công');
    }

    public function getDelICart($id){
        $data = News::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function postNhanxet(Request $req){
        $cmt = new Comment;
        $cmt->full_name = $req->name;
        $cmt->email = $req->email;
        $cmt->note = $req->notes;
        $cmt->save();
        return redirect()->route('nhanxet')->with('thanhcong','Cập nhật thành công');
    }

}
