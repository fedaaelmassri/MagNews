<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_posts', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();

            $table->integer('role_id')->unsigned();
        
            $table->foreign('user_id')->references('id')->on('users')
        
                ->onDelete('cascade');
        
            $table->foreign('role_id')->references('id')->on('roles')
        
                ->onDelete('cascade');
        
        
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
        Schema::dropIfExists('category_posts');
    }
}
