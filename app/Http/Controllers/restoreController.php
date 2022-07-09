<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;


class restoreController extends Controller
{
  

    public function index(){
        return view('index');
    }

    public function blog(){
        if(Auth::check()){
            return view('blog');
        }
        else{
            return redirect()->route('login');
        }

    }
    public function about(){
        if(Auth::check()){
            return view('about-us');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function contact(){
        if(Auth::check()){
            return view('contact-us');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function service(){
        if(Auth::check()){
            return view('services');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function getUserAdmin(){
        $users=Admin::all();
        return view('index',compact('users'));
    }

}
