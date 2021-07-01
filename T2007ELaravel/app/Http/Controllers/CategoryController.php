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
            return redirect()->route('category')->with('message','Thêm mới thành công');;
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
    
    function edit($id){
        // lay record theo id
        $chuyennganh = DB::table('categories')->find($id);
        // tra ve giao dien cung record vua tim duoc
        if(!empty($chuyennganh)){
            return view('category.edit', compact('chuyennganh'));
        } else {
            echo "<h1>Category not found</h1>";
        }
    }
    function update(Request $request){
        // validate server
        // nhận data từ form client
        $id = $request->id;
        $macn = $request->code;
        $tencn = $request->name;
        // cap nhat vào bảng category
        $result = DB::table('categories')
                    ->where('id', $id)
                    ->update(["code"=>$macn, "name"=>$tencn]);
        
        if ($result){
            // điều hướng trả về trang danh sách chuyên ngành
            // truyền đi biến flash session: chỉ tồn tại theo request/ response
            return redirect()->route('category')->with('message','Cập nhật thành công');
        } else {
            return redirect('/category/'.$id.'/edit')->with('message','Cập nhật không thành công');
        }
    }
    function destroy(Request $request){
        $id = $request->id;
        // xoa thang
        $result = DB::table('categories')->delete($id);
        if ($result){
            return "success";
        } else {
            return "fail";
        }
    }
    
    
    
    
    
    
    
    
    
}
