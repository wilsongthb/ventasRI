<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class basicas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        #cargo
        DB::table("cargo")->insert(["descripcion" => "ADMINISTRADOR",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("cargo")->insert(["descripcion" => "CAJA",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("cargo")->insert(["descripcion" => "ALMACENERO",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("cargo")->insert(["descripcion" => "SURTIDOR",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        #estado
        DB::table("estado")->insert(["descripcion" => "PENDIENTE",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("estado")->insert(["descripcion" => "ATENDIDO",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("estado")->insert(["descripcion" => "PAGADO",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        #tipodocumento
        DB::table("tipodocumento")->insert(["descripcion" => "DNI",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("tipodocumento")->insert(["descripcion" => "RUC",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        #tipopersona
        DB::table("tipopersona")->insert(["descripcion" => "NATURAL",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);
        DB::table("tipopersona")->insert(["descripcion" => "JURIDICA",'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]);

    }
}
