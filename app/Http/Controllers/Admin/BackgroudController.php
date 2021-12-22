<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackgroudController extends Controller
{
    public function index(){
        return view('admin.backgroud.backgroudform');
    }

    public function addbackgroud(){
        return view('admin.backgroud.addbackgroud');
    }

    public function editbackgroud(){
        return view('admin.backgroud.editbackgroud');
    }
}
