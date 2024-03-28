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
                            :estado_propiedad="estado_propiedad"
                            :caracteristicas="caracteristicas"
                            @updateCaracteristicas="updateCaracteristicas"
                            @updateEstadoPropiedad="updateEstadoPropiedad"
                        />
                    </template>
                    <template v-if="menu==2">
                        <ubicaciones
                            :direccion="direccion" 
                            :selectedDistrict="selectedDistrict"
                            :selectedProvince="selectedProvince"
                            :selectedDepartment="selectedDepartment"
                            :districts="districts"
                            :provinces="provinces"
                            :departments="departments"
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
                            :cantidad_rooms = "cantidad_rooms"
                            :cantidad_bathrooms = "cantidad_bathrooms"
                            :cantidad_garage = "cantidad_garage"
                            :titulo = "titulo"
                            :monto = "monto"
                            :descripcion = "descripcion"
                            :M2 = "M2"
                            @updateCantidadRooms="updateCantidadRooms"
                            @updateCantidadBathrooms="updateCantidadBathrooms"
                            @updateCantidadGarage="updateCantidadGarage"
                            @updateTitulo="updateTitulo"
                            @updateDescripcion="updateDescripcion"
                            @updateMonto="updateMonto"
                            @updateM2="updateM2"

                            :urlImage="selectedImage" 
                            @file-selected="handleFileSelected"

                            @guardar-en-mysql="guardarDataMySQL"

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
          
                    estado_propiedad: 1,
                    caracteristicas: 1,
                    
                    direccion: '',
                    selectedDistrict: 0,
                    selectedProvince: 0,
                    selectedDepartment: 0,
                    districts:[],
                    provinces:[],
                    departments:[],
           
              
                    cantidad_rooms: 1,
                    cantidad_bathrooms: 1,
                    cantidad_garage: 1,
                    titulo: '',
                    descripcion: '',
                    monto:0,
                    M2:0,
                    selectedImage: null
            
            }
        },
        methods: {
                continuar(menu) {
                    this.menu = menu
                },
            //operacion
                updateEstadoPropiedad(estadoPropiedad) {
                    this.estado_propiedad = estadoPropiedad;
                },
                updateCaracteristicas(caracteristicas){
                    this.caracteristicas = caracteristicas;
                },
            //ubicacion
                updateDireccion(direccion) {
                    this.direccion = direccion;
                },
                updateSelectedDistrict(selectedDistrict) {
                    this.selectedDistrict = selectedDistrict;
                },
                updateSelectedProvince(selectedProvince) {
                    this.selectedProvince = selectedProvince;
                },
                updateSelectedDeparment(selectedDepartment) {
                    this.selectedDepartment = selectedDepartment;
                },
            //caracteristicas
                updateCantidadRooms(cantidadRooms) {
                    this.cantidad_rooms = cantidadRooms;
                },
                updateCantidadBathrooms(cantidadBathrooms) {
                    this.cantidad_bathrooms = cantidadBathrooms;
                },
                updateCantidadGarage(cantidadGarage) {
                    this.cantidad_garage = cantidadGarage;
                },
                updateTitulo(titulo) {
                    this.titulo = titulo;
                },
                updateDescripcion(descripcion) {
                    this.descripcion = descripcion;
                },
                updateMonto(monto){
                    this.monto = monto;
                },
                updateM2(M2){
                    this.M2 = M2;
                },
                handleFileChange(event) {
                    this.selectedImage.file = event.target.files[0];
                },
            getDistricts(){
                axios.get(`/api/districts`)
                .then(response => {
                    this.districts = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los distritos:', error);
                });
            },
            getProvinces(){
                axios.get(`/api/provinces`)
                .then(response => {
                    this.provinces = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los distritos:', error);
                });
            },
            getDepartments(){
                axios.get(`/api/departments`)
                .then(response => {
                    this.departments = response.data;
                })
                .catch(error => {
                    console.error('Error al obtener los distritos:', error);
                });
            },
            handleFileSelected(file) {
                this.selectedImage = file;
            },
            guardarDataMySQL(){
                let datosParaEnviar = {
                    status_property_id : this.estado_propiedad,
                    category_id : this.caracteristicas,
                    district_id : this.selectedDistrict,
                    name : this.titulo,
                    rooms : this.cantidad_rooms,
                    garage : this.cantidad_garage,
                    square_meters : this.M2,
                    bathrooms : this.cantidad_bathrooms,
                    price : this.monto,
                    description : this.descripcion,
                    status : 1,
                    imagen: this.selectedImage
                };
                axios.post('/product/create', datosParaEnviar)
                    .then(response => {
                        console.log('Datos guardados en MySQL:', response.data);
                    })
                    .catch(error => {
                        console.error('Error al guardar los datos en MySQL:', error);
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
