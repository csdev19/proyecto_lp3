

Vue.component('myheader', {
    template: 
    `
        <div>

            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="index.html">DULCEKAT</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="shop.html">Productos</a>
                        </div>
                        </li>
                        <li class="nav-item"  v-if="showOptions.opt2"><a href="about.html" class="nav-link">Nosotros</a></li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Contactanos</a></li>
                        <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    `,
    data() {
        return {
            showOptions: {
                opt2: false
            }
        }
    }
})