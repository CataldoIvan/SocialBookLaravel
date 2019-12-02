<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClavesForaneasTable extends Migration
{

    public function up()
    {
/////////// aca empiezo a definir las delaciones entre tabls con foreng key//////////
         Schema::table('users',function(Blueprint $table){
            $table->foreign('nationality_id')->references('id')->on('nationalities');
        }); 

        Schema::table('authors',function(Blueprint $table){
           
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('nationality_id')->references('id')->on('nationalities');

        });
        Schema::table('books',function(Blueprint $table){
            
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('languaje_id')->references('id')->on('languajes');
            $table->foreign('editorial_id')->references('id')->on('editorials');
        
        
        });
        Schema::table('posts',function(Blueprint $table){
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('comment_id')->references('id')->on('comments');

        });
        Schema::table('comments',function(Blueprint $table){
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //borrado de las claves foraneas
       
       Schema::dropForeign('users_nationality_id_foreign') ; 
        Schema::dropForeign('authors_book_id_foreign');
        Schema::dropForeign('authors_nationality_id_foreign');
        Schema::dropForeign('books_genre_id_foreign');
        Schema::dropForeign('books_author_id_foreign');
        Schema::dropForeign('books_languaje_id_foreign');
        Schema::dropForeign('books_editorial_id_foreign');
        Schema::dropForeign('posts_user_id_foreign');
        Schema::dropForeign('posts_book_id_foreign');
        Schema::dropForeign('posts_comment_id_foreign');
        Schema::dropForeign('comments_user_id_foreign');
        Schema::dropForeign('comments_post_id_foreign'); 

    }
    
}
