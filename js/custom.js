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
    dots:false,
    margin:30,
    items:1
}).css({'opacity':1});
/*============= Form =============*/
$('.further').on('click', function(e){
    if(person_number >= 1){
        person_number++;
    }else{
        person_number = 1;
    }
    $('.campos input').val(person_number);
    calc_price();
    e.preventDefault();
});
$('.less').on('click', function(e){
    person = $('.campos input').val();
    if(person_number > 1){
        person_number--;
    }else{
        person_number = 1;
    }
    $('.campos input').val(person_number);
    calc_price();
    e.preventDefault();
});
function calc_price(){
    let calcPrice = price * person_number;
    let total_price = calcPrice.toLocaleString("en-US", { style: "currency", currency: "USD" });
    $('.price').val(total_price + ' USD');
}