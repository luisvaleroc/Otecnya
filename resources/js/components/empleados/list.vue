<template>
<div>
    <spinner v-show="loading"></spinner>
<table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">RUT</th>
              
              </tr>
            </thead>
            <tbody>


<tr  v-for="empleado in empleados">

                    <th scope="row">{{ empleado.id}}</th>
                    <td>{{ empleado.name}}</td>
                    <td>{{ empleado.rut}}</td>
                 

                </tr>

              
            </tbody>
          </table>

</div>


</template>

<script>
    import EventBus from '../../event-bus';
    export default {
        data(){
            return {
                empleados: [],
                loading: true
                
            }
        },
        created(){
            EventBus.$on('empleado-added', data =>{
                this.empleados.push(data)
            })

        },
        mounted() {
           // axios.get('http://127.0.0.1:8000/empleados').then(response => (this.empleados = response.data))
           let currentRoute = window.location.pathname
           axios
            .get(`http://127.0.0.1:8000${currentRoute}/empleados/`)
            .then((response) => {
                this.empleados = response.data
                this.loading = false
            })
           
           

        }
    }

    
</script>
