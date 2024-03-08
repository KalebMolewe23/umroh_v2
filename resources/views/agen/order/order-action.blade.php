<?php
    $customer = DB::table('transactions')->join('users', 'users.id', '=', 'transactions.id_user')->where('transactions.id', $id)->first();
?>

<?= $customer->name; ?>