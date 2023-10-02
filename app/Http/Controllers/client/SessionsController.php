<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('client.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return redirect('login')->with('error', 'Sai tài khoản hoặc mật khẩu !');
        }

        return redirect()->to('/')->with('success', 'Đăng nhập thành công !');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
