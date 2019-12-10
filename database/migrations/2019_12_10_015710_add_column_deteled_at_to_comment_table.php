<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\SoftDeletes;

class AddColumnDeteledAtToCommentTable extends Migration
{
   
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->SoftDeletes();
        });
    }

   
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn(deteled_at);
        });
    }
}
