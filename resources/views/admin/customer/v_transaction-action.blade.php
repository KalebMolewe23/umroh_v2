<?php 
    $transaction = DB::table('transactions')->where('id_user', $id)->get() ;
    $count = $transaction->count();
    if($count == null){
?>
<p>Rp. 0</p>
<?php }else{ ?>
<p>Rp. <?= number_format($transaction->departing_price) ?></p>

<?php } ?>