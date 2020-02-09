$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor :true,
        centeredSlides: true,
        initialSlide: 2,
        slidesPerView: 'auto',
        coverflowEffect:{
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        }
    });
});