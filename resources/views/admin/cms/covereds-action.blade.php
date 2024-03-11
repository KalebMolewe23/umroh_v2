<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaleditBlog{{ $id }}">
    Edit
</button>

<!-- modal add blog -->
<div class="modal fade" id="modaleditBlog{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modaleditBlogLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaleditBlogLabel">Edit Peliput</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/admin/proses_update_covered/'.$id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <?php $covered = DB::table('covereds')->where('id', $id)->get(); ?>
                        @foreach($covered as $v_convered)
                            <div class="col">
                                <label>Logo</label>
                                <input class="form-control" name="logo" type="file" value="{{ $v_convered->logo }}"><br>
                            </div>
                            <div class="col">
                                <label>Nama</label>
                                <input class="form-control" name="name_covered" type="text" placeholder="Masukkan Nama Peliput" value="{{ $v_convered->name_covered }}" id="name_covered" required><br>
                            </div>
                        @endforeach
                    </div>                                            
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<form class="d-inline" action="{{ url('/admin/delete_covered/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>