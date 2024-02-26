<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Blog_category;
use App\Models\Blog_content;

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

    public function content_blog(){

        if (Auth::check()) {
            $userId = Auth::id();
            // Lakukan sesuatu dengan $userId
        } else {
            // Pengguna tidak masuk atau belum diautentikasi
        }

        $title = "informasi Konten Blog";

        $kategori = DB::table('blog_categories')->get();

        if(request()->ajax()){
            $data = DB::table('blog_contents')
            ->select('blog_contents.id', 'category_name', 'name', 'blog_contents.title', 'thumbnail', 'short_desc', 'long_desc')
            ->join('blog_categories', 'blog_categories.id', '=', 'blog_contents.id_category')
            ->join('users', 'users.id', '=', 'blog_contents.id_user')
            ->get();
    
            $data->map(function($item) {
                
                $item->thumbnail = asset('assets/images_blog/' . $item->thumbnail); // Sesuaikan dengan path Anda
        
                return $item;
            });
        
            return datatables()->of($data)
                ->addColumn('action', 'admin.cms.blog_content-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.cms.v_blog_content', ['id' => $userId, 'kategori' => $kategori, 'title' => $title]);

    }
    
    public function save_content_blog(Request $request){
        $data = Blog_content::create($request->all());

        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move('assets/images_blog/', $request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $data->save();
        }

        return redirect('/admin/content_blog')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit_content(Request $request, $id){
        $data = Blog_content::find($id);

        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move('assets/images_blog/', $request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $data->save();
        }

        $data->id_category  = $request->input('id_category');
        $data->id_user      = $request->input('id_user');
        $data->title        = $request->input('title');
        $data->short_desc   = $request->input('short_desc');
        $data->long_desc    = $request->input('long_desc');

        $data->save();

        return redirect('/admin/content_blog/')->with('success', 'Data Berhasil Diedit');
    }

    public function delete_content($id){
        Blog_content::where('id', $id)->delete();
        return redirect('/admin/content_blog/')->with('success', 'Data Berhasil Dihapus');
    }

}
