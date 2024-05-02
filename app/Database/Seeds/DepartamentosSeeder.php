<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        //php spark db:seed DepartamentosSeeder
        $data = [
            [
                'nombre' => 'Almacen',
                'descripcion' => 'La descripcion'
            ],
            [
                'nombre' => 'Contabilidad',
                'descripcion' => 'La descripcion'
            ],
            [
                'nombre' => 'Finanzas',
                'descripcion' => 'La descripcion'
            ],  [
                'nombre' => 'Recursos Humanos',
                'descripcion' => 'La descripcion'
            ],  [
                'nombre' => 'Sistemas',
                'descripcion' => 'La descripcion'
            ],  [
                'nombre' => 'Limpieza',
                'descripcion' => 'La descripcion'
            ]
        ];
        $this->db->table('departamentos')->insertBatch($data);
    }
}
