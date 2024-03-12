<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaleditBlog{{ $id }}">
    Edit
</button>

<!-- modal add blog -->
<div class="modal fade" id="modaleditBlog{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modaleditBlogLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaleditBlogLabel">Edit Deadline</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/agen/proses_update_deadline/'.$id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <?php $deadline = DB::table('settingdue_dates')->where('id', $id)->get(); ?>
                    @foreach($deadline as $v_deadline)
                        <input type="hidden" name="id_user" value="{{ $v_deadline->id_user }}"></input>
                        <label>Nama</label>
                        <input class="form-control" name="days" type="number" value="{{ $v_deadline->days }}" required><br>
                    @endforeach                                            
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<form class="d-inline" action="{{ url('/agen/delete_deadline/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>