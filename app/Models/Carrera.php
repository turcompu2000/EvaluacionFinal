<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table=('carrerra');
    protected $primaryKey='id_Carrera';
    public $timestamps=false;
}
