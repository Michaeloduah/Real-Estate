<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function loginPage() {
        return view('login');
    }
    //
    public function registerPage() {
        return view('register');
    }

    public function register(Request $request)
    {
        $user = $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'address' => 'required',
            'password' => 'required|min:8',
            'image' => 'mimes:jpg,png,jpeg',
            'account_type' => 'required'
        ]);
        // $img_dir = $request->file('image')->store('user_images', 'public' );
        
        if ($request->hasFile('image')) {
            User::create(array_merge($user, ['image' => $request->file('image')->store('user_images', 'public')]));
        }
        else {
            User::create(array_merge($user));
        }


        // DB::beginTransaction();

        // $user = User::create([
        //     'fullname' => $request->input('fullname'),
        //     'username' => $request->input('username'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'address' => $request->input('address'),
        //     'password' => Hash::make($request->password),
        //     'image' => $img_dir,
        //     'account_type' => $request->input('account_type'),
        // ]);

        // DB::commit();
        return redirect()->intended('dashboard')->with('Account created successfully');
        // DB::rollBack();
    }
}
