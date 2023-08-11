<?php

namespace App\Models;

use App\Http\Controllers\CrudController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud extends Model
{
    use HasFactory;
    protected $fillable =['name'];

  
}
