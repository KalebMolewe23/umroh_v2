<a href="{{ url('/agen/edit_itinery/'.$id) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">Edit</a>
<form class="d-inline" action="{{ url('/agen/delete_itinery/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>