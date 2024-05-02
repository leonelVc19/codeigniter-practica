<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartamentosModel;
use App\Models\EmpleadosModel;

class Empleados extends BaseController
{
    protected $helpers = ['form'];
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
        return view('empleados/index');
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function nuevo_vista()
    {
        //
        $departamentosModel = new DepartamentosModel();
        $data['departamentos'] = $departamentosModel->findAll();
        return view('empleados/nuevo', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function crear_empleado()
    {
        $reglas = [
            'clave' => 'required|min_length[5]|max_length[10]|is_unique[empleados.clave]',
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            // 'email' => 'valid_email',
            'departamento' => 'required|is_not_unique[departamentos.id]'
        ];

        if (!$this->validate($reglas)) {
        
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }
        $post = $this->request->getPost(
            [
                'clave',
                'nombre',
                'fecha_nacimiento',
                'telefono',
                'email',
                'departamento'
            ]
        );
        $empleadosModel = new EmpleadosModel();
        $empleadosModel->insert([
            'clave' => trim($post['clave']),
            'nombre' => trim($post['nombre']),
            'fecha_nacimiento' => $post['fecha_nacimiento'],
            'telefono' => trim($post['telefono']),
            'email' => trim($post['email']),
            'id_departamento' => trim($post['departamento']),
        ]);

        return redirect()->to('empleados');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function editar_vista($id = null)
    {
        //
        return view('empleados/editar');
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function editar_empleado($id = null)
    {
        //
        return redirect()->to('empleados');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
