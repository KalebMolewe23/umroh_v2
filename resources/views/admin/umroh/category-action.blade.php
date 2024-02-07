<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $id }}">
    Edit
</button>
<form class="d-inline" action="{{ url('/admin/delete_category/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>

<?php $category = DB::table('packet_categories')->where('id', $id)->first(); ?>

<div class="modal fade" id="exampleModal{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{ url('/admin/proses_update_category/'.$category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="id" value="{{ $category->id }} ">
                <div class="modal-body">
                    <label>Category Name</label>
                    <input class="form-control" name="categorie_name" type="text" maxlength="255" id="name_hotel" value="{{ $category->categorie_name }}" required><br>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>