<?php

namespace App\Controllers;
use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index(): string
    {
        session()->set('mainPage', "Productos");

        $productosModel = new ProductosModel();
        $datosRenderizar = array('listadoProductos' => $productosModel->listarProductos());
        return view('productos', $datosRenderizar);
    }
}
