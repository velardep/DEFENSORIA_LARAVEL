<?php
namespace App\Domain\Repositories;

use App\Domain\Entities\Permiso;

interface RepositorioPermisoInterface
{
    public function crear(Permiso $permiso);
    public function actualizar(Permiso $permiso);
    public function eliminar($idpermiso);
    public function obtenerPorId($idpermiso);
    public function obtenerTodos();
}