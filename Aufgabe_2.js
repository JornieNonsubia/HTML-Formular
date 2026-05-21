import {Navigation,Pagination} from "swiper/modules";

import 'node_module/swiper/css';
import 'node_module/swiper/css/pagination';
import 'node_module/swiper/css/navigation';
import Swiper from "swiper";


    var swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    loop: true,
    cssMode: true,
    autoHeight: true,
    spaceBetween: 24,
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
    pagination: {
    el: ".swiper-pagination",
},
    keyboard: true,
});