<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;

class Multilanghero extends Model
{
    //

    use HasTranslations;
    protected $table = 'multilanghero';

    protected $fillable = ['title', 'content', 'image'];

    // daftar kolom yang translatable
    public $translatable = ['title', 'content', 'image'];
}
