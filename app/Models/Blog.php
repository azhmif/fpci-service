<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'jenis', 'metaTitle', 'metaDesc', 'detail', 'img', 'notes', 'publishedBy', 'publishedAt', 'isActive', 'visitCount', 'status', 'categoryId', 'createdBy', 'createdAt', 'modifiedBy', 'modifiedAt'
    ];
}
