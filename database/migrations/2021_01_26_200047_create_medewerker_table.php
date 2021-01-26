<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedewerkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medewerker', function (Blueprint $table) {
            $table->id("medewerkerscode");
            $table->string("voorletters", 100)->nullable(false);
            $table->string("voorvoegsels", 100);
            $table->string("achternaam", 100)->nullable(false);
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
        Schema::dropIfExists('medewerker');
    }
}
