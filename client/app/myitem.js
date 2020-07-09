// myitem


Vue.component('myitem', {
    template:
    `


    <div class="col-md-6 col-lg-3 ">
        <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
                <span  v-if="itemStatus" class="status"> {{ itemPercent }} %</span>
                <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{ itemNombre }}</a></h3>
                <div class="d-flex">
                    <div  class="pricing">
                        <p class="price">
                            <span 
                                v-if="itemDiscount"
                                class="mr-2 price-dc"
                                v-bind:class="{ 'price-dc': itemDiscount }"
                            >
                                $ {{ itemBaseAmount }}
                            </span>
                            <span
                                v-if="itemDiscount"
                                class="price-sale"
                            >
                                $ {{ itemBaseAmount - itemDiscountAmoun }}
                            </span>
                            <p v-if="!itemDiscount" class="price"><span>$ {{ itemBaseAmount }}</span></p>
                        </p>
                    </div>
                </div>
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
    data() {
        return {
            itemStatus: false,
            itemPercent: 30,
            itemNombre: 'Bell Pepper',
            itemDiscount: false,
            itemBaseAmount: 120,
            itemDiscountAmoun: 40
        }
    }
})




