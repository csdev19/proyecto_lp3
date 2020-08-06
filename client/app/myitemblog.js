
Vue.component('myitemblog', {
    template:
    `
    <div>

        <div class="col-md-12 d-flex ">
            <div class="blog-entry align-self-stretch d-md-flex">
                <a href="blog-single.html" class="block-20" v-bind:style="{ backgroundImage: 'url(' + imagen + ')' }">
                </a>
                <div class="text d-block pl-md-4">
                    <div class="meta mb-3">
                        <div><a href="#">{{ fecha }}</a></div>
                        <div><a href="#">{{ writedBy }}</a></div>
                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span>{{ numberMesages }}</a></div>
                    </div>
                    <h3 class="heading"><a href="#">{{ principalText }}</a></h3>
                    <p>{{ descriptionText }}</p>
                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">{{ actionBtn }}</a></p>
                </div>
            </div>
        </div>

    </div>
    `,
    props: ['data'],
    data() {
        return {
            actionBtn: this.data.actionBtn,
            principalText: 'principal',
            descriptionText: 'descripcion',
            imagen: this.data.image,
            fecha: 'July 20, 2019',
            writedBy: this.data.writedBy,
            numberMesages: '4'
        }
    }
})




