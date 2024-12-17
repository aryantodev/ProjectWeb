<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create(){
        return view('tampilan.create');
    }

    public function create_akun(Request $request){
        // Validate the request
           $input = $request->all();
           User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
          ]);
          return view('tampilan.login');
        }
}