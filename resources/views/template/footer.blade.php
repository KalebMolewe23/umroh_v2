<footer>
<div class="container_footer">
        <div class="wrapper">
            <div class="footer-widget">
                <a href="#">
                    <img src="https://assets.umroh.com/borobudur/img/logo.4e02be2.png" class="logo" width="150px">
                </a>
                <p class="desc">
                    Perkenalkan, kami dari tim eresta developer menawarkan kalian untuk jasa dalam pembuatan, pengembangan, dan custome website maupun android. Sesuai dengan kebutuhan anda.
                </p>
                <ul class="socials">
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxl-tiktok'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Quick Link</h6>
                <ul class="links">
                    <li><a href="/"> Home</a></li>
                    <li><a href=""> Project</a></li>
                    <li><a href=""> Portofolio</a></li>
                    <li><a href=""> About</a></li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Services</h6>
                <ul class="links">
                    <li>Web Design</li>
                    <li>Web Development</li>
                    <li>Seo Optimization</li>
                    <li>Logo & Banner</li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6>Help &amp; Support</h6>
                <ul class="links">
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright-wrapper">
            <p>Copyright © 2023
                <a href="#" target="blank">Umroh.com</a>
            </p>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
<script src="{!! asset('assets/home/lightbox-plus-jquery.js') !!}"></script>
<!-- <script src="{!! asset('assets/home/swiper-bundle.min.js') !!}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
  
        //------ Slider Begin
            const CaroS = document.querySelector('.Carousel-slider');
            const CaroSlider = new MicroSlider(CaroS, { indicators: true, indicatorText: '' });
            const hammer = new Hammer(CaroS);
            const CaroSTimer = 2000;
            let CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
            
        //------- Mouseenter Event
            CaroS.onmouseenter = function(e) {
                clearInterval(CaroAutoplay); 
                console.log(e.type + ' mouse detected');
            }
        
        //----- Mouseleave Event
            CaroS.onmouseleave = function(e) {
                clearInterval(CaroAutoplay); 
                CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
                console.log(e.type + ' mouse detected');
            }
        
        //----- Mouseclick Event
            CaroS.onclick = function(e) {
                clearInterval(CaroAutoplay); 
                console.log(e.type + ' mouse detected');
            }
        
        //------ Gesture Tap Event
            hammer.on('tap', function(e) {
                clearInterval(CaroAutoplay);
                console.log(e.type + ' gesture detected');
            });
        
        //----- Gesture Swipe Event
            hammer.on('swipe', function(e) {
                clearInterval(CaroAutoplay); 
                CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
                console.log(e.type + ' gesture detected');
            });

        let slideLink = document.querySelectorAll('.slider-item');
        if (slideLink && slideLink !== null && slideLink.length > 0){
            slideLink.forEach( el => el.addEventListener('click', e => {
            e.preventDefault();
            let href = el.dataset.href;
            let target = el.dataset.target;
            if (href !== '#') window.open(href, target);
            }));
        }
        
        //---- Slider End
        
        });
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open')
    }

    document.addEventListener('DOMContentLoaded', function() {
        const processing = document.querySelector('.processing-bar');

        setTimeout(() => {
            if (processing !== null) {
                processing.style.opacity = 1;
                processing.style.width = processing.getAttribute('data-bar') + '%';
            }
        }, 500)
    });

    function tambah() {
        let harga = document.getElementById('harga');
        harga.value = parseInt(harga.value) * 2;
    }

    function kurang() {
        let harga = document.getElementById('harga');
        if (parseInt(harga.value) > 0) {
            harga.value = parseInt(harga.value) / 2;
        }
    }

</script>

</body>
</html>