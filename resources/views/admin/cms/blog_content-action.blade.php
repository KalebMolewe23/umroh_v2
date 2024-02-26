<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaleditBlog{{ $id }}">
    Edit
</button>
<?php $content = DB::table('blog_contents')->where('id', $id)->first(); ?>
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
            <form action="{{ url('/admin/edit_content/'.$id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" value="<?= $content->id_user ?>" name="id_user">
                    <label>Kategory</label>
                    <select class="form-control" name="id_category">
                    <?php $data_kategori = DB::table('blog_categories')->where('id', $content->id_category)->first(); ?>
                        <option value="<?= $data_kategori->id ?>"><?= $data_kategori->category_name ?></option>
                    <?php $kategori = DB::table('blog_categories')->get(); ?>
                    @foreach($kategori as $v_kategori)
                        <option value="<?= $v_kategori->id ?>"><?= $v_kategori->category_name ?></option>
                    @endforeach
                    </select>
                    <br>
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" value="<?= $content->title ?>"><br>
                    <label>Thumbnail</label><br>
                    <img src="{{ asset('assets/images_blog/'.$content->thumbnail) }}" width="100px">
                    <input type="file" class="form-control" name="thumbnail" value="<?= $content->thumbnail ?>"><br>
                    <label>Keterangan</label>
                    <textarea class="form-control" id="short_desc" name="short_desc" <?= $content->short_desc ?></textarea><br>
                    <label>Konten</label>
                    <textarea class="form-control" id="long_desc" name="long_desc" <?= $content->long_desc ?></textarea><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<form class="d-inline" action="{{ url('/admin/delete_content/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>

<script>
    ClassicEditor
        .create( document.querySelector( '#short_desc' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#long_desc' ) )
        .catch( error => {
            console.error( error );
        } );
</script>