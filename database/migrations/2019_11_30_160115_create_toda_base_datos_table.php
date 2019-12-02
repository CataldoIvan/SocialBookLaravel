<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodaBaseDatosTable extends Migration
{
   
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
            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->timestamps();
        });
        //creo la tabla idiomas
        Schema::create('languajes',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('languajes');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        //creo la tabla nacionalidades
        Schema::create('nationalities',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('country');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        //creo la tabla libros(no se si hay que agregar el campo de la foto)
        Schema::create('books',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('languaje_id')->nullable();
            $table->unsignedBigInteger('editorial_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        //creo la tabla generos
        Schema::create('genres',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('type');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        //creo la tabla editoriales
        Schema::create('editorials',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->timestamps();
               });
        //creo la tabla posteos
        Schema::create('posts',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('review');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
        //creo la tabla comentarios
        Schema::create('comments',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->mediumText('comment');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });



    }
    
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
