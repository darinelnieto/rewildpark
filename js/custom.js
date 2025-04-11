$(()=>{
    $('.campos input').val(person_number);
    calc_price();
});
/*============= Slide gallery =============*/
$('.gallery-slide').owlCarousel({
    autoplay:true,
    loop:true,
    nav:false,
    dots:false,
    margin:30,
    responsive:{
        0:{
            items:1
        },
        510:{
            items:2
        }
    }
}).css({'opacity':1});
/*============= Wild stories =============*/
$('.stories-slide').owlCarousel({
    autoplay:false,
    loop:false,
    nav:true,
    navText:[
        prev,
        next
    ],
    dots:false,
    margin:30,
    items:1
}).css({'opacity':1});
/*============= Form =============*/
$('.further').on('click', function(e){
    if(person_number >= 2){
        person_number++;
    }else{
        person_number = 2;
    }
    $('.campos input').val(person_number);
    calc_price();
    e.preventDefault();
});
$('.less').on('click', function(e){
    person = $('.campos input').val();
    if(person_number > 2){
        person_number--;
    }else{
        person_number = 2;
    }
    $('.campos input').val(person_number);
    calc_price();
    e.preventDefault();
});
$('.campos input').on('input', function(){
    person_number = $(this).val();
    if(person_number < 2){
        person_number = 2;
        $(this).val(person_number);
    }
    calc_price();
})
function calc_price(){
    let calcPrice = price * person_number;
    let total_price = calcPrice.toLocaleString("en-US", { style: "currency", currency: "USD" });
    $('.price').val(total_price + ' USD');
}
var wpcfFooter = document.querySelector( '.wpcf7' );
 
wpcfFooter.addEventListener( 'wpcf7submit', function() {
    var sms = 'Hola, soy ' + $('.full-name').val() + '. Quiero una reserva para ' + $('.campos input').val();
    var url = whatsapp_link+sms;
    window.open(url, '_blank');
    setTimeout(function() {
        location.reload();
    }, 2000);
}, false );