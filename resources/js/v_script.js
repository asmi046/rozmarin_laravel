import IMask from 'imask';
import Swiper from 'swiper/bundle';
import lightGallery from 'lightgallery';

// import styles bundle
import 'swiper/css/bundle';
export default function v_script(){

    document.addEventListener('DOMContentLoaded', function(){
        // если имеется элемент с классом f-img-box, то запускаем у него анимацию
        let fImgBox = document.querySelector('.f-img-box');
        if(fImgBox){
            setTimeout(function(){
                fImgBox.classList.add('start-animation');
            }, 500);
        }
    })

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
            });
        })
    }

    // Переходы по якорям
    let nlAnchor = document.querySelectorAll('.anchor-link');

    if(nlAnchor.length > 0){
        nlAnchor.forEach(anchor=>{
            anchor.addEventListener('click', function(e){
                e.preventDefault();
                let url = anchor.getAttribute('href');
                let res  = url.match(/#[0-9a-zA-Z]*/g);
                if(res){
                    let port = document.querySelector(res[0]);
                    if(port){
                        port.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                          });
                    }else{
                        localStorage.setItem('anchorId', res[0]);
                        document.location.href = url.replace(/#[0-9a-zA-Z]*/g, '');
                    }

                }else{
                    document.location.href = url;
                }
            })
        });
    }
    // функция проверяет наличие в localStorage наличия поля с id якоря. Если есть, то переходит к якорю
    function flyToAnchor(){
        let anchorId = localStorage.getItem('anchorId');
        if(anchorId){
            let anchorElem = document.querySelector(anchorId);
            if(anchorElem){
                anchorElem.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                localStorage.removeItem('anchorId');
            }
        }
    }
    flyToAnchor();

    // код отвечающий за скольшение шапки
    let flyHeader = document.querySelector('#header');
    document.addEventListener('scroll', function () {
        if (window.pageYOffset > 3) {
            flyHeader.classList.add('header-fly');
        } else {
            flyHeader.classList.remove('header-fly');
        }
    });

}
