<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function index(){
        return view('admin.contents.contentsform');
    }

    public function addcontents(){
        return view('admin.contents.addcontents');
    }

    public function editcontents(){
        return view('admin.contents.editcontents');
    }
    public function create(Request $request){
       // dd($request);
       $category = new Contents;
       $category->name = $request->name;
    }
}
