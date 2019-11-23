<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public $table='editoriales';
    public $primaryKey='id_editorial';
    public $guarded=[];
    public $timestamps=false;
}
