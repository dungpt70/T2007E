<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // trả về trang hiển thị danh sách => view (index)
        //1. lấy dữ liệu
        //Book::all(): lấy tất cả bản ghi trong bảng books
        //$books = Book::all();
        // paginate(1): mỗi trang chỉ trả về tối đa 1 bản ghi
        $books = Book::paginate(1);
        /*
        $books = DB::table('books')->join('categories', 'books.category_id','=','categories.id')
        ->select(['books.name','books.title','books.author','books.id','books.price','books.publish','categories.name as cate_name'])
            ->get();
            */
        //dd($books);
        //2. trả về view
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //trả về giao diện thêm mới  => view (create)
        // lấy thông tin liên quan 
        $categories = Category::all();
        // 2. trả về view
        return view('book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "store";
        // thực hiện thêm mới => route
        // 1. từ request: validate server
        $validated = $request->validate([
            "tensach" => ["required", "min:10", "max:500"],
            "author" => "required|max:100",
            "title"=>["required", "max:500"],
            "price"=> "required|numeric|min:0.0",
            "publish"=>"required"
        ],[
            "tensach.required"=>"Trường tên sách không được để trống",
            "tensach.min"=>"Trường tên sách độ dài tối thiểu là 10 ký tự",
            "tensach.max"=>"Trường tên sách độ dài tối đa là 500 ký tự",
            "price.required"=>"Trường giá không được để trống",
            "price.numeric"=>"Trường giá phải là số",
            "price.min"=>"Trường giá phải là số >= 0",
        ]);
        // 2. tạo đối tượng (save) hoặc tạo mảng (create)
        $obj = new Book();
        $obj->name = $request->tensach;
        $obj->author = $request->author;
        $obj->title = $request->title;
        $obj->price = $request->price;
        $obj->publish = $request->publish;
        $obj->category_id = $request->category_id;
        
        // 3. Thực hiện lưu
        $res = $obj->save();
        
        /*
        Book::create([
            'name' => $request->tensach,
            'author' => $request->author,
            'title' => $request->title,
            'price' => $request->price,
            
        ]);
        */
        // 4. trả về route /book
        if ($res){
            return redirect()->route('book.index')->with('message','Thêm mới thành công');
        } else {
            echo "Thêm mới không thành công";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //hiển thị giao diện xem chi tiết => view(show)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //hiển thị giao diện sửa => view (edit)
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //cập nhật thông tin => route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xóa 1 bản ghi => string | route
    }
}
