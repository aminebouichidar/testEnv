<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // this function is to create a new user
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        // $password1 = "12345678";
        $password1 = $request->input('password');
        $password = Hash::make($password1);
        $phone = $request->input('phone');
        $address = $request->input('address');
        $city = $request->input('city');
        $state = $request->input('state');
        $country = $request->input('country');
        $status = 1;
        $user_type = $request->input('user_type');
        try{
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'phone' => $phone,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'country' => $country,
                'status' => $status,
                'role' => $user_type,
            ]);
            return redirect()->back()->with('message', 'User created successfully.');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', 'User creation failed, please verify if the user already exist, and try again.');
            
        }
        //
        //return view('message')->with('message', 'User created successfully.');
    }
}
