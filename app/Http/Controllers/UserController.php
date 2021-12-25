<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // if($request->session()->has('ADMIN_LOGIN')){
        //     return redirect('admin/dashboard');
        // }else{
        //     return view('user.login');
        // }
        $result['data'] = Product:: All();
        return view('user.shop', $result);
    }

}
