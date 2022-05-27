<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uf')->insert(['id' => 11,'uf' => 'RO', 'uf_full_name' => 'Rondônia']);
        DB::table('uf')->insert(['id' => 12,'uf' => 'AC', 'uf_full_name' => 'Acre']);
        DB::table('uf')->insert(['id' => 13,'uf' => 'AM', 'uf_full_name' => 'Amazonas']);
        DB::table('uf')->insert(['id' => 14,'uf' => 'RR', 'uf_full_name' => 'Roraima']);
        DB::table('uf')->insert(['id' => 15,'uf' => 'PA', 'uf_full_name' => 'Pará']);
        DB::table('uf')->insert(['id' => 16,'uf' => 'AP', 'uf_full_name' => 'Amapá']);
        DB::table('uf')->insert(['id' => 17,'uf' => 'TO', 'uf_full_name' => 'Tocantins']);
        DB::table('uf')->insert(['id' => 21,'uf' => 'MA', 'uf_full_name' => 'Maranhão']);
        DB::table('uf')->insert(['id' => 22,'uf' => 'PI', 'uf_full_name' => 'Piauí']);
        DB::table('uf')->insert(['id' => 23,'uf' => 'CE', 'uf_full_name' => 'Ceará']);
        DB::table('uf')->insert(['id' => 24,'uf' => 'RN', 'uf_full_name' => 'Rio Grande do Norte']);
        DB::table('uf')->insert(['id' => 25,'uf' => 'PB', 'uf_full_name' => 'Paraíba']);
        DB::table('uf')->insert(['id' => 26,'uf' => 'PE', 'uf_full_name' => 'Pernambuco']);
        DB::table('uf')->insert(['id' => 27,'uf' => 'AL', 'uf_full_name' => 'Alagoas']);
        DB::table('uf')->insert(['id' => 28,'uf' => 'SE', 'uf_full_name' => 'Sergipe']);
        DB::table('uf')->insert(['id' => 29,'uf' => 'BA', 'uf_full_name' => 'Bahia']);
        DB::table('uf')->insert(['id' => 31,'uf' => 'MG', 'uf_full_name' => 'Minas Gerais']);
        DB::table('uf')->insert(['id' => 32,'uf' => 'ES', 'uf_full_name' => 'Espírito Santo']);
        DB::table('uf')->insert(['id' => 33,'uf' => 'RJ', 'uf_full_name' => 'Rio de Janeiro']);
        DB::table('uf')->insert(['id' => 35,'uf' => 'SP', 'uf_full_name' => 'São Paulo']);
        DB::table('uf')->insert(['id' => 41,'uf' => 'PR', 'uf_full_name' => 'Paraná']);
        DB::table('uf')->insert(['id' => 42,'uf' => 'SC', 'uf_full_name' => 'Santa Catarina']);
        DB::table('uf')->insert(['id' => 43,'uf' => 'RS', 'uf_full_name' => 'Rio Grande do Sul']);
        DB::table('uf')->insert(['id' => 50,'uf' => 'MS', 'uf_full_name' => 'Mato Grosso do Sul']);
        DB::table('uf')->insert(['id' => 51,'uf' => 'MT', 'uf_full_name' => 'Mato Grosso']);
        DB::table('uf')->insert(['id' => 52,'uf' => 'GO', 'uf_full_name' => 'Goiás']);
        DB::table('uf')->insert(['id' => 53,'uf' => 'DF', 'uf_full_name' => 'Distrito Federal']);
    }
}
