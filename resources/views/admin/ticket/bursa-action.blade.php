<!-- <a href="javascript:void(0)" data-toggle="tooltip" onClick="editFunct({{ $id }})" data-original-title="Edit" class="edit btn btn-success edit">Edit</a> -->
<a style="width:80px" href="{{ url('/admin/edit_ticket_bursa/'.$id) }}" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-success edit">Edit</a>
<form class="d-inline" action="{{ url('/admin/delete_ticket_bursa/'.$id) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="height:40px;" type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
</form>