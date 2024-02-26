<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaleditBlog{{ $id }}">
    Edit
</button>
<?php $category = DB::table('blog_categories')->where('id', $id)->first(); ?>
<!-- modal add blog -->
<div class="modal fade" id="modaleditBlog{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modaleditBlogLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaleditBlogLabel">Tambah Data Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ url('/admin/edit_blog/'.$id) }}" method="post">
                @csrf
                <div class="modal-body">
                    <label>Kategory</label>
                    <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<form class="d-inline" action="{{ url('/admin/delete_blog/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>