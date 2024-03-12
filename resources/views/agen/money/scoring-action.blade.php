<?php
    $scor = DB::table('ratings')->where('id', $id)->get();
    foreach($scor as $v_scor){
    if($v_scor->status == 0){
?>
    <form action="{{ url('/agen/proses_update_scoring_publis/'.$id) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-success">Publikasi</button>
    </form>
<?php 
    }else{
?>
    <form action="{{ url('/agen/proses_update_scoring_not_publis/'.$id) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Tidak Di-Publikasikan</button>
    </form>
<?php 
        } 
    }
?>