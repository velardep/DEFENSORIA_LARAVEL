<?php
namespace App\Domain\Repositories;

use App\Domain\Entities\Permiso;
use Illuminate\Support\Facades\DB;

class RepositorioPermiso implements RepositorioPermisoInterface
{
    private $db;

    public function __construct()
    {
    }

    public function crear(Permiso $permisol)
    {
        // Lógica para crear un rol en la base de datos
    }

    public function actualizar(Permiso $permiso)
    {
        // Lógica para actualizar un rol en la base de datos
    }

    public function eliminar($idpermiso)
    {
        // Lógica para eliminar un rol
    }

    public function obtenerPorId($idpermiso)
    {
        // Lógica para obtener un rol por ID
    }


    public function obtenerTodos()
    {
        try {
            $permisos = DB::table('permiso')->get();
    
            return $permisos; 
        } catch (\Exception $e) {
            throw new \Exception("Error al obtener los permisos: " . $e->getMessage());
        }
    }
    

}
