<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPostsAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts',function (Blueprint $table){
            $table->dropUnique("posts_author_unique");
            $table->dropForeign("posts_id_foreign");
            $table->renameColumn('author', 'user_id');
        });

        Schema::table('posts',function (Blueprint $table){
            $table->bigInteger("user_id", false, true)->change();
            $table->foreign("user_id")->references("id")->on("users");
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
