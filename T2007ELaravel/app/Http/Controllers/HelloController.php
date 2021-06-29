<?php
// khai bao đường dẫn thư mục chứa class
namespace App\Http\Controllers;
// khai báo các thư viện cần dùng
use App\Http\Controllers\Controller;

class HelloController extends Controller{
    function xinchao(){
        // validate tham số đầu vào
        // Xử lý nghiệp vụ -> DB
        // trả lại hiển thị thông tin
        return "<h1>Xin chào</h1>";
    }
    
    function xinchao2($classname, $username){
        $dssv = ["dungpt", "haint", "hoangnv", "duyenpt"];
        
        // danh sách lơp học 
        //return "<h1>Xin chào $classname : $username</h1>";
        // compact
        // with
        // []
        //return view('hello2', compact('classname', 'username'));
        //return view('hello2')->with('class', $classname)->with('name',$username);
        return view('hello2',['class'=> $classname, 'name'=> $username, 'dssv'=>$dssv]);
    }
}