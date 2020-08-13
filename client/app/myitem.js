// myitem


Vue.component('myitem', {
    template:
    `

    <div class="col-md-6 col-lg-3">
        
        <div class="product">
            <a href="product-single.html" class="img-prod" @click='setIdProduct(itemid)'>
                <img class="img-fluid" :src="img_producto" alt="Colorlib Template">
                <span  v-if="itemStatus" class="status"> {{ itemPercent }} %</span>
                <div class="overlay"></div>
            </a>

            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{ itemNombre }}</a></h3>

                <div class="d-flex">
                    <div class="pricing">
                        <p class="price">
                            <span class="mr-2 price-sale">S/. {{itemBaseAmount}}</span>
                        </p>
                    </div>
                </div>
                <div class="bottom-area d-flex px-3">
                    <div class="m-auto d-flex">
    					<template v-if="showButtons[0]">
                            <a class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                <span><i class="ion-ios-menu"></i></span>
                            </a>
                        </template>
    					<template v-if="showButtons[1]">
                            <a class="buy-now d-flex justify-content-center align-items-center mx-1" v-on:click="handleShop()">
                            <span><i class="ion-ios-cart"></i></span>
                            </a>
                        </template>
    					<template v-if="showButtons[2]">
                            <a class="heart d-flex justify-content-center align-items-center">
                            <span><i class="ion-ios-heart"></i></span>
                            </a>
                        </template>
                    </div>
                    
            </div>

        </div>

    </div>




    `,
    props: ['data'],
    data() {
        return {
            itemStatus        : this.data.itemStatus,
            itemPercent       : this.data.itemPercent,
            itemNombre        : this.data.itemNombre,
            itemDiscount      : this.data.itemDiscount,
            itemBaseAmount    : this.data.precio_producto,
            itemDiscountAmoun : this.data.itemDiscountAmoun,
            img_producto      : this.data.img_producto,
            itemid            : this.data.id_producto,

            //
            showButtons       : [false, true, false]
        }
    },
    methods: {
        handleShop: function() {
			let shopList = localStorage.getItem('shopList');
            // $emit('change', $event.target.checked)
            this.$emit('shopevent', this.data)
        }
    },
    methods:{
        setIdProduct(i){
            localStorage.setItem('idProduct',i);
        }
    }

})


