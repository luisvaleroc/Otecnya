<template>
    <div class="modal fade" id="addEmpleado" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Empleado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form @submit.prevent="saveEmpleado">
                <div class="form-group">
                    <label>Empleado</label>
                    <input type="text" class="form-control" placeholder="Ingresa el nombre del Empleado" v-model="name">
                </div>
                <div class="form-group">
                    <label>RUT</label>
                    <input type="text" class="form-control" placeholder="Ingresa el RUT del Empleado" v-model="rut" >
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
import EventBus from '../../event-bus';
export default {
    data(){
        return {
            name: null,
            rut: null
        }
    },
    methods: {
        saveEmpleado: function() {
            let currentRoute = window.location.pathname;
            console.log(currentRoute)
            axios.post(`http://127.0.0.1:8000${currentRoute}/empleados/`, {
                name: this.name,
                rut: this.rut
            })
            .then(function(response){
                console.log(response)
                $('#addEmpleado').modal('hide')
                EventBus.$emit('empleado-added', response.data.empleado)
            })
            .catch(function(err){
                console.log(err)
            });
            
        }
    }

}	
</script>

<style>
	.top-space{
		margin-top: 20px
	}
</style>

