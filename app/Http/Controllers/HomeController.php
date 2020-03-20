<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Market;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function UserDelete($id)
    {
        $user=User::find($id)->delete();
		return redirect()->intended('/admin/users');
    }
	public function MarketDelete($id){
	 	$Market=Market::find($id)->delete();
		return redirect()->intended('/admin/market');
	}
}
