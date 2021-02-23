<?php

namespace App\Models;

use CodeIgniter\Model;

class Clientes extends Model
{
    function getClientes()
    {
        $clientes = $this->db
            ->table('clientes');
        return $clientes->get()->getResultArray();
    }

    function getCliente($id)
    {
        $cliente = $this->db
            ->table('clientes')
            ->where(['id' => $id])
            ->get()->getRow();
        return $cliente;
    }

    function setCliente($id, $data)
    {
        $cliente = $this->db->table('clientes');

        if ($id == null) {
            $data['Saldo_Electronico'] = 0;
            return $cliente->insert($data);
        } else {
            return $cliente->set($data)
                ->where('id', $id)
                ->update();
        }
    }

    function deleteCliente($id)
    {
        $cliente = $this->db->table('clientes')
            ->where('id', $id)
            ->delete();

        return $cliente;
    }
}
