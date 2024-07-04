<?php
namespace App\Models;
use CodeIgniter\Model;

class ClientesModel extends Model
{

  public function listarClientes() 
  {
    $consulta = $this->db->table('customer');
    return $consulta->get()->getResultArray();
  }

  public function editarCliente($id,$name,$stock) 
  {
    $consulta = $this->db->table('customer');

    $data = [
      'name' => $name,
      'stock' => $stock
    ];
    $consulta->where('customer_pk', $id);
    $consulta->update($data);
  }

  public function eliminarCliente($id) 
  {
    $consulta = $this->db->table('customer');
    $consulta->where('customer_pk', $id);
    $consulta->delete();
  }
}
