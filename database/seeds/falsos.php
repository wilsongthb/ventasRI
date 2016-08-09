<?php

use Illuminate\Database\Seeder;

class falsos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        #proveedor
        for ($i=0; $i < 50; $i++) { 
             DB::table("proveedor")->insert([
                 "ruc" => $faker->ean8(),
                 "razonsocial" => $faker->company,
                 "direccion" => $faker->address,
                 "nombrecomercial" => $faker->name,
                 "telfijo" => $faker->phoneNumber,
                 "email" => $faker->email,
                 "id_tipopersona" => "1",
                 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
             ]);
        }
        #familia
        for ($i=0; $i < 180; $i++) { 
            DB::table("familia")->insert([
                "descripcion" => strtoupper($faker->word),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
        #medida
        for ($i=0; $i < 180; $i++) { 
            DB::table("medida")->insert(["descripcion" => strtoupper($faker->word),'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        }
        #tipocomprobante
        for ($i=0; $i < 10; $i++) { 
            DB::table("tipocomprobante")->insert([
                "descripcion" => $faker->word,
                "abreviatura" => str_random(4),
                "activo" => "0",
                'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
    }
}