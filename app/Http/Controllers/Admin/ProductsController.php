<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;


class productsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.productsform',compact('products'));
    }

    public function showproducts(){
        return view('admin.products.productsform');
    }

    public function create(Request $request){
        $validateData = $request->validate(
            [
                'name' => 'required',
                'detail' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'detail.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );


        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $product->image = $filemane;
        } else {
            $product->image = 'NOPIC.jpg';
        }

        $product->save();
        return redirect()->route('productsform');

    }

    public function edit($id)
    {
        $editproduct = Product::find($id);
        return view('admin.products.editproducts', compact('editproduct'));
    }

    public function update(Request $request,$id){
        $validateData = $request->validate(
            [
                'name' => 'required',
                'detail' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'detail.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
        if ($request->hasFile('image')) {
            $product = Product::find($id);
            if ($product->image != 'NOPIC.jpg') {
                File::delete(public_path() . '/admin/images/' . $product->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $product->image = $filemane;
            $product->name = $request->name;
            $product->detail = $request->detail;
            $product->price = $request->price;
        } else {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->detail = $request->detail;
            $product->price = $request->price;
        }

        $product->save();
        return redirect()->route('productsform');
    }

    public function delete($id){
        $delete = Product::find($id);
        if($delete->image != 'NOPIC.jpg'){
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('productsform')->with('success','ลบข้อมูลเรียบร้อย');
    }

    public function addproducts(){
        return view('admin.products.addproducts');
    }

    // public function editproducts(){
    //     return view('admin.products.editproducts');
    // }
}
