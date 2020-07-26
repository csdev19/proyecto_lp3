// import * as constants from './utils/constants';

Vue.component('registerform', {
    template: 
    `
        <div>


            <div id="formulario2" >
                <form class="needs-validation" novalidate action="registro" method="post">
                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Nombres</label>
                            <input 
                                name="nombre" 
                                type="text" 
                                class="form-control" 
                                id="validationCustom01" 
                                required 
                                placeholder="Ejemplo: Carlos" 
                                style="font-size: 14px"
                                v-model="firstnameInput"
                            >
                            <div class="invalid-feedback">
                                Ingrese su nombre
                            </div>
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom02">Apellidos</label>
                            <input 
                                name="apellido" 
                                type="text" 
                                class="form-control"
                                id="validationCustom02" 
                                required 
                                placeholder="Ejemplo: López Martínez"
                                style="font-size: 14px"
                                v-model="lastnameInput"
                            >
                            <div class="invalid-feedback">
                                Ingrese su apellido
                            </div>
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom01">Usuario</label>
                            <input 
                                name="usuario" 
                                type="text" 
                                class="form-control"
                                id="validationCustom01" 
                                required 
                                placeholder="Ej: carlos@gmail.com"
                                style="font-size: 14px"
                                v-model="usuarioInput"
                            >
                            <div class="invalid-feedback">
                                Ingrese su usuario
                            </div>
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="validationCustom02">Contraseña</label>
                            <input 
                                name="contra" 
                                type="password" 
                                class="form-control"
                                id="validationCustom02"
                                required
                                v-model="passwordInput"
                            >
                            <div class="invalid-feedback">
                                Ingrese su contraseña
                            </div>
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" value="" 
                                id="invalidCheck" 
                                required
                            >
                            <label class="form-check-label" for="invalidCheck">
                                Declaro que he leído y acepto los términos y condiciones de Kathiplass.
                            </label>
                            <div class="invalid-feedback">
                                Debes aceptar los términos y condiciones.
                            </div>
                        </div>
                    </div>
                    <button 
                        class="btn btn-primary" 
                        type="button"
                        v-on:click="handleRegister()"
                    >Registrarse</button>
                </form>

            </div>


        </div>
    `,
    data() {
        return {
            firstnameInput: '',
            lastnameInput: '',
            usuarioInput: '',
            passwordInput: ''
        }
    },
    methods: {
        handleRegister() {
            console.log('antes')
            const body = {
                "user"     : this.usuarioInput,
                "password" : this.passwordInput,
                "nom_user" : this.firstnameInput,
                "ape_user" : this.lastnameInput
            }
            console.log({ body })

            fetch(`${URL_BASE}registrarUsuario`, {
                "method": "POST",
                "headers": {
                    "cookie": "PHPSESSID=csko4h9e7olag8kr7mgr4tsv55",
                    "content-type": "application/json"
                },
                "body": {
                    ...body
                }
            })
            .then(response => {
                console.log(response);
                return response.json()
            })
            .then(data => {
                console.log('data', data)
            })
            .catch(err => {
                console.error(err);
            });

            console.log('1')
        }   
    }
})


