<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $id }}">
    Edit
</button>



<div class="modal fade" id="exampleModal{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Komisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/agen/proses_update_commision/'.$id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="id" value="{{ $id }} ">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label>Nama Paket</label>
                            <select class="form-control" name="id_transaction" required>
                                <?php 
                                    $data_transaction = DB::table('transactions')->where('id', $id_transaction)->first(); 
                                    $packet = DB::table('packets')->where('id', $data_transaction->id_packet)->first(); 
                                    $customer = DB::table('users')->where('id', $data_transaction->id_user)->first(); 
                                ?>
                                <option value="<?= $data_transaction->id ?>"><?= $packet->name_packet ?> (<?= $data_transaction->departing_from ?>) (<?= $customer->name ?>)</option>
                                <?php
                                     $transaction = DB::table('transactions')
                                     ->select('transactions.id as id', 'name_packet', 'transactions.created_at', 'departing_from')
                                     ->join('packets', 'packets.id', '=', 'transactions.id_packet')
                                     ->where('packets.id_user', $id_user)
                                     ->where('transaction_status', "success")
                                     ->whereYear('transactions.created_at', date('Y'))
                                    ->whereMonth('transactions.created_at', date('m'))
                                     ->orderBy('transactions.id', 'desc')
                                     ->get();
                                ?>
                                <?php foreach($transaction as $v_transaction){ ?>
                                <?php 
                                    $nama_customer = DB::table('transactions')->join('users', 'users.id', '=', 'transactions.id_user')->where('transactions.id', $v_transaction->id)->first(); 
                                ?>
                                <option value="<?= $v_transaction->id ?>">
                                    <?= $v_transaction->name_packet ?> (<?= $v_transaction->departing_from ?>) (<?= $nama_customer->name ?>)
                                </option>
                                <?php } ?>
                            </select>
                            <br>
                        </div>
                        <div class="col">
                            <label>Nama Agen</label>
                            <select class="form-control" name="id_agens" required>
                                <option value="{{ $id_agens }}">{{ $name_agen }}</option>
                                <?php  
                                    $agen = DB::table('agens')
                                    ->where('agens.id_user', $id_user)
                                    ->get();
                                ?>
                                <?php foreach($agen as $v_agen) ?>
                                <option value="{{ $v_agen->id }}">{{ $v_agen->name_agen }}</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <label>Komisi</label>
                    <?php
                        $komisi = DB::table('money')->where('id_user', $id_user)->first();
                    ?>
                    <input class="form-control" name="grand_commision" type="text" value="{{ $komisi->commision }}" readonly><br>                                         
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>