<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductosModel extends Model
{

  public function listarProductos() 
  {
    $consulta = $this->db->table('products');
    return $consulta->get()->getResultArray();
  }

  public function editarProducto($id,$name) 
  {
    $consulta = $this->db->table('products');

    $data = [
      'name' => $name,
    ];
    $consulta->where('products_pk', $id);
    $consulta->update($data);
  }

  public function eliminarProducto($id) 
  {
    $consulta = $this->db->table('products');
    $consulta->where('products_pk', $id);
    $consulta->delete();
  }
}
