<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    # the variables for Blog
    protected $guarded = [
        'title',
        'author',
        'content',
        'publication_date'
     ];
}
