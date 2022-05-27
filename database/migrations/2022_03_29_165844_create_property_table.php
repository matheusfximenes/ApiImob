<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Company;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->enum('type', 
                ['Casa', 'Apartamento', 
                 'Terreno', 'Sala', 'Loja']
            );
            $table->char('cep', 9);
            $table->char('state', 2);
            $table->string('city');
            $table->string('street');
            $table->char('number', 10);
            $table->string('district');
            $table->string('complement');
            $table->string('country');
            $table->foreignIdFor(Company::class);
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
        Schema::dropIfExists('property');
    }
};
