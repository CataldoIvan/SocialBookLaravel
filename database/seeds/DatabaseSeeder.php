<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
        factory(App\Genre::class,2)->create();
        $this->call(lenguajesSeeder::class);
        $this->call(nationalitiesSeeder::class);  
         factory(App\Editorial::class,4)->create(); 
         factory(App\User::class,2)->create();  
    
        factory(App\Author::class,4)->create();  
        
        factory(App\Book::class,3)->create();
       factory(App\Post::class,2)->create();  
        factory(App\Comment::class,2)->create(); 
        
    }
}
