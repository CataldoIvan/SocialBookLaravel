<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodaBaseDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        //creo la tabla autores
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->date('birth_date');
            $table->date('birth_dead')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('book_id')->nullable();
            $table->integer('nationality_id')->nullable();
            $table->timestamps();
        });
        //creo la tabla idiomas
        Schema::create('languajes',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('languajes');
            $table->boolean('active')->default(true);

        });
        //creo la tabla nacionalidades
        Schema::create('nationalities',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('country');
            $table->boolean('active')->default(true);

        });
        //creo la tabla libros(no se si hay que agregar el campo de la foto)
        Schema::create('books',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->string('photo')->nullable();
            $table->integer('genre_id');
            $table->integer('author_id');
            $table->integer('languaje_id');
            $table->integer('editorial_id');
            $table->boolean('active')->default(true);

        });
        //creo la tabla generos
        Schema::create('genres',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('type');
            $table->boolean('active')->default(true);
        });
        //creo la tabla editoriales
        Schema::create('editorials',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('active')->default(true);
        });
        //creo la tabla posteos
        Schema::create('posts',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('review');
            $table->integer('user_id');
            $table->integer('book_id');
            $table->integer('comment_id');
            $table->boolean('active')->default(true);
        });
        //creo la tabla comentarios
        Schema::create('comments',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->mediumText('comment');
            $table->integer('user_id');
            $table->integer('post_id');
            $table->boolean('active')->default(true);
        });*/



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
        Schema::dropIfExists('languajes');
        Schema::dropIfExists('books');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('editorials');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('comments');
    }
}
