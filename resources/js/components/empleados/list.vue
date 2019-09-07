<template>
<div>
    <spinner-component v-show="loading"></spinner-component>
<table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                
              </tr>
            </thead>
            <tbody>


<tr  v-for="empleado in empleados">

                    <th scope="row">{{ empleado.id}}</th>
                    <td>{{ empleado.name}}</td>
                    <td>{{ empleado.rut}}</td>
                    
                    <td><a class="btn btn-primary" href="/empleados/">Ver mas</a></td>
                    <td><a class="btn btn-primary" href="/empleados/{}/edit">Editar</a></td>
                    <td>
                       
                    </td>


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
           axios
            .get('http://127.0.0.1:8000/empleados/')
            .then((response) => {
                this.empleados = response.data
                this.loading = false
            })
           
           

        }
    }

    
</script>
