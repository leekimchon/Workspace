<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {
    public function showLogin() {
        return view('login');
    }
    public function login(Request $request) {
        // Lấy thông tin đang nhập từ request gửi lên từ trình duyệt
        $username = $request->inputUsername;
        $password = $request->inputPassword;

        // Kiểm tra thông tin đăng nhập
        if ($username == 'admin' && $password == '123456') {

            //Nếu thông tin đăng nhập chính xác, Tạo một Session xác nhận đăng nhập thành công
            Session::push('login', true);

            // Đi đến route show.blog, để chuyển hướng người dùng đến trang blog
            return redirect()->route('show.blog');
        }

        // Nếu thông tin đăng nhập không chính xác, gán thông báo vào Session
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login-fail', $message);

        //Quay trở lại trang đăng nhập
            return redirect()->route('show.login');
    }
    public function showBlog(Request $request) {
        // Kiểm tra Session login có tồn tại hay không
        if ($request->session()->has('login') && $request->session()->get('login')) {

            // Session login tồn tại và có giá trị là true, chuyển hướng người dùng đến trang blog
            return view('blog');
        }

        // Session không tồn tại, người dùng chưa đăng nhập
        // Gán một thông báo vào Session not-login
        $message = 'Bạn chưa đăng nhập.';
        $request->session()->flash('not-login', $message);

        // Chuyển hướng về trang đăng nhập
        return view('login');
    }
    public function logout(Request $request) {
        // Xóa Session login, đưa người dùng về trạng thái chưa đăng nhập
        $request->session()->flush();
        return view('home');
    }
}
