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
    {
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
        });
 /////////// aca empiezo a definir las delaciones entre tabls con foreng key//////////
    /*  Schema::table('users',function(Blueprint $table){
            $table->unsignedInteger('nationality_id');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
        });

        Schema::table('authors',function(Blueprint $table){
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('nationality_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('nationality_id')->references('id')->on('nationalities');

        });
        Schema::table('books',function(Blueprint $table){
            $table->unsignedInteger('genre_id');
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('languaje_id');
            $table->unsignedInteger('editorial_id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('languaje_id')->references('id')->on('languajes');
            $table->foreign('editorial_id')->references('id')->on('editorials');
        
        
        });
        Schema::table('posts',function(Blueprint $table){
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('commment_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('commment_id')->references('id')->on('comments');

        });
        Schema::table('comments',function(Blueprint $table){
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('post_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
           
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
