<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table =  'products';
    protected $PrimaryKey ='id';
    protected $fillable = ['name','price'];
    use HasFactory;
}
