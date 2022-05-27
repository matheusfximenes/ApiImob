<?php

use App\Models\City;
use App\Models\Uf;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('cpf', 14)->unique();
            $table->char('cadsus', 15)->unique();
            $table->date('birthdate');
            $table->enum('sexo', ['Feminino', 'Masculino']);
            $table->enum('ethnicity', ['Branca', 'Amarela', 'Parda', 'Preta', 'Indígena']);
            $table->string('mother')->nullable();
            $table->boolean('has_mother')->nullable();
            $table->string('father')->nullable();
            $table->boolean('has_father')->nullable();
            $table->foreignIdFor(Uf::class);
            $table->foreignIdFor(City::class);
            $table->boolean('is_alive')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peoples');
    }
};
