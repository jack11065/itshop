<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SpecialcontentsController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.specialcontents.specialcontentsform',compact('user'));
    }

    public function addspecialcontents(){
        return view('admin.specialcontents.addspecialcontents');
    }

    public function editspecialcontents($id){
        $user = User::find($id);
        return view('admin.specialcontents.editspecialcontents',compact('user'));
    }

    public function updatespecialcontents(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('specialcontents');

    }

    public function deletespecialcontents($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('specialcontents');
    }
}
