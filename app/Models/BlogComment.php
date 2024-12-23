<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    //
    use HasFactory;

    protected $fillable = [
    'detail', 'blogId', 'createdBy', 'createdAt', 'modifiedBy', 'modifiedAt'
    ];
}
