// myitem


Vue.component('myitem', {
    template:
    `


    <div class="col-md-6 col-lg-3 ">
        
        <div class="product">
            <a href="product-single.html" class="img-prod" @click='setIdProduct(itemid)'><img class="img-fluid" :src="img_producto" alt="Colorlib Template">
                <!--<span  v-if="itemStatus" class="status"> {{ itemPercent }} %</span>-->
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

                <!--<div class="d-flex">
                        <div  class="pricing">

                            <p class="price">
                                <span v-if="itemDiscount" class="mr-2 price-dc" v-bind:class="{ 'price-dc': itemDiscount }">
                                    $ {{ itemBaseAmount }}
                                </span>
                                <span v-if="itemDiscount" class="price-sale" >
                                    $ {{ itemBaseAmount - itemDiscountAmoun }}
                                </span>
                                <p v-if="!itemDiscount" class="price"><span>$ {{ itemBaseAmount }}</span></p>
                            </p>
                            
                        </div>
                </div>-->

                    <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                    </div>
                    
            </div>

        </div>

    </div>

    `,
    props: ['data'],
    data() {
        console.log('data hijo +>>>>>>', this.data)
        return {
            // itemStatus: this.data.itemStatus,
            // itemPercent: this.data.itemPercent,
            itemid: this.data.id_producto,
            itemNombre: this.data.nomb_producto,
            // itemDiscount: this.data.itemDiscount,
            itemBaseAmount: this.data.precio_producto,
            // itemDiscountAmoun: this.data.itemDiscountAmoun,
            img_producto : this.data.img_producto
        }
    },
    methods:{
        setIdProduct(i){
            localStorage.setItem('idProduct',i);
        }
    }

})




