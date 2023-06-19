<?php
// Khai báo namespace
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        // $title = 'Laravel function ';
        // --- Dùng compact('title'): truyền biến vào view. Ở view lấy giá trị ra thì {{$title}}
        // return view('/products/index', compact('title'));

        // --- Dùng hàm with: chỉ truyền được 1 tham số thôi, theo dạng key/value;
        // $name = 'Hoang';
        // return view('/products/index')->with('name', $name);

        // ---- truyền 1 associative array dùng hàm compat
        $myphone = [
            "name" => 'iphone 14',
            "year" => 2023,
            "isFavorited" => true
        ];
        // return view('/products/index', compact('myphone'));

        // ---- truyền 1 associative array truyền vào trực tiếp theo dạng mảng
        return view('/products/index', [
            "myphone" => $myphone
        ]);



    }


    public function detail($productName, $id){

        return "product's id = " .$id ." productName:" .$productName; 
    }
}
