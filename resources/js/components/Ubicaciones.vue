<template>
 <div class="contenido-form p-5">
    <h2 class="pb-3">¿Dónde está ubicado tu inmueble?</h2>

    <div class="row pb-3">
        <label for="calle">Calle y Número de Casa</label>
        <input type="text" class="form-control" name="direction" id="direction">
    </div>


    <div class="row mb-5 ">
        <div class="col-6">
            <label for="tipo_inmueble">Departamento</label>
            <select v-model="selectedDepartment" @change="getProvinces" class="form-select selectores" id="department_id" name="department_id">
                <option value="">Selecciona un departamento</option>
                <option v-for="department in departments" :value="department.id">{{ department.department }}</option>
            </select>
        </div>
        <div class="col-6" v-if="provinces.length">
            <label for="subtipo">Provincia</label>
            <select v-model="selectedProvince" @change="getDistricts" class="form-select selectores" id="province_id" name="province_id">
                <option value="">Selecciona una provincia</option>
                <option v-for="province in provinces" :value="province.id">{{ province.province }}</option>
            </select>  
        </div>
        <div class="col-6" v-if="districts.length">
            <label for="subtipo">Distrito</label>
            <select v-model="selectedDistrict" class="form-select selectores" id="district_id" name="district_id">
                <option value="">Selecciona un distrito</option>
                <option v-for="district in districts" :value="district.id">{{ district.district }}</option>
            </select>  
        </div>
    </div>
    <h3>Seleccione Mapa</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d975.3039216150016!2d-77.0186832236784!3d-12.097381688901425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1710800716346!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <div class="row justify-content-between mt-5">
        <div class="col-6">
    
        </div>
        <div class="col-4 d-flex justify-content-between">
            <button class="btn btn-primary">Guardar y Salir</button>
            <a class="btn btn-primary" href="#" @click="$emit('continuar', 3)">Continuar</a>
            
        </div>
    </div>


</div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                selectedDepartment: '',
                selectedProvince: '',
                selectedDistrict: '',
                departments: [],  
                provinces: [],  
                districts: []
            }
        },
        methods:{
            getDepartments() {
                axios.get('/get-department')
                    .then(response => {
                        this.departments = response.data;
                    })
                    .catch(error => {
                        console.error('Error al obtener los departamentos:', error);
                    });
            },
            getProvinces() {
                axios.get(`/api/departments/${this.selectedDepartment}/provinces`)
                    .then(response => {
                        this.provinces = response.data;
                        this.districts = [];
                    })
                    .catch(error => {
                        console.error('Error al obtener las provincias:', error);
                    });
            },
            getDistricts() {
                axios.get(`/api/provinces/${this.selectedProvince}/districts`)
                    .then(response => {
                        this.districts = response.data;
                        // $('.selectores').select2();
                    })
                    .catch(error => {
                        console.error('Error al obtener los distritos:', error);
                    });
            }
        },
        mounted() {
            this.getDepartments();
        }
    }
</script>