<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Login extends Controller
{
    // public function login()
    // {
    //       $response = Http::asForm()
    //         ->post('https://api-emis.kemenag.go.id/v1/accounts/login', [
    //             'email' => Request()->email,
    //             'password' => Request()->password,
    //         ])
    //         ->json();
    //     // dd($response['message']);
    //     if ($response === 200) {
    //         return redirect()->route('dashboard', ['data' => $response]);
    //     } else {
    //         return view('app.login');
    //     }
    // }

    // public function do_login($response)
    // {
    //     return redirect()->route('dashboard', ['data' => $response]);
    // }

    public function postlogin(Request $request){
        $response = Http::asForm()
        ->post('https://api-emis.kemenag.go.id/v1/accounts/login', [
            'email' => Request()->email,
            'password' => Request()->password,
            ])
            ->json();
            dd($response);
    }
}
