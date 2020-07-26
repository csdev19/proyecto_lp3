

Vue.component('loginform', {
    template:
    `
        <div>

            <div id="formulario1" style="display: block">
                <form action="inicioSesion" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input
                            name="user"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Ejemplo: amorales357"
                            style="font-size: 14px"
                            v-model="userInput"
                        >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input
                            name="password"
                            type="password"
                            class="form-control"
                            id="exampleInputPassword1"
                            style="font-size: 14px"
                            placeholder="*****"
                            v-model="passwordInput"
                        >
                    </div>
                    <button
                        type="button"
                        class="btn btn-primary"
                        v-on:click="handleLogin()"
                    >Iniciar Sesión</button>
                </form>

                <div  v-if="displayError" class="alert alert-danger" role="alert">
                    "mensaje"
                </div>
            </div>
        </div>
    `,
    data() {
        return {
            displayError: false,
            userInput: '',
            passwordInput: '',
            dataUser: null
        }
    },
    methods: {
        handleLogin: function() {
            console.log("userInput", this.userInput);
            console.log("passwordInput", this.passwordInput);
            fetch(`${URL_BASE}getLogin?user=${this.userInput}&password=${this.passwordInput}`, {
                "method": "GET",
                "headers": {
                    "cookie": "PHPSESSID=csko4h9e7olag8kr7mgr4tsv55"
                }
            })
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                console.log("data", data)
                this.dataUser = data;
                // dataApp = data;
                // sessionStorage.setItem('usuario', JSON.stringify(this.dataUser))
                localStorage.setItem('usuario', JSON.stringify(this.dataUser))
                // Simulate an HTTP redirect:
                // window.location.replace("file:///C:/xampp/htdocs/proyecto_lp3/client/index.html");
            })
            .catch(err => {
                console.error(err);
            });


            /**
            {
                "status": "1",
                "msj": "Sin resultados."
            }
             * 
             */
        }
    }
})