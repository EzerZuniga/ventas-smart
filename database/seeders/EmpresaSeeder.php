<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::insert([
            'nombre' => 'Ezer Zuniga',
            'propietario' => 'Ezer Zuniga',
            'ruc' => '1089674538',
            'porcentaje_impuesto' => '15',
            'abreviatura_impuesto' => 'IGV',
            'direccion' => 'Av. Los Pinos n°789',
            'moneda_id' => 1
        ]);
    }
}
