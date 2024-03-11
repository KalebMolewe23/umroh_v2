<?php 
    $transaction = DB::table('transactions')
    ->select(DB::raw('SUM(grand_total) as total_grand_total'))
    ->join('users', 'users.id', '=', 'transactions.id_user')
    ->where('id_user', $id)
    ->where('transaction_status', 'success')
    ->first() ;

    
    ?>
    Rp. {{ number_format($transaction->total_grand_total) }}