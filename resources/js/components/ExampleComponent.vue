<template>
   <div>
    <div class="page_header_up">
        <ul class="nav-menu">
          <li>
            <div class="logo-top">
              <a href="index.html" class="logo"><img src="img/icon DevBlog 1.png" alt=""></a>
            </div>
          </li>
          <li><a href="instruction.html" class="nav-item">Создайте свой блог</a></li>
          <li><a href="#" class="nav-item">Найти блог</a></li>
          <li><a href="#" class="nav-item">Мои блоги</a></li>
        </ul>
      </div>


    <div class="wrapper">
        <div class="content">
            <header class="hero-section">
                <img data-speed=".6" class="hero" src="img/hero.png" alt="Alt">
                 
            <div class="contaner">
                <div data-speed=".75" class="main-header">
                    <h1 class="main-title">Developer blog</h1>
                </div>
            </div>
            </header>
           
            <div class="portfolio">
                <div class="container">
                    <main class="gallery">
                        <div data-speed=".9" class="gallery__left">
                            <img class="gallery__item" src="img/work/1.jpg" alt="Alt">
                            <img class="gallery__item" src="img/work/2.jpg" alt="Alt">
        
                            <div class="text-block gallery__item">
                                <h2 class="text-block__h">Комментируйте и лайкате блоги других пользователей</h2>
                                <p class="text-block__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                     amount scrolling.</p>
                            </div>
                            <img class="gallery__item" src="img/work/6.jpg" alt="Alt">
        
                        </div>
                        <div data-lag=".5" data-speed="1.1" class="gallery__right">
        
                            <div class="text-block gallery__item">
                                <h2 class="text-block__h">Создавайте свои блоги</h2>
                                <p class="text-block__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                     amount scrolling.</p>
                            </div>
        
                            <img class="gallery__item" src="img/work/4.jpg" alt="Alt">
                            <img class="gallery__item" src="img/work/5.jpg" alt="Alt">
                            <img class="gallery__item" src="img/work/3.jpg" alt="Alt">
        
                        </div>
                    </main>
                </div>
            </div>
        
        </div>
        
    </div>
   



   </div>
</template>

<script>
    export default {
        mounted() {
            gsap.registerPlugin(ScrollTrigger, ScrollSmoother)


if(ScrollTrigger.isTouch !==1) {
    ScrollSmoother.create({
        wrapper: '.wrapper',
        content: '.content',
        smooth: 1.5,
        effects: true
    })
    gsap.fromTo('.hero-section', { opacity: 1 }, {
        opacity: 0,
        scrollTrigger: {
            trigger: '.hero-section',
            start: 'center',
            end: '820',
            scrub: true
        }
    })
    
   let itemsL = gsap.utils.toArray('.gallery__left .gallery__item')
   itemsL.forEach(item => {
    gsap.fromTo(item, { x: -50, opacity: 0 }, {
        opacity: 1, x: 0,
        scrollTrigger: {
            trigger: item,
            start: '-850',
            end: '-100',
            scrub: true
        }
    })
   });

   let itemsR = gsap.utils.toArray('.gallery__right .gallery__item')
   itemsR.forEach(item => {
    gsap.fromTo(item, { x: 50, opacity: 0 }, {
        opacity: 1, x: 0,
        scrollTrigger: {
            trigger: item,
            start: '-850',
            end: '-100',
            scrub: true
        }
    })
   });

}


        }
    }
</script>
