var swiper = new Swiper('.home__newsWrapper', {
    // Default parameters
    slidesPerView: 4,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        // when window width is >= 640px
        760: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        1360: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },
    loop: true,
    centeredSlides: true,
});

/*


    const gallery = document.querySelector('.newsHome');
    const imageAll = [...document.querySelectorAll('.newsHome__single--image')];

    const images = imageAll.splice(1, imageAll.length - 2);

    let isDown = false;
    let point;
    let scrollLeft;

    images.forEach(image => window.addEventListener('load', () => {

        bound(image);

        gallery.addEventListener('mousedown', (e) => {
            isDown = true;
            point = e.pageX - gallery.offsetLeft;
            scrollLeft = gallery.scrollLeft;
            gallery.classList.add('grabbing');
        });
    
        gallery.addEventListener('mouseleave', () => {
            isDown = false;
        });
    
        gallery.addEventListener('mouseup', () => {
            isDown = false;
            gallery.classList.remove('grabbing');
        });
    
        gallery.addEventListener('mousemove', (e) => {
            if(!isDown) return; 
                e.preventDefault();
                const x = e.pageX - gallery.offsetLeft;
                const walk = x - point;
                gallery.scrollLeft = scrollLeft - walk;
                bound(image);
        });

        gallery.addEventListener('scroll', () => {
            bound(image);
        })
        
    }))

    function bound(element) {
        let rect = element.getBoundingClientRect()
        if(window.innerWidth > 1000) {
            if((rect.left > 100) && (rect.right < window.innerWidth - 90)) {
                element.style.opacity = 1;
            } else {
                element.style.opacity = 0.3;
            }
        } else return;
    } 

*/