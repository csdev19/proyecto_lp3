

Vue.component('myhome', {
    template:
    `
    <div>

        <section id="home-section" class="hero">
            <div class="home-slider owl-carousel">
                <div class="slider-item" style="background-image: url(images/img1.jpg);">
                    <div class="overlay"></div>
                        <div class="container">
                            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                                <div class="col-md-12  text-center">
                                    <h1 class="mb-2">{{ title }}</h1>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        


    </div>
    `,
    data() {
        return {
            title: 'Productos 100% frescos & de calidad'
        }
    }
})