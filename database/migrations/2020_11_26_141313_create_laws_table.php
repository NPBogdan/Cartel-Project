<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laws', function (Blueprint $table) {
            $table->id();
            $table->string("contravention_name");
            $table->string("crime_name");
            $table->timestamps();

            $table->foreign("contravention_name")->references("name")->on("districts")->onDelete("cascade");
            $table->foreign("crime_name")->references("name")->on("districts")->onDelete("cascade");
        });

        Schema::create('district_law', function (Blueprint $table) {
            $table->id();
            $table->string("district");
            $table->string("contravention");
            $table->string("crime");
            $table->timestamps();

            $table->foreign("district")->references("name")->on("districts")->onDelete("cascade");
            $table->foreign("crime")->references("crime_name")->on("laws")->onDelete("cascade");
            $table->foreign("contravention")->references("contravention_name")->on("laws")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laws');
        Schema::dropIfExists('district_law');
    }
}
