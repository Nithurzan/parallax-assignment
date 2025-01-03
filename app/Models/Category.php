<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table =  'categories';
    protected $PrimaryKey ='id';
    protected $fillable = ['name'];
    use HasFactory;
}
