<template>
    <div class="contenido-form p-5">
        <h2 class="pb-3">¿Dónde está ubicado tu inmueble?</h2>
        <div class="row pb-3">
            <label for="direction">Calle y Número de Casa</label>
            <input type="text" class="form-control ps-3 pe-2" name="direction" id="direction" v-model="direccion" @input="updateDireccion">
        </div>
        <div class="row mb-5">
            <div class="col-6">
                <label for="deparment_id">Departamento</label>
                <select v-model="seleccionarDeparmentoLocal" class="form-select selectores" id="deparment_id" name="deparment_id" @change="updateSelectedDeparment">
                    <option value="0">Selecciona un Departamento</option>
                    <option v-for="department in departments" :key="department.id" :value="department.id">{{ department.department }}</option>
                </select>  
            </div>
            <div class="col-6">
                <label for="province_id">Provincia</label>
                <select v-model="seleccionarProvinciaLocal" class="form-select selectores" id="province_id" name="province_id" @change="updateSelectedProvince">
                    <option value="0">Selecciona un Provincia</option>
                    <option v-for="province in provinces" :key="province.id" :value="province.id">{{ province.province }}</option>
                </select>  
            </div>
            <div class="col-6">
                <label for="district_id">Distrito</label>
                <select v-model="seleccionarDistritoLocal" class="form-select selectores" id="district_id" name="district_id" @change="updateSelectedDistrict">
                    <option value="0">Selecciona un distrito</option>
                    <option v-for="district in districts" :key="district.id" :value="district.id">{{ district.district }}</option>
                </select>  
            </div>
        </div>
        <h3>Seleccione Mapa</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d975.3039216150016!2d-77.0186832236784!3d-12.097381688901425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1710800716346!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
  export default {
    props: ['direccion', 'selectedDistrict','districts','selectedProvince','provinces','selectedDepartment','departments'],
    data() {
      return {
        seleccionarDistritoLocal: this.selectedDistrict,
        seleccionarProvinciaLocal: this.selectedProvince,
        seleccionarDeparmentoLocal: this.selectedDepartment,
      };
    },
    methods: {

        updateDireccion() {
            this.$emit('updateDireccion', this.direccion);
        },
        updateSelectedDistrict() {
            this.$emit('updateSelectedDistrict', this.seleccionarDistritoLocal);
        },
        updateSelectedProvince() {
            this.$emit('updateSelectedProvince', this.seleccionarProvinciaLocal);
        },
        updateSelectedDeparment() {
            this.$emit('updateSelectedDeparment', this.seleccionarDeparmentoLocal);
        },
        
    },
  
  };
  </script>
  