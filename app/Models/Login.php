<?php namespace App\Models;
use CodeIgniter\Model;

class Login extends Model{
    public function obtenerUsuario($data){
        $usuario = $this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}