<?php
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);
        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        //Empresas
        Permission::create([
            'name'          => 'Navegar empresas',
            'slug'          => 'empresas.index',
            'description'   => 'Lista y navega todos las empresas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un empresa',
            'slug'          => 'empresas.show',
            'description'   => 'Ve en detalle cada empresa del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de empresas',
            'slug'          => 'empresas.create',
            'description'   => 'Podría crear nuevos empresas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de empresas',
            'slug'          => 'empresas.edit',
            'description'   => 'Podría editar cualquier dato de un empresa del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar empresas',
            'slug'          => 'empresas.destroy',
            'description'   => 'Podría eliminar cualquier empresa del sistema',      
        ]);

            //empleados
        Permission::create([
            'name'          => 'Navegar empleados',
            'slug'          => 'empleados.index',
            'description'   => 'Lista y navega todos los empleados del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un empleado',
            'slug'          => 'empleados.show',
            'description'   => 'Ve en detalle cada empleado del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de empleados',
            'slug'          => 'empleados.create',
            'description'   => 'Podría crear nuevos empleados en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de empleados',
            'slug'          => 'empleados.edit',
            'description'   => 'Podría editar cualquier dato de un empleado del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar empleados',
            'slug'          => 'empleados.destroy',
            'description'   => 'Podría eliminar cualquier empleado del sistema',      
        ]);

        //cursos
        Permission::create([
            'name'          => 'Navegar cursos',
            'slug'          => 'cursos.index',
            'description'   => 'Lista y navega todos los cursos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un curso',
            'slug'          => 'cursos.show',
            'description'   => 'Ve en detalle cada curso del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de cursos',
            'slug'          => 'cursos.create',
            'description'   => 'Podría crear nuevos cursos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de cursos',
            'slug'          => 'cursos.edit',
            'description'   => 'Podría editar cualquier dato de un curso del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar cursos',
            'slug'          => 'cursos.destroy',
            'description'   => 'Podría eliminar cualquier curso del sistema',      
        ]);

        //notas
        Permission::create([
            'name'          => 'Navegar notas',
            'slug'          => 'notas.index',
            'description'   => 'Lista y navega todos los notas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un nota',
            'slug'          => 'notas.show',
            'description'   => 'Ve en detalle cada nota del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de notas',
            'slug'          => 'notas.create',
            'description'   => 'Podría crear nuevos notas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de notas',
            'slug'          => 'notas.edit',
            'description'   => 'Podría editar cualquier dato de un nota del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar notas',
            'slug'          => 'notas.destroy',
            'description'   => 'Podría eliminar cualquier nota del sistema',      
        ]);

    }
}