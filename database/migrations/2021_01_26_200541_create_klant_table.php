<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klant', function (Blueprint $table) {
            $table->id("klantencode");
            $table->string("voorletters", 100)->nullable(false);
            $table->string("tussenvoegsel", 100);
            $table->string("achternaam", 100)->nullable(false);
            $table->string("adres", 100)->nullable(false);
            $table->string("postcode", 100)->nullable(false);
            $table->string("woonplaats", 100)->nullable(false);
            $table->date("geboortedatum")->nullable(false);
            $table->string("gebruikersnaam", 100)->nullable(false);
            $table->string("wachtwoord", 100)->nullable(false);
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
        Schema::dropIfExists('klant');
    }
}
