var swiper = new Swiper('.swiper-container', {
    keyboard: { enabled: true },
    initialSlide: 0,
    touchRatio: 0,
    // breakpoints: { 769: { slidesPerView: 2, slidesPerGroup: 2 } },
    scrollbar: { el: '.swiper-scrollbar' },
    navigation: { nextEl: '.swiper-button-next-unique', prevEl: '.swiper-button-prev-unique' },
    pagination: { el: '.swiper-pagination', clickable: true }
});

function change() {
    var offer = document.getElementById('numberSlides');
    offer.innerHTML = '0' + (swiper.realIndex + 1);
    // console.log(swiper.realIndex + 1);
    if ((swiper.realIndex + 1) == 1) {
        document.getElementById('numberSlides').style.left = "8.5%";
    }
    if ((swiper.realIndex + 1) == 2) {
        document.getElementById('numberSlides').style.left = "36%";
    }
    if ((swiper.realIndex + 1) == 3) {
        document.getElementById('numberSlides').style.left = "63%";
    }
}

change();
document.getElementById("prev").addEventListener("click", change);
document.getElementById("next").addEventListener("click", change);