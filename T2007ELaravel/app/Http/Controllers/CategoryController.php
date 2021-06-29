<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function create(){
        // views: category/create.blade.php
        return view('category.create');
    }
    function store(Request $req){
        // nhận data từ form client 
        $macn = $req->code;
        $tencn = $req->name;
        // lưu vào bảng category
        $ketqua = DB::insert('insert into categories(code, name) values (?,?)',[$macn, $tencn]);
        // thông báo
        
        //var_dump($list);
        if($ketqua){
            // trả về 1 chức năng khác hoặc điều hướng sang 1 route khác
            // điều hướng theo uri
            //return redirect('/category');
            // điều hướng dựa vào name của route
            return redirect()->route('category');
        } else 
            echo "<h1>Them moi that bai</h1>";
    }
    function index(){
        // lay du lieu tu categories
        // lay data tu bang:
        $list = DB::select('select * from categories');
        // tra lai view de hien thi danh sach category
        return view('category.index', compact('list'));
    }
    
    
    
    
    
    
    
    
    
    
    
}
