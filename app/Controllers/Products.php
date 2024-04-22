<?php

namespace App\Controllers;

//tipos de rutas/ ya aca se puede mandar a  llamar la visstas que estan en la carpeta de view
class Products extends BaseController 
{
    public function index()
    {
        $data = ['title' => 'Catalogo de productos'];
        return view('plantilla/header', $data)
            . view('products/products_list', $data)
            . view('plantilla/footer', ['copy' => '2024']);
        // return view('products/products_list', $data);
    }
    public function show() {
        return "<h1>Detalles del producto</h1>";
    }
    public function show_by_id($id_product) {
        $data = [
            'title' => "Productos Por ID: $id_product",
            'id' => $id_product
        ];
        return view('plantilla/header', $data)
            . view('products/show_product', $data)
            . view('plantilla/footer', ['copy' => '2024']);
        // return "Detalles del producto por ID $id_product";
    }
    public function show_alpha($ctaegory, $id_product) {
        return "<h2>La categoria es: $ctaegory. <br> Con ID: $id_product </h2>";
    }
}