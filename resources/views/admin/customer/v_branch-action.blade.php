<?php 
    $travel = DB::table('informasi_travels')->where('id_user', $id_user)->get() ;
    foreach($travel as $v_travel){
?>

<p><?= $v_travel->travel_name ?></p>

<?php } ?>