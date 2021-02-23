<?php namespace App\Models;
use CodeIgniter\Model;

class Pedidos extends Model{
    function getPedidos(){
        $pedidos = $this->db->table('pedidos')
            ->select();
        return $pedidos->get()->getResultArray();
    }
}