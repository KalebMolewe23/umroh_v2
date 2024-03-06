let total_amout = $('.total-amount');
let price_quad = Number($('.price_quad_1').val());
let price_packet = Number($('.price_packet').val());
let subtotals = {
    adult: 0,
    child: 0,
    baby: 0
};
let price_keberangkatan = 0;

$('.room-type-post').val("Quad");

// search tipe hotel

$('.pesan-paket').click(function () {

    if (auth_id == "") {
        window.location.href = '/auth_user/register';
    }else{
        $('.pesan-group-area').remove();
        $('.quantity-area').show();
        $('.area-save').show();
        $(this).remove();
    }

});

$('.pesan-group').click(function () {
    let name_packet = $('.name-of-packet').html();
    window.open("https://api.whatsapp.com/send?phone=6289676315535&text=Saya tertarik dengan paket *" + name_packet + "*", "_blank");
});

$('body').on('click', '.save', function(){
    // declare var
    let due_date = $('.due_date').val();
    let payment_image = $('.payment_image').val();
    let room_type = $('.room-type-post').val();
    let hotel_type = $('.hotel-type-post').val();
    let departing_from = $('.departing-from-post').val();
    let grand_total = $('.total-amount-post').val();

    if (hotel_type == "") {
        hotel_type = $('.tipe-hotel').find('.col').find('.btn-active').data('type');
    }

    if (departing_from == "") {
        departing_from = $('.keberangkatan').find('.col').find('.btn-active').data('city');
        departing_price = 0;
    }

    let form = $('#form-send').serializeArray();

    // logic save data to transaction table
    $.ajax({
        url : "/home/store",
        type : "POST",
        data : {
            id_user : auth_id,
            id_packet : id_packet,
            due_date : due_date,
            payment_image : payment_image,
            room_type : room_type,
            hotel_type : hotel_type,
            departing_from : departing_from,
            grand_total : grand_total,
            detail : form,
            flag_transaction_code : flag_transaction_code
        },
        success:function(response){
            if (response.code == 200) {
                Swal.fire({
                    title: "Berhasil!",
                    text: response.message,
                    icon: "success"
                });

                setTimeout(() => {
                    if (flag_transaction_code == "OFF") {
                        window.location.href = '/agen/get_order';
                    }else{
                        window.location.href = '/user_profile?flag=true'
                    }
                }, 2000);
            }else{
                Swal.fire({
                    title: "Opps!",
                    text: response.message,
                    icon: "error"
                });
            }
        }
    })
});

$('.btn-tipe-hotel').click(function () {
    // hapus class btn-active
    $('.btn-tipe-hotel').removeClass('btn-active');
    $(this).addClass('btn-active');

    const tipe = $(this).data('tipe');
    const price = $(`.price_quad_${tipe}`).val();
    price_quad = Number(price);

    // load all price type
    let quad = $(`.price_quad_${tipe}`).val();
    let triple = $(`.price_triple_${tipe}`).val();
    let double = $(`.price_double_${tipe}`).val();

    total_amout.text(`Rp ` + formatNumberWithCommas(price));
    $('.total-amount-post').val('price');
    $('.hotel-type-post').val($(this).data('type'));

    $('.sekamar-quad').text(formatNumberWithCommas(quad));
    $('.sekamar-triple').text(formatNumberWithCommas(triple));
    $('.sekamar-double').text(formatNumberWithCommas(double));

    $('.tipe-kamar-quad').attr('data-price', quad);
    $('.tipe-kamar-triple').attr('data-price', triple);
    $('.tipe-kamar-double').attr('data-price', double);

    console.log('quad : ', quad);
    console.log('triple : ', triple);
    console.log('double : ', double);

    updateTotalAmount();
});

$('body').on('click', '.btn-tipe-kamar', function(){
    let price = $(this).attr('data-price');

    $('.room-type-post').val($(this).text());

    // hapus class btn-active
    $('.btn-tipe-kamar').removeClass('btn-active');
    $(this).addClass('btn-active');

    price_quad = Number(price);
    updateTotalAmount();
    
});

$('body').on('click', '.btn-keberangkatan', function(){
    let price = $(this).attr('data-price');
    let city = $(this).attr('data-city');
    
    // hapus class btn-active
    $('.btn-keberangkatan').removeClass('btn-active');
    $(this).addClass('btn-active');

    price_keberangkatan = Number(price);

    $('.departing-from-post').val(city);
    $('.departing-price-post').val(price);

    updateTotalAmount();
});

function parseFormattedNumber(value) {
    // Remove commas and parse as float
    return parseFloat(value.replace(/,/g, '')) || 0;
}

function formatNumberWithCommas(number) {
    // Format number with commas
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

function updateTotalAmount() {
    // Calculate the total amount based on subtotals
    let grandTotal = Object.values(subtotals).reduce((acc, curr) => acc + curr, 0);
    total_amout.text(`Rp ` + formatNumberWithCommas(grandTotal + price_quad + price_keberangkatan + price_packet));
    $('.total-amount-post').val(grandTotal + price_quad + price_keberangkatan + price_packet);
}

// Initialize the total amount when the page loads
$(document).ready(function () {
    updateTotalAmount();
});

$('.btn-plus, .btn-minus').click(function () {
    let age_category = $(this).data('age-category');
    let qty_html = $(this).closest('.col').find('.quantity');
    let qty_val = parseInt(qty_html.text(), 10);

    if ($(this).hasClass('btn-plus')) {
        qty_html.text(++qty_val);
    } else if (qty_val > 0) {
        qty_html.text(--qty_val);
    }

    // dynamic price
    let price = $(`.price_${age_category}`).val();
    let total = price * qty_val;
    let element_closest = $(this).parent().parent();

    element_closest.find('input[name="qty[]"]').val(qty_val);
    element_closest.find('input[name="price[]"]').val(price);
    element_closest.find('input[name="sub_total[]"]').val(total);

    // Update subtotal for the category
    subtotals[age_category] = total;

    // Calculate and update the total amount
    updateTotalAmount();
});