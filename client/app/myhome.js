

Vue.component('myhome', {
    template:
    `
    <div>

        <section id="home-section" class="hero">
            <div class="home-slider estilo_portada">
            <div class="slider-item" style="background-image: url(images/img1.jpg);">
                <div class="overlay"></div>
                <div class="container texto-class">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-md-12  text-center">
                            <h1 class="mb-2">{{ title }}</h1>
                            <h2 class="subheading mb-4">{{ subtitle }}</h2>
                            <p><a href="#" class="btn btn-primary">{{ action }}</a></p>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        


    </div>
    `,
    data() {
        return {
            title: 'Productos frezcos y de calidad',
            subtitle: 'Hacemos delivery',
            action: 'Compra ya'
        }
    }
})