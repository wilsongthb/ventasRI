<?php

use Illuminate\Database\Seeder;

class falsos_relacionales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedores = DB::table("proveedor")->get();
        $tipocomprobantes = DB::table("tipocomprobante")->get();
        $faker = Faker\Factory::create();
        #ordenentrada
        for ($i=0; $i < 100; $i++) { 
            DB::table("ordenentrada")->insert([
                "serie" => $faker->ean8(),
                "numero" => $faker->ean8(),
                "estado" => "0",
                "descripcion" => $faker->word." ".$faker->name,
                "id_proveedor" => $proveedores[random_int(1,count($proveedores)-1)]->id,
                "id_tipocomprobante" => $tipocomprobantes[random_int(1,count($tipocomprobantes)-1)]->id,
                'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
    }
}
