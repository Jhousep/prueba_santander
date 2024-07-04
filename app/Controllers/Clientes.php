<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string
    {

        $clientesModel = new ClientesModel();
        session()->set('mainPage', "Clientes");
        $datosRenderizar = array('listadoClientes' => $clientesModel->listarClientes());
        return view('clientes', $datosRenderizar);
    }

    public function EditarCliente(){

        $clientesModel = new ClientesModel();
        $nombre_cliente = trim($this->request->getPost('cliente'));
    
        $clientesModel->editarCliente($cliente_pk, $nombre_cliente);  

        return redirect()->to(base_url('Clientes'));
    }

    public function EliminarCliente($cliente_pk){

        $clientesModel = new ClientesModel();
    
        $clientesModel->editarCliente($cliente_pk);  

        return redirect()->to(base_url('Clientes'));
    }
}
