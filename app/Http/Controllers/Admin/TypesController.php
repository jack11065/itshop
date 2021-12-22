<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class TypesController extends Controller
{
    public function index()
    {
        $types = Category::all();
        return view('admin.types.typesform', compact('types'));
    }

    public function showtypes()
    {
        return view('admin.types.typesform');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:Categories|max:255',
            ],
            [
                'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
                'name.max' => 'ข้อมูลเกินกว่าที่จะจัดเก็บ'
            ]
        );
        $types = new Category;
        $types->name = $request->name;
        $types->save();
        return redirect('/TypesForm')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function addtypes()
    {
        return view('admin.types.addtypes');
    }

    public function edittypes($id)
    {
        $type = Category::find($id);
        return view('admin.types.edittypes', compact('type'));
    }

    public function updatetypes(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:Categories|max:255',
            ],
            [
                'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
                'name.max' => 'ข้อมูลเกินกว่าที่จะจัดเก็บ'
            ]
        );
        $types = Category::find($id);
        $types->name = $request->name;
        $types->save();
        return redirect('/TypesForm')->with('update', 'อัพเดทข้อมูลเรียบร้อย');
    }

    public function del($id){
        $types = Category::find($id);
        $types->delete();
        return redirect('/TypesForm')->with('del', 'ลบข้อมูลเรียบร้อย');
    }
}
