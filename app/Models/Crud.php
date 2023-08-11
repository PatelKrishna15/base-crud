<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Crud extends Model
{
    use HasFactory;
    protected $fillable =['name','stud_id'];


    // public function stud()
    // {
    //     return $this->belongsTo(Stud::class,'stud_id','id');
    // }
}
