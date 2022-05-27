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
        Schema::create('property_owner', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->char('phone', 20);
            $table->char('cpf', 14)->unique();
            $table->date('birthdate');
            $table->enum('marital_status', 
                ['Solteiro(a)', 'Casado(a)', 
                 'Divorciado(a)', 'União Estavel', 
                 'Viúvo(a)']
            );
            $table->char('cep', 9);
            $table->char('state', 2);
            $table->string('city');
            $table->string('street');
            $table->char('number', 10);
            $table->string('district');
            $table->string('complement');
            $table->string('country');
            $table->string('password');
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
        Schema::dropIfExists('table_property_owner');
    }
};
