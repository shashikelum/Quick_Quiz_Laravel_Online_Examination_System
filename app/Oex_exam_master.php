<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oex_exam_master extends Model
{
    protected $table ="oex_exam_masters";
    protected $primaryKey ="id";
    protected $fillable =['title','category','exam_date','status'];
}
