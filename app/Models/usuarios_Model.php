<?php
namespace App\Models;
use CodeIgniter\Model;

Class usuarios_Model extends Model
{
protected $table = 'usuarios'; // nombre de la tabla
protected $primaryKey = 'id_usuario'; //identificador de la tabla
protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email',
'pass','perfil_id','baja', 'created_at']; //todos los campos de la tabla
}