<?php $transaction = DB::table('transactions')->where('id', $id)->first() ?>

<?php if($transaction->transaction_status == "pending"){ ?>
    <form class="d-inline" action="{{ url('/agen/update_status_money/'.$id) }}" method="post">
        @csrf
        <button style="height:40px;" type="submit" name="submit" class="btn btn-success btn-sm">Diterima</button>
    </form>
<?php }else if($transaction->transaction_status == "SUDAH BAYAR"){ ?>
    
<?php }else if($transaction->transaction_status == "pending dp"){ ?>
    <form class="d-inline" action="{{ url('/agen/update_status_money_pending_dp/'.$id) }}" method="post">
        @csrf
        <button style="height:40px;" type="submit" name="submit" class="btn btn-success btn-sm">Diterima</button>
    </form>
<?php } ?>