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
                        
                        :estado_propiedad = "estado_propiedad"
                        :caracteristicas = "caracteristicas"
                        @updateEstadoPropiedad = "updateEstadoPropiedad"
                        @updateCaracteristica = "caracteristicas"
                        />
                    </template>
                    <template v-if="menu==2">
                        <ubicaciones
                        v-bind:ubicacionesData="ubicacionesData"
                        :direccion="ubicacionesData.direccion"
                        :selectedDepartment="ubicacionesData.selectedDepartment"
                        :selectedProvince="ubicacionesData.selectedProvince"
                        :selectedDistrict="ubicacionesData.selectedDistrict"
                        :departments="ubicacionesData.departments"
                        :provinces="ubicacionesData.provinces"
                        :districts="ubicacionesData.districts"
                        @continuar="continuar"
                        @updateUbicacionesData="actualizarDatosUbicaciones"
                        />
                    </template>
                    <template v-if="menu==3">
                        <caracteristicas
                        @continuar = "formulario.continuar"
                        :cantidad_rooms = "formulario.cantidad_rooms"
                        :cantidad_bathrooms = "formulario.cantidad_bathrooms"
                        :cantidad_garage = "formulario.cantidad_garage"
                        :titulo = "formulario.titulo"
                        :monto = "formulario.monto"
                        :descripcion = "formulario.descripcion"
                        :M2 = "formulario.M2"
                        @updateCantidadRooms="updateCantidadRooms"
                        @updateCantidadBathrooms="updateCantidadBathrooms"
                        @updateCantidadGarage="updateCantidadGarage"
                        @updateTitulo="updateTitulo"
                        @updateDescripcion="updateDescripcion"
                        @updateMonto="updateMonto"
                        @updateM2="updateM2"
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
            operaciones,
            ubicaciones,
            caracteristicas
        },
        data(){
            return {
                menu:1,
                formulario:{
                    cantidad_rooms: 0,
                    cantidad_bathrooms: 0,
                    cantidad_garage: 0,
                    titulo: '',
                    descripcion: '',
                    monto:0,
                    M2:0
                },
                ubicacionesData: {
                    direccion: '',
                    selectedDepartment: '',
                    selectedProvince: '',
                    selectedDistrict: '',
                    departments: [],  
                    provinces: [],  
                    districts: []
                }
            }
        },
        methods: {
            //operacion
            continuar(menu) {
                this.menu = menu
            },
            //ubicacion
            actualizarDatosUbicaciones(data) {
                this.ubicacionesData = data;
            },
            //caracteristicas
            updateCantidadRooms(cantidadRooms) {
                this.formulario.cantidad_rooms = cantidadRooms;
            },
            updateCantidadBathrooms(cantidadBathrooms) {
                this.formulario.cantidad_bathrooms = cantidadBathrooms;
            },
            updateCantidadGarage(cantidadGarage) {
                this.formulario.cantidad_garage = cantidadGarage;
            },
            updateTitulo(titulo) {
                this.formulario.titulo = titulo;
            },
            updateDescripcion(descripcion) {
                this.formulario.descripcion = descripcion;
            },
            updateMonto(monto){
                this.formulario.monto = monto;
            },
            updateM2(M2){
                this.formulario.M2 = M2;
            },
            updateEstadoPropiedad (estado_propiedad){
                this.estado_propiedad = estado_propiedad;
            },
            updateCaracteristica(caracteristicas){
                this.caracteristicas = caracteristicas;
            },
           
        }
    }
</script>
