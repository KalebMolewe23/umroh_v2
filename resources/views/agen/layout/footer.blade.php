<?php $bg = DB::table('cms')->first(); ?>
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
        ©
        <script>
        document.write(new Date().getFullYear());
        </script>
        , made with ❤️ by
        <a href="" target="_blank" class="footer-link fw-bolder"><?= $bg->name_website ?></a>
    </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

    <script src="{{ asset('/assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('/assets/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/assets/admin/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/admin/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/admin/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>

    $(document).ready(function () {

        $('.data_user').select2();
        $('.data_packet').select2();

        $('#select-customer').on('select2:select', function(e) {
            var selectedOption = $(this).find(':selected');
            var name = selectedOption.data('name');
            var ktp = selectedOption.data('ktp');
            var email = selectedOption.data('email');
            var phone = selectedOption.data('phone');
            var father_name = selectedOption.data('father_name');
            var blood_groub = selectedOption.data('blood_groub');
            var born_place = selectedOption.data('born_place');
            var date_of_birth = selectedOption.data('date_of_birth');
            var marital_status = selectedOption.data('marital_status');
            var title = selectedOption.data('title');
            var gender = selectedOption.data('gender');
            var citizenship = selectedOption.data('citizenship');
            var id_province = selectedOption.data('id_province');
            var id_regencies = selectedOption.data('id_regencies');
            var address = selectedOption.data('address');
            var education = selectedOption.data('education');
            var job = selectedOption.data('job');
            var status_umroh = selectedOption.data('status_umroh');
            var passport_name = selectedOption.data('passport_name');
            var passport_number = selectedOption.data('passport_number');
            var passport_place = selectedOption.data('passport_place');
            var passport_date = selectedOption.data('passport_date');
            var expired = selectedOption.data('expired');
            var companion_name = selectedOption.data('companion_name');
            var connection = selectedOption.data('connection');

            $('#customer-name').val(name);
            $('#customer-ktp').val(ktp);
            $('#customer-email').val(email);
            $('#customer-phone').val(phone);
            $('#customer-father_name').val(father_name);
            $('#customer-blood_groub').val(blood_groub);
            $('#customer-born_place').val(born_place);
            $('#customer-date_of_birth').val(date_of_birth);
            $('#customer-marital_status').val(marital_status);
            $('#customer-title').val(title);
            $('#customer-gender').val(gender);
            $('#customer-citizenship').val(citizenship);
            $('#customer-id_province').val(id_province);
            $('#customer-id_regencies').val(id_regencies);
            $('#customer-address').val(address);
            $('#customer-education').val(education);
            $('#customer-job').val(job);
            $('#customer-status_umroh').val(status_umroh);
            $('#customer-passport_name').val(passport_name);
            $('#customer-passport_number').val(passport_number);
            $('#customer-passport_place').val(passport_place);
            $('#customer-passport_date').val(passport_date);
            $('#customer-expired').val(expired);
            $('#customer-companion_name').val(companion_name);
            $('#customer-connection').val(connection);
        });

        $('#select-packet').on('select2:select', function(e) {
            var selectedOptionPacket = $(this).find(':selected');
            var name_packet = selectedOptionPacket.data('name_packet');
            var quad_1 = selectedOptionPacket.data('quad_1');
            var triple_1 = selectedOptionPacket.data('triple_1');
            var double_1 = selectedOptionPacket.data('double_1');
            var dp = selectedOptionPacket.data('dp');

            $('#packet-name_packet').val(name_packet);
            $('#packet-quad_1').val(quad_1);
            $('#packet-triple_1').val(triple_1);
            $('#packet-double_1').val(double_1);
            $('#packet-dp').val(dp);
        });

        $("#id_maskapai").select2({
            placeholder:'Pilih Maskapai',
            ajax: {
                url:"{{ route('select_maskapai.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.id,
                                text: item.name_maskapai
                            }
                        })
                    }
                }
            }
        });

        $("#id_maskapai_homecoming").select2({
            placeholder:'Pilih Maskapai',
            ajax: {
                url:"{{ route('select_maskapai.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.id,
                                text: item.name_maskapai
                            }
                        })
                    }
                }
            }
        });

        $("#id_provider").select2({
            placeholder:'Pilih Provider',
            ajax: {
                url:"{{ route('select_provider.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.id,
                                text: item.name_provider
                            }
                        })
                    }
                }
            }
        });

        $("#id_departure_city").select2({
            placeholder:'Pilih Keberangkatan',
            ajax: {
                url:"{{ route('select_airport.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.code,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });
        
        $("#id_departure_city_arrival").select2({
            placeholder:'Pilih Keberangkatan',
            ajax: {
                url:"{{ route('select_airport.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.code,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });

        $("#id_departure_city_transit").select2({
            placeholder:'Pilih Keberangkatan',
            ajax: {
                url:"{{ route('select_airport.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.code,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });

        $("#id_homecoming_city").select2({
            placeholder:'Pilih Keberangkatan',
            ajax: {
                url:"{{ route('select_airport.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.code,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });

        $("#id_homecoming_city_arrival").select2({
            placeholder:'Pilih Keberangkatan',
            ajax: {
                url:"{{ route('select_airport.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.code,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });

        $("#id_homecoming_city_transit").select2({
            placeholder:'Pilih Keberangkatan',
            ajax: {
                url:"{{ route('select_airport.index') }}",
                processResults: function({data}){
                    return{
                        results: $.map(data, function(item){
                            return{
                                id: item.code,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });

        $('#price_ticket').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_ticket').submit(function () {
            var numericValue = $('#price_ticket').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#price_ticket').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#dp').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_ticket').submit(function () {
            var numericValue = $('#dp').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#dp').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#commision').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_commision').submit(function () {
            var numericValue = $('#commision').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#commision').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#cost').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_cost_branch').submit(function () {
            var numericValue = $('#cost').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#cost').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#dp_paket').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_paket_tiket').submit(function () {
            var numericValue = $('#dp_paket').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#dp_paket').val(numericValue);
        });
    });
    
    $(document).ready(function () {
        $('#quad_1').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#quad_1').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#quad_1').val(numericValue);
        });
    });
    
    $(document).ready(function () {
        $('#triple_1').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#triple_1').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#triple_1').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#double_1').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#double_1').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#double_1').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#quad_2').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#quad_2').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#quad_2').val(numericValue);
        });
    });
    
    $(document).ready(function () {
        $('#triple_2').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#triple_2').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#triple_2').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#double_2').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#double_2').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#double_2').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#quad_3').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#quad_3').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#quad_3').val(numericValue);
        });
    });
    
    $(document).ready(function () {
        $('#triple_3').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#triple_3').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#triple_3').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#double_3').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_hotel').submit(function () {
            var numericValue = $('#double_3').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#double_3').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#price_baby').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_money').submit(function () {
            var numericValue = $('#price_baby').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#price_baby').val(numericValue);
        });
    });
    
    $(document).ready(function () {
        $('#price_child').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_money').submit(function () {
            var numericValue = $('#price_child').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#price_child').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#price_adult').on('input', function () {
            var inputValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters
            var formattedValue = addCommas(inputValue); // Format with commas
            $(this).val(formattedValue);
        });
        
        function addCommas(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('#input_money').submit(function () {
            var numericValue = $('#price_adult').val().replace(/\D/g, ''); // Remove non-numeric characters
            $('#price_adult').val(numericValue);
        });
    });

    $(document).ready(function () {
        $('#uploadForm').submit(function (e) {
            // Photo file input
            var photoInput = $('#photo')[0];
            if (photoInput.files.length > 0 && photoInput.files[0].size > 5 * 1024 * 1024) {
                alert('Maaf ukuran file terlalu besar, maksimal 5MB.');
                e.preventDefault(); // Prevent form submission
                return;
            }

            // Video file input
            var videoInput = $('#video')[0];
            if (videoInput.files.length > 0 && videoInput.files[0].size > 20 * 1024 * 1024) {
                alert('Maaf ukuran video terlalu besar, maksimal 20MB');
                e.preventDefault(); // Prevent form submission
                return;
            }
        });
    });

</script>

<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
</script>
<script type="text/javascript">

    function button_hotel_type_2() {
        document.getElementById('type_2').style.display = 'block';
        document.getElementById('button_type_hotel_2').style.display = 'none';
    }

    function button_hotel_type_3() {
        document.getElementById('type_3').style.display = 'block';
        document.getElementById('button_type_hotel_3').style.display = 'none';
    }

    function button_departure() {
        document.getElementById('transit_departure').style.display = 'block';
        document.getElementById('button_departure_click').style.display = 'none';
    }

    function button_homecoming() {
        document.getElementById('transit_homecoming').style.display = 'block';
        document.getElementById('button_homecoming_click').style.display = 'none';
    }

    function button_tiket() {
        document.getElementById('tiket_group_1').style.display = 'block';
        document.getElementById('button_tiket_click').style.display = 'none';
        document.getElementById('tiket_group_2').style.display = 'none';
        document.getElementById('tiket_group_3').style.display = 'none';
        document.getElementById('tiket_group_4').style.display = 'none';
        document.getElementById('tiket_group_5').style.display = 'none';
        document.getElementById('tiket_group_6').style.display = 'none';
        document.getElementById('tiket_group_7').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_1() {
        document.getElementById('button_tiket_click').style.display = 'block';
        document.getElementById('tiket_group_1').style.display = 'none';
    }

    function button_tiket_1() {
        document.getElementById('tiket_group_2').style.display = 'block';
        document.getElementById('button_tiket_click_1').style.display = 'none';
        document.getElementById('tiket_group_3').style.display = 'none';
        document.getElementById('tiket_group_4').style.display = 'none';
        document.getElementById('tiket_group_5').style.display = 'none';
        document.getElementById('tiket_group_6').style.display = 'none';
        document.getElementById('tiket_group_7').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_2() {
        document.getElementById('button_tiket_click_1').style.display = 'block';
        document.getElementById('tiket_group_2').style.display = 'none';
    }

    function button_tiket_2() {
        document.getElementById('tiket_group_3').style.display = 'block';
        document.getElementById('button_tiket_click_2').style.display = 'none';
        document.getElementById('tiket_group_4').style.display = 'none';
        document.getElementById('tiket_group_5').style.display = 'none';
        document.getElementById('tiket_group_6').style.display = 'none';
        document.getElementById('tiket_group_7').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_3() {
        document.getElementById('button_tiket_click_2').style.display = 'block';
        document.getElementById('tiket_group_3').style.display = 'none';
    }

    function button_tiket_3() {
        document.getElementById('tiket_group_4').style.display = 'block';
        document.getElementById('button_tiket_click_3').style.display = 'none';
        document.getElementById('tiket_group_5').style.display = 'none';
        document.getElementById('tiket_group_6').style.display = 'none';
        document.getElementById('tiket_group_7').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_4() {
        document.getElementById('button_tiket_click_3').style.display = 'block';
        document.getElementById('tiket_group_4').style.display = 'none';
    }

    function button_tiket_4() {
        document.getElementById('tiket_group_5').style.display = 'block';
        document.getElementById('button_tiket_click_4').style.display = 'none';
        document.getElementById('tiket_group_6').style.display = 'none';
        document.getElementById('tiket_group_7').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_5() {
        document.getElementById('button_tiket_click_4').style.display = 'block';
        document.getElementById('tiket_group_5').style.display = 'none';
    }

    function button_tiket_5() {
        document.getElementById('tiket_group_6').style.display = 'block';
        document.getElementById('button_tiket_click_5').style.display = 'none';
        document.getElementById('tiket_group_7').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_6() {
        document.getElementById('button_tiket_click_5').style.display = 'block';
        document.getElementById('tiket_group_6').style.display = 'none';
    }

    function button_tiket_6() {
        document.getElementById('tiket_group_7').style.display = 'block';
        document.getElementById('button_tiket_click_6').style.display = 'none';
        document.getElementById('tiket_group_8').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_7() {
        document.getElementById('button_tiket_click_6').style.display = 'block';
        document.getElementById('tiket_group_7').style.display = 'none';
    }

    function button_tiket_7() {
        document.getElementById('tiket_group_8').style.display = 'block';
        document.getElementById('button_tiket_click_7').style.display = 'none';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function hapus_tiket_group_8() {
        document.getElementById('button_tiket_click_7').style.display = 'block';
        document.getElementById('tiket_group_8').style.display = 'none';
    }

    function button_tiket_8() {
        document.getElementById('tiket_group_9').style.display = 'block';
        document.getElementById('button_tiket_click_8').style.display = 'none';
    }

    function hapus_tiket_group_9() {
        document.getElementById('button_tiket_click_8').style.display = 'block';
        document.getElementById('tiket_group_9').style.display = 'none';
    }

    function button_hotel() {
        document.getElementById('hotel_1').style.display = 'block';
        document.getElementById('button_tiket_hotel').style.display = 'none';
    }

    function button_hotel_2() {
        document.getElementById('hotel_2').style.display = 'block';
        document.getElementById('button_tiket_hotel_2').style.display = 'none';
    }

    function button_hotel_3() {
        document.getElementById('hotel_3').style.display = 'block';
        document.getElementById('button_tiket_hotel_3').style.display = 'none';
    }

    function button_hotel_4() {
        document.getElementById('hotel_4').style.display = 'block';
        document.getElementById('button_tiket_hotel_4').style.display = 'none';
    }

    function button_hotel_5() {
        document.getElementById('hotel_5').style.display = 'block';
        document.getElementById('button_tiket_hotel_5').style.display = 'none';
    }

    function button_facilitas() {
        document.getElementById('facilitas_in').style.display = 'block';
        document.getElementById('button_paket_facilitas').style.display = 'none';
    }

    function button_facilitas_1() {
        document.getElementById('facilitas_in_2').style.display = 'block';
        document.getElementById('button_paket_facilitas_1').style.display = 'none';
    }

    function button_facilitas_2() {
        document.getElementById('facilitas_in_3').style.display = 'block';
        document.getElementById('button_paket_facilitas_2').style.display = 'none';
    }

    function button_facilitas_3() {
        document.getElementById('facilitas_in_4').style.display = 'block';
        document.getElementById('button_paket_facilitas_3').style.display = 'none';
    }

    function button_facilitas_4() {
        document.getElementById('facilitas_in_5').style.display = 'block';
        document.getElementById('button_paket_facilitas_4').style.display = 'none';
    }

    function button_facilitas_5() {
        document.getElementById('facilitas_in_6').style.display = 'block';
        document.getElementById('button_paket_facilitas_5').style.display = 'none';
    }

    function button_facilitas_6() {
        document.getElementById('facilitas_in_7').style.display = 'block';
        document.getElementById('button_paket_facilitas_6').style.display = 'none';
    }

    function button_facilitas_7() {
        document.getElementById('facilitas_in_8').style.display = 'block';
        document.getElementById('button_paket_facilitas_7').style.display = 'none';
    }

    function button_facilitas_8() {
        document.getElementById('facilitas_in_9').style.display = 'block';
        document.getElementById('button_paket_facilitas_8').style.display = 'none';
    }

    function button_facilitas_9() {
        document.getElementById('facilitas_in_10').style.display = 'block';
        document.getElementById('button_paket_facilitas_9').style.display = 'none';
    }

    function button_facilitas_10() {
        document.getElementById('facilitas_in_11').style.display = 'block';
        document.getElementById('button_paket_facilitas_10').style.display = 'none';
    }

    function button_facilitas_11() {
        document.getElementById('facilitas_in_12').style.display = 'block';
        document.getElementById('button_paket_facilitas_11').style.display = 'none';
    }

    function button_facilitas_12() {
        document.getElementById('facilitas_in_13').style.display = 'block';
        document.getElementById('button_paket_facilitas_12').style.display = 'none';
    }

    function button_facilitas_13() {
        document.getElementById('facilitas_in_14').style.display = 'block';
        document.getElementById('button_paket_facilitas_13').style.display = 'none';
    }

    function button_facilitas_14() {
        document.getElementById('facilitas_in_15').style.display = 'block';
        document.getElementById('button_paket_facilitas_14').style.display = 'none';
    }

    function button_facilitas_15() {
        document.getElementById('facilitas_in_16').style.display = 'block';
        document.getElementById('button_paket_facilitas_15').style.display = 'none';
    }

    function button_facilitas_16() {
        document.getElementById('facilitas_in_17').style.display = 'block';
        document.getElementById('button_paket_facilitas_16').style.display = 'none';
    }

    function button_facilitas_17() {
        document.getElementById('facilitas_in_18').style.display = 'block';
        document.getElementById('button_paket_facilitas_17').style.display = 'none';
    }

    function button_facilitas_18() {
        document.getElementById('facilitas_in_19').style.display = 'block';
        document.getElementById('button_paket_facilitas_18').style.display = 'none';
    }
    
    function button_out_facilitas() {
        document.getElementById('facilitas_out').style.display = 'block';
        document.getElementById('button_paket_facilitas_out').style.display = 'none';
    }

    function button_out_facilitas_1() {
        document.getElementById('facilitas_out_2').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_1').style.display = 'none';
    }

    function button_out_facilitas_2() {
        document.getElementById('facilitas_out_3').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_2').style.display = 'none';
    }

    function button_out_facilitas_3() {
        document.getElementById('facilitas_out_4').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_3').style.display = 'none';
    }

    function button_out_facilitas_4() {
        document.getElementById('facilitas_out_5').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_4').style.display = 'none';
    }

    function button_out_facilitas_5() {
        document.getElementById('facilitas_out_6').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_5').style.display = 'none';
    }

    function button_out_facilitas_6() {
        document.getElementById('facilitas_out_7').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_6').style.display = 'none';
    }

    function button_out_facilitas_7() {
        document.getElementById('facilitas_out_8').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_7').style.display = 'none';
    }

    function button_out_facilitas_8() {
        document.getElementById('facilitas_out_9').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_8').style.display = 'none';
    }

    function button_out_facilitas_9() {
        document.getElementById('facilitas_out_10').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_9').style.display = 'none';
    }

    function button_out_facilitas_10() {
        document.getElementById('facilitas_out_11').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_10').style.display = 'none';
    }

    function button_out_facilitas_11() {
        document.getElementById('facilitas_out_12').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_11').style.display = 'none';
    }

    function button_out_facilitas_12() {
        document.getElementById('facilitas_out_13').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_12').style.display = 'none';
    }

    function button_out_facilitas_13() {
        document.getElementById('facilitas_out_14').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_13').style.display = 'none';
    }

    function button_out_facilitas_14() {
        document.getElementById('facilitas_out_15').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_14').style.display = 'none';
    }

    function button_out_facilitas_15() {
        document.getElementById('facilitas_out_16').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_15').style.display = 'none';
    }

    function button_out_facilitas_16() {
        document.getElementById('facilitas_out_17').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_16').style.display = 'none';
    }

    function button_out_facilitas_17() {
        document.getElementById('facilitas_out_18').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_17').style.display = 'none';
    }

    function button_out_facilitas_18() {
        document.getElementById('facilitas_out_19').style.display = 'block';
        document.getElementById('button_paket_facilitas_out_18').style.display = 'none';
    }

    function button_condition() {
        document.getElementById('condition').style.display = 'block';
        document.getElementById('button_paket_condition').style.display = 'none';
    }

    function button_condition_1() {
        document.getElementById('condition_2').style.display = 'block';
        document.getElementById('button_paket_condition_1').style.display = 'none';
    }

    function button_condition_2() {
        document.getElementById('condition_3').style.display = 'block';
        document.getElementById('button_paket_condition_2').style.display = 'none';
    }

    function button_condition_3() {
        document.getElementById('condition_4').style.display = 'block';
        document.getElementById('button_paket_condition_3').style.display = 'none';
    }

    function button_condition_4() {
        document.getElementById('condition_5').style.display = 'block';
        document.getElementById('button_paket_condition_4').style.display = 'none';
    }

    function button_condition_5() {
        document.getElementById('condition_6').style.display = 'block';
        document.getElementById('button_paket_condition_5').style.display = 'none';
    }

    function button_condition_6() {
        document.getElementById('condition_7').style.display = 'block';
        document.getElementById('button_paket_condition_6').style.display = 'none';
    }

    function button_condition_7() {
        document.getElementById('condition_8').style.display = 'block';
        document.getElementById('button_paket_condition_7').style.display = 'none';
    }

    function button_condition_8() {
        document.getElementById('condition_9').style.display = 'block';
        document.getElementById('button_paket_condition_8').style.display = 'none';
    }

    function button_condition_9() {
        document.getElementById('condition_10').style.display = 'block';
        document.getElementById('button_paket_condition_9').style.display = 'none';
    }

    function button_condition_10() {
        document.getElementById('condition_11').style.display = 'block';
        document.getElementById('button_paket_condition_10').style.display = 'none';
    }

    function button_condition_11() {
        document.getElementById('condition_12').style.display = 'block';
        document.getElementById('button_paket_condition_11').style.display = 'none';
    }

    function button_condition_12() {
        document.getElementById('condition_13').style.display = 'block';
        document.getElementById('button_paket_condition_12').style.display = 'none';
    }

    function button_condition_13() {
        document.getElementById('condition_14').style.display = 'block';
        document.getElementById('button_paket_condition_13').style.display = 'none';
    }

    function button_condition_14() {
        document.getElementById('condition_15').style.display = 'block';
        document.getElementById('button_paket_condition_14').style.display = 'none';
    }

    function button_condition_15() {
        document.getElementById('condition_16').style.display = 'block';
        document.getElementById('button_paket_condition_15').style.display = 'none';
    }

    function button_condition_16() {
        document.getElementById('condition_17').style.display = 'block';
        document.getElementById('button_paket_condition_16').style.display = 'none';
    }

    function button_condition_17() {
        document.getElementById('condition_18').style.display = 'block';
        document.getElementById('button_paket_condition_17').style.display = 'none';
    }

    function button_condition_18() {
        document.getElementById('condition_19').style.display = 'block';
        document.getElementById('button_paket_condition_18').style.display = 'none';
    }

    function button_activity() {
        document.getElementById('activity_10').style.display = 'block';
        document.getElementById('button_paket_activity').style.display = 'none';
    }

    function button_activity_10() {
        document.getElementById('activity_11').style.display = 'block';
        document.getElementById('button_paket_activity_10').style.display = 'none';
    }

    function button_activity_11() {
        document.getElementById('activity_12').style.display = 'block';
        document.getElementById('button_paket_activity_11').style.display = 'none';
    }

    function button_activity_12() {
        document.getElementById('activity_13').style.display = 'block';
        document.getElementById('button_paket_activity_12').style.display = 'none';
    }

    function button_activity_13() {
        document.getElementById('activity_14').style.display = 'block';
        document.getElementById('button_paket_activity_13').style.display = 'none';
    }

    function button_activity_14() {
        document.getElementById('activity_14').style.display = 'block';
    }

    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    // function editFunct(id){
    //     $.ajax({
    //         type:"POST",
    //         url: "{{ url('/agen/edit_ticket_group') }}",
    //         data: { id: id },
    //         dataType: 'json',
    //         success: function(res){
    //             window.location.href = "{{ url('/agen/edit_ticket_group/') }}";
    //         }
    //     });
    // }

    $(document).ready(function (){

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ajax-crud-datatable-agen').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/get_agen') }}",
            columns: [
                { data: 'name_agen', name: 'name_agen' },
                { data: 'phone_agen', name: 'phone_agen' },
                { data: 'email_agen', name: 'email_agen' },
                { data: 'city', name: 'city' },
                { data: 'status', name: 'status' },
                { data: 'bank', name: 'bank' },
                { data: 'number_rek', name: 'number_rek' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-money-transaction').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/get_sale') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'transaction_code', name: 'transaction_code' },
                { data: 'created_at', name: 'created_at' },
                { data: 'due_date', name: 'due_date' },
                { data: 'payment_image', name: 'payment_image' },
                { data: 'room_type', name: 'room_type' },
                { data: 'departing_from', name: 'departing_from' },
                { data: 'grand_total', name: 'grand_total' },
                { data: 'transaction_status', name: 'transaction_status' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-datatable-partner').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/get_partner_branch') }}",
            columns: [
                { data: 'city', name: 'city' },
                { data: 'cost', name: 'cost' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/data_ticket_group') }}",
            columns: [
                { data: 'maskapai_code', name: 'maskapai_code' },
                { data: 'name_maskapai', name: 'name_maskapai' },
                { data: 'seat_capasitas', name: 'seat_capasitas' },
                { data: 'name_provider', name: 'name_provider' },
                { data: 'price_ticket', name: 'price_ticket' },
                { data: 'departure_date', name: 'departure_date' },
                { data: 'cityName', name: 'cityName' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-ticket-group').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/ticket_group') }}",
            columns: [
                { data: 'maskapai_code', name: 'maskapai_code' },
                { data: 'name_maskapai', name: 'name_maskapai' },
                { data: 'seat_capasitas', name: 'seat_capasitas' },
                { data: 'name_provider', name: 'name_provider' },
                { data: 'price_ticket', name: 'price_ticket' },
                { data: 'departure_date', name: 'departure_date' },
                { data: 'cityName', name: 'cityName' },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-bursa-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/bursa_ticket') }}",
            columns: [
                { data: 'maskapai_code', name: 'maskapai_code' },
                { data: 'name_maskapai', name: 'name_maskapai' },
                { data: 'seat_capasitas', name: 'seat_capasitas' },
                { data: 'ticket_type', name: 'ticket_type' },
                { data: 'price_ticket', name: 'price_ticket' },
                { data: 'departure_date', name: 'departure_date' },
                { data: 'cityName', name: 'cityName' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-bursa-ticket-agen-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/data_bursa_ticket') }}",
            columns: [
                { data: 'maskapai_code', name: 'maskapai_code' },
                { data: 'name_maskapai', name: 'name_maskapai' },
                { data: 'seat_capasitas', name: 'seat_capasitas' },
                { data: 'ticket_type', name: 'ticket_type' },
                { data: 'price_ticket', name: 'price_ticket' },
                { data: 'departure_date', name: 'departure_date' },
                { data: 'cityName', name: 'cityName' },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-crud-commision-transaction').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/get_commision') }}",
            columns: [
                { data: 'created_at', name: 'created_at' },
                { data: 'name_packet', name: 'name_packet' },
                { data: 'name_agen', name: 'name_agen' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-packet').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/data_packet') }}",
            columns: [
                { data: 'name_packet', name: 'name_packet' },
                { data: 'maskapai_name', name: 'maskapai_name' },
                { data: 'departure_city', name: 'departure_city' },
                { data: 'departure_date', name: 'departure_date' },
                { data: 'seat_capasitas', name: 'seat_capasitas' },
                { data: 'dp', name: 'dp' },
                { data: 'price_ticket', name: 'price_ticket' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-packet-umroh').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/data_packet_umroh') }}",
            columns: [
                { data: 'name_packet', name: 'name_packet' },
                { data: 'categorie_name', name: 'categorie_name' },
                { data: 'maskapai_code', name: 'maskapai_code' },
                { data: 'maskapai_name', name: 'maskapai_name' },
                { data: 'departure_city', name: 'departure_city' },
                { data: 'departure_date', name: 'departure_date' },
                { data: 'seat_capasitas', name: 'seat_capasitas' },
                { data: 'dp', name: 'dp' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-hotel-jeddah').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/jeddah_hotel') }}",
            columns: [
                { data: 'name_hotel', name: 'name_hotel' },
                { data: 'address', name: 'address' },
                { data: 'star', name: 'star' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-hotel-madinah').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/madinah_hotel') }}",
            columns: [
                { data: 'name_hotel', name: 'name_hotel' },
                { data: 'address', name: 'address' },
                { data: 'star', name: 'star' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-category').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/category_umroh') }}",
            columns: [
                { data: 'categorie_name', name: 'categorie_name' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-provider').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/provider') }}",
            columns: [
                { data: 'name_provider', name: 'name_provider' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-customer').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/data_customer') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-branch').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/information_branch') }}",
            columns: [
                { data: 'action', name: 'action', orderable: false },
                { data: 'name', name: 'name' },
                { data: 'cost', name: 'cost' },
                { data: 'created_at', name: 'created_at' },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-customer-travel').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/admin/data_customer_travel') }}",
            columns: [
                { data: 'travel_name', name: 'travel_name' },
                { data: 'name', name: 'name' },
                { data: 'employee_name', name: 'employee_name' },
                { data: 'number_umroh', name: 'number_umroh' },
                { data: 'address', name: 'address' },
                { data: 'email', name: 'email' },
                { data: 'is_verifition', name: 'is_verifition' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $('#ajax-data-itinerary').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/agen/get_itinerary') }}",
            columns: [
                { data: 'name_packet', name: 'name_packet' },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']]
        });

        $(".preloader").fadeOut();

        $('#provinsi').on('change', function() {
            var province_id = this.value;
            console.log(province_id);
            $('#kota').html('');
            $.ajax({
                url: '{{ route('agen/getRegencies') }}?province_id='+province_id,
                type: 'get',
                success: function (res){
                    $('#kota').html('<option value="">Pilih Daerah / Kota / Kabupaten</option>');
                    $.each(res, function (key, value) {
                        $('#kota').append('<option value="' + value.id + '"> ' + value.name + '</option>');
                    });
                }
            });
        });

        $('#id_hotel_mekah').on('change', function() {
          const selected    = $(this).find('option:selected');
          const address     = selected.data('address'); 
          const star        = selected.data('star'); 
          
          $("#address").val(address);
          $("#star").val(star);
        });

        $('#id_hotel_madinah').on('change', function() {
          const selected      = $(this).find('option:selected');
          const address_m     = selected.data('address_m'); 
          const star_m        = selected.data('star_m'); 
          
          $("#address_m").val(address_m);
          $("#star_m").val(star_m);
        });

        $('#maskapai').on('change', function() {
          const selected    = $(this).find('option:selected');
          const penerbangan = selected.data('penerbangan'); 
          const kota_save   = selected.data('kota_save'); 
          const kota        = selected.data('kota'); 
          const jadwal      = selected.data('jadwal'); 
          const durasi      = selected.data('durasi'); 
          const seat        = selected.data('seat');

          $("#penerbangan").val(penerbangan);
          $("#kota").val(kota);
          $("#kota_save").val(kota_save);
          $("#jadwal").val(jadwal);
          $("#durasi").val(durasi);
          $("#seat").val(seat);
        });

        $('#maskapai_1').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_1    = selected.data('penerbangan_1'); 
          const kota_1           = selected.data('kota_1'); 
          const jadwal_1         = selected.data('jadwal_1'); 
          const durasi_1         = selected.data('durasi_1'); 
          const seat_1           = selected.data('seat_1');

          $("#penerbangan_1").val(penerbangan_1);
          $("#kota_1").val(kota_1);
          $("#jadwal_1").val(jadwal_1);
          $("#durasi_1").val(durasi_1);
          $("#seat_1").val(seat_1);
        });

        $('#maskapai_2').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_2    = selected.data('penerbangan_2'); 
          const kota_2           = selected.data('kota_2'); 
          const jadwal_2         = selected.data('jadwal_2'); 
          const durasi_2         = selected.data('durasi_2'); 
          const seat_2           = selected.data('seat_2');

          $("#penerbangan_2").val(penerbangan_2);
          $("#kota_2").val(kota_2);
          $("#jadwal_2").val(jadwal_2);
          $("#durasi_2").val(durasi_2);
          $("#seat_2").val(seat_2);
        });

        $('#maskapai_3').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_3    = selected.data('penerbangan_3'); 
          const kota_3           = selected.data('kota_3'); 
          const jadwal_3         = selected.data('jadwal_3'); 
          const durasi_3         = selected.data('durasi_3'); 
          const seat_3           = selected.data('seat_3');

          $("#penerbangan_3").val(penerbangan_3);
          $("#kota_3").val(kota_3);
          $("#jadwal_3").val(jadwal_3);
          $("#durasi_3").val(durasi_3);
          $("#seat_3").val(seat_3);
        });

        $('#maskapai_4').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_4    = selected.data('penerbangan_4'); 
          const kota_4           = selected.data('kota_4'); 
          const jadwal_4         = selected.data('jadwal_4'); 
          const durasi_4         = selected.data('durasi_4'); 
          const seat_4           = selected.data('seat_4');

          $("#penerbangan_4").val(penerbangan_4);
          $("#kota_4").val(kota_4);
          $("#jadwal_4").val(jadwal_4);
          $("#durasi_4").val(durasi_4);
          $("#seat_4").val(seat_4);
        });

        $('#maskapai_5').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_5    = selected.data('penerbangan_5'); 
          const kota_5           = selected.data('kota_5'); 
          const jadwal_5         = selected.data('jadwal_5'); 
          const durasi_5         = selected.data('durasi_5'); 
          const seat_5           = selected.data('seat_5');

          $("#penerbangan_5").val(penerbangan_5);
          $("#kota_5").val(kota_5);
          $("#jadwal_5").val(jadwal_5);
          $("#durasi_5").val(durasi_5);
          $("#seat_5").val(seat_5);
        });

        $('#maskapai_6').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_6    = selected.data('penerbangan_6'); 
          const kota_6           = selected.data('kota_6'); 
          const jadwal_6         = selected.data('jadwal_6'); 
          const durasi_6         = selected.data('durasi_6'); 
          const seat_6           = selected.data('seat_6');

          $("#penerbangan_6").val(penerbangan_6);
          $("#kota_6").val(kota_6);
          $("#jadwal_6").val(jadwal_6);
          $("#durasi_6").val(durasi_6);
          $("#seat_6").val(seat_6);
        });

        $('#maskapai_7').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_7    = selected.data('penerbangan_7'); 
          const kota_7           = selected.data('kota_7'); 
          const jadwal_7         = selected.data('jadwal_7'); 
          const durasi_7         = selected.data('durasi_7'); 
          const seat_7           = selected.data('seat_7');

          $("#penerbangan_7").val(penerbangan_7);
          $("#kota_7").val(kota_7);
          $("#jadwal_7").val(jadwal_7);
          $("#durasi_7").val(durasi_7);
          $("#seat_7").val(seat_7);
        });

        $('#maskapai_8').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_8    = selected.data('penerbangan_8'); 
          const kota_8           = selected.data('kota_8'); 
          const jadwal_8         = selected.data('jadwal_8'); 
          const durasi_8         = selected.data('durasi_8'); 
          const seat_8           = selected.data('seat_8');

          $("#penerbangan_8").val(penerbangan_8);
          $("#kota_8").val(kota_8);
          $("#jadwal_8").val(jadwal_8);
          $("#durasi_8").val(durasi_8);
          $("#seat_8").val(seat_8);
        });

        $('#maskapai_9').on('change', function() {
          const selected         = $(this).find('option:selected');
          const penerbangan_9    = selected.data('penerbangan_9'); 
          const kota_9           = selected.data('kota_9'); 
          const jadwal_9         = selected.data('jadwal_9'); 
          const durasi_9         = selected.data('durasi_9'); 
          const seat_9           = selected.data('seat_9');

          $("#penerbangan_9").val(penerbangan_9);
          $("#kota_9").val(kota_9);
          $("#jadwal_9").val(jadwal_9);
          $("#durasi_9").val(durasi_9);
          $("#seat_9").val(seat_9);
        });

    });

</script>

  </body>
</html>