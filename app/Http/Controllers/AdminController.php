<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index(Request $request)
    {
         $response = Http::asForm()
        ->post('https://api-emis.kemenag.go.id/v1/accounts/login', [
            'email' => Request()->email,
            'password' => Request()->password,
            ])
            ->json();
            // dd($response);
        return view('app.dashboard', ['data' => $response]);
    }

    // public function table()
    // {
    //     return view('app.table');
    // }
}
