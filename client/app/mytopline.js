


Vue.component('mytopline', {
    template: 
    `
        <div>

            <div class="py-1 bg-primary">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                        <div class="col-lg-12 d-block">
                            <div class="row d-flex">
                                <div class="col-md pr-4 d-flex topper align-items-center">
                                    <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                    <span class="text">{{ numero_telefono }}</span>
                                </div>
                                <div class="col-md pr-4 d-flex topper align-items-center">
                                    <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                    <span class="text">contactosdulcekat@email.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    `,
    data() {
        return {
            numero_telefono: '+51 999 999 99'
        }
    }
})