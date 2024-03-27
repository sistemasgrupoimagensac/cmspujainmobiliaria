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
                            :estado_propiedad="operacionesData.estado_propiedad"
                            :caracteristicas="operacionesData.caracteristicas"
                            @updateCaracteristicas="updateCaracteristicas"
                            @updateEstadoPropiedad="updateEstadoPropiedad"
                        />
                    </template>
                    <template v-if="menu==2">
                        <ubicaciones
                        :direccion="ubicacionesData.direccion" 
                        :selectedDistrict="ubicacionesData.selectedDistrict"
                        :selectedProvince="ubicacionesData.selectedProvince"
                        :selectedDepartment="ubicacionesData.selectedDepartment"
                        :districts="ubicacionesData.districts"
                        :provinces="ubicacionesData.provinces"
                        :departments="ubicacionesData.departments"
                        @updateDireccion="updateDireccion"
                        @updateSelectedDistrict="updateSelectedDistrict"
                        @updateSelectedProvince="updateSelectedProvince"
                        @updateSelectedDeparment="updateSelectedDeparment"
                        @continuar="continuar"
                        />
                    </template>
                    <template v-if="menu==3">
                        <caracteristicas
                        @continuar = "continuar"
                        :cantidad_rooms = "caracteristicasData.cantidad_rooms"
                        :cantidad_bathrooms = "caracteristicasData.cantidad_bathrooms"
                        :cantidad_garage = "caracteristicasData.cantidad_garage"
                        :titulo = "caracteristicasData.titulo"
                        :monto = "caracteristicasData.monto"
                        :descripcion = "caracteristicasData.descripcion"
                        :M2 = "caracteristicasData.M2"
                        @updateCantidadRooms="updateCantidadRooms"
                        @updateCantidadBathrooms="updateCantidadBathrooms"
                        @updateCantidadGarage="updateCantidadGarage"
                        @updateTitulo="updateTitulo"
                        @updateDescripcion="updateDescripcion"
                        @updateMonto="updateMonto"
                        @updateM2="updateM2"
                        @file-selected="handleFileSelected"
                        
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
                operacionesData:{
                    estado_propiedad: 1,
                    caracteristicas: 1,
                },
                ubicacionesData: {
                    direccion: '',
                    selectedDistrict: 0,
                    selectedProvince: 0,
                    selectedDepartment: 0,
                    districts:[],
                    provinces:[],
                    departments:[],
                },
                caracteristicasData:{
                    cantidad_rooms: 0,
                    cantidad_bathrooms: 0,
                    cantidad_garage: 0,
                    titulo: '',
                    descripcion: '',
                    monto:0,
                    M2:0
                },
            }
        },
        methods: {
                continuar(menu) {
                    this.menu = menu
                },
            //operacion
                updateEstadoPropiedad(estadoPropiedad) {
                    this.operacionesData.estado_propiedad = estadoPropiedad;
                },
                updateCaracteristicas(caracteristicas){
                    this.operacionesData.caracteristicas = caracteristicas;
                },
            //ubicacion
                updateDireccion(direccion) {
                    this.ubicacionesData.direccion = direccion;
                },
                updateSelectedDistrict(selectedDistrict) {
                    this.ubicacionesData.selectedDistrict = selectedDistrict;
                },
                updateSelectedProvince(selectedProvince) {
                    this.ubicacionesData.selectedProvince = selectedProvince;
                },
                updateSelectedDeparment(selectedDepartment) {
                    this.ubicacionesData.selectedDepartment = selectedDepartment;
                },
            //caracteristicas
                updateCantidadRooms(cantidadRooms) {
                    this.caracteristicasData.cantidad_rooms = cantidadRooms;
                },
                updateCantidadBathrooms(cantidadBathrooms) {
                    this.caracteristicasData.cantidad_bathrooms = cantidadBathrooms;
                },
                updateCantidadGarage(cantidadGarage) {
                    this.caracteristicasData.cantidad_garage = cantidadGarage;
                },
                updateTitulo(titulo) {
                    this.caracteristicasData.titulo = titulo;
                },
                updateDescripcion(descripcion) {
                    this.caracteristicasData.descripcion = descripcion;
                },
                updateMonto(monto){
                    this.caracteristicasData.monto = monto;
                },
                updateM2(M2){
                    this.caracteristicasData.M2 = M2;
                },
            //
            getDistricts(){
                axios.get(`/api/districts`)
                .then(response => {
                    this.ubicacionesData.districts = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los distritos:', error);
                });
            },
            getProvinces(){
                axios.get(`/api/provinces`)
                .then(response => {
                    this.ubicacionesData.provinces = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los distritos:', error);
                });
            },
            getDepartments(){
                axios.get(`/api/departments`)
                .then(response => {
                    this.ubicacionesData.departments = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los distritos:', error);
                });
            },
            handleFileSelected(file) {
            // Crear un objeto FormData para enviar el archivo al servidor
            let formData = new FormData();
            formData.append('file', file); // Añadir el archivo al FormData

            // Realizar una solicitud POST a la API para guardar el archivo
            axios.post('/api/upload', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data' // Establecer el tipo de contenido adecuado para archivos
                }
            }).then(response => {
                // Manejar la respuesta de la API, por ejemplo, obtener la URL del archivo guardado
                const imageUrl = response.data.imageUrl;

                // Actualizar el estado del componente con la URL del archivo guardado
                this.caracteristicasData.imageUrl = imageUrl;
            }).catch(error => {
                // Manejar cualquier error que ocurra durante la carga del archivo
                console.error('Error al cargar el archivo:', error);
            });
        }
        },
        mounted() {
            this.getDistricts();
            this.getProvinces();
            this.getDepartments();
        },
  
}
</script>
