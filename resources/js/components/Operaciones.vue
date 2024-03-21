<template>
    <div class=" contenido-form p-5">
            <h2 class="pb-3">Estás Iniciando una Publicación</h2>
            <div class="btn-group mb-5 mt-5" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" v-model="estado_propiedad" autocomplete="off" checked>
                <label class="btn btn-outline-warning" for="btnradio1">Alquiler</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" v-model="estado_propiedad" autocomplete="off">
                <label class="btn btn-outline-warning" for="btnradio2">Remate</label>
            </div>

            <div class="row mb-5 mt-5">
                <div class="col-6">
                <label for="tipo_inmueble">Tipo de inmueble</label>
                <select type="" class="form-select" id="tipo_inmueble" v-model="caracteristicas ">
                    <option value="1">Casa</option>
                    <option value="2">Departamento</option>
                    <option value="3">Oficina</option>
                    <option value="4">Terreno </option>
                    <option value="5">Local</option>
                </select>
                </div>
                <div class="col-6">
                    <!-- <label for="subtipo">Subtipo de inmueble</label>
                    <select type="" class="form-select selectores" id="subtipo">
                        <option value="1">Casa Playa</option>
                        <option value="2">Departamento</option>
                        <option value="3">Oficina</option>
                        <option value="4"> Terreno </option>
                        <option value="5">Local</option>
                    </select> -->
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
            
                </div>
                <div class="col-6">
                <button class="btn btn-primary">Guardar y Salir</button>
                <a class="btn btn-primary" href="#" @click="$emit('continuar', 2)">Continuar</a>
                </div>
            </div>
    </div>
</template>
<script>
import Caracteristicas from './Caracteristicas.vue';

export default {
    props:['caracteristicas'
    ],
    data() {
        return {
            caracteristicas: '',
            estado_propiedad: ''
          
        }
    }
}
</script>