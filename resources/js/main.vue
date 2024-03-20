<template>
    <div>
        <div class="container">
            <div class="row align-items-top mt-5">
                <div class="col-4">
                    <div class="rounded border-1 sidebar-1">
                        <ul class="nav nav-pills flex-column">
                            <li @click="menu=1" class="list-group-item active1"><a href="#" class="text-decoration-none text-dark">Operación</a></li>
                            <li @click="menu=2" class="list-group-item active2"><a href="#" class="text-decoration-none text-dark">Ubicación</a></li>
                            <li @click="menu=3" class="list-group-item active2"><a href="#" class="text-decoration-none text-dark">Características</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    <template v-if="menu==1">
                        <operaciones
                        @continuar="continuar"
                        />
                    </template>
                    <template v-if="menu==2">
                        <ubicaciones
                        @continuar="continuar"
                        />
                    </template>
                    <template v-if="menu==3">
                        <caracteristicas
                        @continuar="continuar"
                        :cantidad_rooms="cantidad_rooms"
                        :cantidad_bathrooms="cantidad_bathrooms"
                        :cantidad_garage="cantidad_garage"
                        @updateCantidadRooms="updateCantidadRooms"
                        @updateCantidadBathrooms="updateCantidadBathrooms"
                        @updateCantidadGarage="updateCantidadGarage"
                        />
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import operaciones from './components/Operaciones.vue';
    import ubicaciones from './components/Ubicaciones.vue';
    import caracteristicas from './components/Caracteristicas.vue';
    export default {
        components: {
            operaciones, ubicaciones, caracteristicas
        },
        data(){
            return {
                menu:1,
                cantidad_rooms: 0,
                cantidad_bathrooms: 0,
                cantidad_garage: 0,
                formulario:{
                    // operacion:[],
                    // ubicacion:[],
                    // caracteristica:[],
                }
            }
        },
        methods: {
            continuar(menu) {
                this.menu = menu;
            },
            updateCantidadRooms(cantidadRooms) {
                this.cantidad_rooms = cantidadRooms;
            },
            updateCantidadBathrooms(cantidadBathrooms) {
                this.cantidad_bathrooms = cantidadBathrooms;
            },
            updateCantidadGarage(cantidadGarage) {
                this.cantidad_garage = cantidadGarage;
            }
        }
    }
</script>
