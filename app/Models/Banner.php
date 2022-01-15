<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'your_name'=>['required'],
    //     'your_bio' =>['required'],
    //     'your_img' =>['required'],
    // ];

    protected $fillable = [
            'your_name',
            'your_bio',
            'your_img',
    ];
}
