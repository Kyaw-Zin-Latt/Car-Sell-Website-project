require('./bootstrap');
import ScrollReveal from 'scrollreveal';
import VenoBox from "venobox";

$('.slick').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: true,
    arrows : false,
    autoplay : true,
});

new VenoBox({
    selector: '.venobox',
    numeration: true,
    infinigall: true,
    share: true,
    spinner: 'rotating-plane'
});

ScrollReveal().reveal('.scroll-reveal',{
    origin: 'top',
    distance: '20px',
    duration: 1500,
    interval : 500,
    reset : true
});

ScrollReveal().reveal('.scroll-reveal-left',{
    origin: 'left',
    distance: '20px',
    duration: 1500,
    interval : 500,
    reset : true
});

ScrollReveal().reveal('.scroll-reveal-right',{
    origin: 'right',
    distance: '20px',
    duration: 1500,
    interval : 500,
    reset : true
});
