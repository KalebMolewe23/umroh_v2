<template>
    <div class="box1">
    </div>

    <div class="container">
        <div class="card">
            <div class="row"><br>
                <div class="column">
                    Lokasi Keberangkatan
                </div>
                <div class="column">
                    Waktu Keberangkatan
                </div>
                <div class="column">
                    Biaya Umroh
                </div>
                <div class="column">
                    <input class="input_disabled" disabled>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <select type="text">
                        <option> Silahkan Pilih Lokasi </option>
                    </select>
                </div>
                <div class="column">
                    <select type="text">
                        <option> Silahkan Pilih Waktu </option>
                    </select>
                </div>
                <div class="column">
                    <select type="text">
                        <option> Silahkan Pilih Biaya </option>
                    </select>
                </div>
                <div class="column">
                    <button><i class='bx bx-search-alt'></i> Cari Paket Umroh</button>
                </div>
            </div>
        </div><br><br>
        <h4 class="h4_title">Paket Umroh dengan Keberangkatan Paling Awal</h4><br>
        <div class="row_paket" v-for="v_product in product">
            <div class="column_paket">
                <a :href="`/product/${v_product.id}`" style="color: black">
                    <div class="card_paket">
                        <img :src="'assets/image_travel/'+v_product.image" class="img_paket">
                        <h4 class="h4_money">{{ v_product.name_packet }}</h4>
                        <div class="processing">
                            <div class="processing-bar" data-bar="85">
                                <p class="p_proses">Processing 85%</p>
                            </div>
                        </div><br>
                        <h5 class="h5_paket_money">Harga Rp {{ v_product.price_ticket }}</h5><br><hr>
                        <div class="row_isi_paket">
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-calendar' ></i> {{ v_product.departure_date }}</h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-hotel' ></i><i class='bx bxs-star' ></i> {{ v_product.star }} </h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-plane-alt' ></i> {{ v_product.maskapai_name }}</h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-time'></i> 9 Hari</h4>
                            </div>
                            <div class="column_isi_paket">
                                <h4><i class='bx bxs-map' ></i> {{ v_product.departure_city }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <button type="button" class="info_lanjut">Lihat Lebih Banyak</button>
    </div>
</template>

<script>
    export default {
        props:{
            product: Array
        }
    }
</script>

<style scoped>
    
</style>