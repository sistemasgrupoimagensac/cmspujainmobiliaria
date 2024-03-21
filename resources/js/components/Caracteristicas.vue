<template>
    <div class="contenido-form p-5">
        <h2 class="pb-3">Estamos creado el anuncio</h2>
        <h2>Caracteristicas</h2>
        <div class="container-fluid">
            <div class="row justify-content-start">                              
                    <div class="col-6">
                        <h5 class="d-inline">Habitaciones (Opcional)</h5>
                        <div class="col-4 d-flex amount-box">
                        <button class="btn menos img-fluid" @click="disminuirCantidadRooms"></button>
                        <input type="" class="form-control" name="cantidad_rooms" id="cantidad_rooms" v-model="cantidad_rooms">
                        <button class="btn mas img-fluid" @click="aumentarCantidadRooms"></button>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="d-inline">Baños (Opcional)</h5>
                        <div class="col-4 d-flex amount-box">
                        <button class="btn menos" @click="disminuirCantidadBathrooms"><img src="" class="img-fluid"  alt=""></button>
                        <input type="" class="form-control" name="bathrooms" id="bathrooms" v-model="cantidad_bathrooms">
                        <button class="btn mas" @click="aumentarCantidadBathrooms"><img src="img/vector/mas" class="img-fluid" alt=""></button>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-start mb-3">                              
                <div class="col-6">
                    <h5 class="d-inline">Garage (Opcional)</h5>
                    <div class="col-4 d-flex amount-box">
                    <button class="btn menos img-fluid" @click="disminuirCantidadGarage"><img src="" class="img-fluid"  alt=""></button>
                    <input type="" class="form-control" name="garage" id="garage" v-model="cantidad_garage">
                    <button class="btn mas img-fluid" @click="aumentarCantidadGarage"><img src="img/vector/mas" class="img-fluid" alt=""></button>
                    </div>
                </div>
                <div class="col-6">
                
                </div>
            </div>
            <div class="row justify-content-start">                              
                <div class="col-3">
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" >m2</span>
                        <input type="text" class="form-control" v-model="M2" @input="updateM2">
                    </div>
                </div>
                
            </div>
            <div class="row justify-content-start"> 
                <div class="col-3">                      
                    <div class="input-group mb-3">
                        <span class="input-group-text" >S/</span>
                        <input type="text" class="form-control" v-model="monto" @input="updateMonto">
                    </div>
                </div>                  
            </div>
        </div>
        <h3>Descripción</h3>
        <div class="mb-3 col-8">
            <span class="text">Título</span>
            <input type="text" class="form-control" v-model="titulo" placeholder="" @input="updateTitulo">
        </div>
        <div class="col-8 form-floating">
            <span class="text">Descripción</span>
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" v-model="descripcion" @input="updateDescripcion"></textarea>
        </div>
        <div class="row justify-content-between mt-5">
            <div class="col-6">
        
            </div>
            <div class="col-4 d-flex justify-content-between">
                <button class="btn btn-primary">Guardar y Salir</button>
                <button class="btn btn-primary">Continuar</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                cantidad_rooms: 0,
                cantidad_bathrooms: 0,
                cantidad_garage: 0,
                titulo:'',
                descripcion:'',
                monto:0,
                M2:0
            }
        },
        props: ['cantidad_rooms', 'cantidad_bathrooms', 'cantidad_garage','titulo', 'descripcion','monto','m2'],
        methods:{
            aumentarCantidadRooms() {
                this.$emit('updateCantidadRooms', this.cantidad_rooms ++);
            },
            disminuirCantidadRooms() {
                if (this.cantidad_rooms > 0) {
                    this.$emit('updateCantidadRooms', this.cantidad_rooms --);
                }
            },
            aumentarCantidadGarage(){
                this.$emit('updateCantidadGarage',this.cantidad_garage++);            
            },
            disminuirCantidadGarage(){
                if (this.cantidad_rooms > 0) {
                    this.$emit('updateCantidadGarage', this.cantidad_rooms --);
                }
            },
            aumentarCantidadBathrooms(){
                this.$emit('updateCantidadBathrooms',this.cantidad_bathrooms ++); 
            },
            disminuirCantidadBathrooms(){
                if (this.cantidad_bathrooms > 0) {
                    this.$emit('updateCantidadBathrooms',this.cantidad_bathrooms --); 
                }
            },
            updateTitulo() {
                this.$emit('updateTitulo', this.titulo);
            },

            updateDescripcion() {
                this.$emit('updateDescripcion', this.descripcion);
            },
            updateMonto(){
                this.$emit('updateMonto', this.monto);
            },
            updateM2(){
                this.$emit('updateM2',this.M2);
            }
        }
    }
</script>
