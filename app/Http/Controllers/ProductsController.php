<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductsController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function about(){
        return "<h2>this is about page</h2>";
    }
    public function show(){
        $data = [
            "iPhone" => "iPhone",
            "Sumsung" => "Sumsung",
            "Redmi" => "Redmi"
        ];
        return view('products.index', [
            "device" => $data,
        ]);
    }
}
