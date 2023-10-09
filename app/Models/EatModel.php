<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EatModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'artical_name',
        'artical_description',
        'classification',
        'previu_img',
        'price',
        'discount',
    ];
}
