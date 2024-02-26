<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Blog_category;

class BlogController extends Controller
{
    public function index(){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "informasi Konten Blog";

        if(request()->ajax()){
            return datatables()->of(DB::table('blog_categories')
            ->select('blog_categories.id', 'category_name')
            ->get())
            ->addColumn('action', 'admin.cms.category_blog-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.cms.v_blog', ['id' => $userId, 'title' => $title]);

    }

    public function save_blog(Request $request){
        $data = Blog_category::create($request->all());

        return redirect('/admin/blog')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_blog(Request $request, $id){
        $data = Blog_category::find($id);

        $data->category_name = $request->input('category_name');
        $data->save();

        return redirect('/admin/blog/')->with('success', 'Data Berhasil Diedit');
    }

    public function delete_blog($id){
        Blog_category::where('id', $id)->delete();
        return redirect('/admin/blog/')->with('success', 'Data Berhasil Dihapus');
    }

}
