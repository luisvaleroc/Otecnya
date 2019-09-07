<template>
<div>
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
                    
                    <td><a class="btn btn-primary" href="/empresas/">Ver mas</a></td>
                    <td><a class="btn btn-primary" href="/empresas/{}/edit">Editar</a></td>
                    <td>
                       
                    </td>


                </tr>




              
                
         
              
            </tbody>
          </table>

</div>



 
 




</template>

<script>
    export default {
        data(){
            return {
                empleados: [
                    {id: 1, name: "jose"},
                    {id: 2, name: "carlos"}
                ]
            }
        },
        mounted() {
            axios.get('').then(response=> (this.empleados = response.data))
        }
    }

    
</script>
