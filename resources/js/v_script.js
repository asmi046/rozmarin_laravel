import IMask from 'imask';
import Swiper from 'swiper/bundle';
import lightGallery from 'lightgallery';

// import styles bundle
import 'swiper/css/bundle';
export default function v_script(){

    let burgerBtn = document.querySelector('.burger-btn');
    let headerPage = document.querySelector('#header');
    if(burgerBtn){
        burgerBtn.addEventListener('click', function(){
            headerPage.classList.toggle('show-menu');
        });
    }
    // подключение lightgallery
    let nlLightgalleryBox = document.querySelectorAll('.lightgallery-box');
    if(nlLightgalleryBox.length > 0){
        nlLightgalleryBox.forEach(lItem=>{
            lightGallery(lItem, {
                speed: 500,
            });
        });
    }

    const nlTelMask = document.querySelectorAll('.tel-mask');
    console.log(nlTelMask)
    if(nlTelMask.length > 0){
        nlTelMask.forEach(item=>{
            let mask = IMask(item, {mask: '+{7}(000)000-00-00'});
        });

    }

    let exSlider = document.querySelectorAll('.ex-slider');
    if(exSlider.length > 0){
        exSlider.forEach(exsl=>{
            let hSl = new Swiper(exsl, {
                // Optional parameters
                slidesPerView: 1,
                loop: true,
                speed: 1000,
                loopAdditionalSlides: 1,
                slidesPerGroup: 1,
                watchOverflow: false,
                spaceBetween: 20,

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                  },
                  pagination: {
                    clickable: true,
                    el: ".ex-slider-box .swiper-pagination",
                  },
                // breakpoints: {
                //     310: {
                //         spaceBetween: 10,
                //         slidesPerView: 2,
                //     },
                //     350: {
                //         spaceBetween: 20,
                //         slidesPerView: 2,
                //     },
                //     650: {
                //         spaceBetween: 20,
                //         slidesPerView: 3,
                //     },
                //     950: {
                //         spaceBetween: 20,
                //         slidesPerView: 4,
                //     }
                // }

            });
        })
    }



}
