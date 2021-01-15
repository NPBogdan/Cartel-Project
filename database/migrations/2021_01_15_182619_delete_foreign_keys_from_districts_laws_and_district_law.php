<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteForeignKeysFromDistrictsLawsAndDistrictLaw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('districts', function (Blueprint $table) {
            $table->dropForeign('districts_name_foreign');
        });
        Schema::table('laws', function (Blueprint $table) {
            $table->dropForeign('laws_contravention_name_foreign');
            $table->dropForeign('laws_crime_name_foreign');
        });
        Schema::table('district_law', function (Blueprint $table) {
            $table->dropForeign('district_law_district_foreign');
            $table->dropForeign('district_law_contravention_foreign');
            $table->dropForeign('district_law_crime_foreign');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('district_law', function (Blueprint $table) {
            $table->foreign("district")->references("name")->on("districts")->onDelete("cascade");
            $table->foreign("crime")->references("crime_name")->on("laws")->onDelete("cascade");
            $table->foreign("contravention")->references("contravention_name")->on("laws")->onDelete("cascade");
        });
        Schema::table("districts",function (Blueprint $table){
            $table->foreign("name")->references("name")->on("cities")->onDelete("cascade");
        });
        Schema::table("laws",function (Blueprint $table){
            $table->foreign("contravention_name")->references("name")->on("districts")->onDelete("cascade");
            $table->foreign("crime_name")->references("name")->on("districts")->onDelete("cascade");
        });
    }
}
